<?php

namespace App\Http\Controllers\Admin;

use App\Alphabate;
use App\Category;
use App\CategoryWiseClient;
use App\Client\Client;
use App\Client\ClientContactUs;
use App\Client\ClientNotice;
use App\Client\ClientService;
use App\ClientGallery;
use App\ClientProfile;
use App\District;
use App\Menufacture\ManufactureWiseCategory;
use App\Staff;
use App\User;
use App\WelcomeMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ClientController extends Controller
{
    public function index(){
        $title = 'Client Listing - Admin-Panel | khojbiz.com';
        $count_clients = Client::all()->count();
        $category = Category::orderBy('name','ASC')->get();
        $client = Client::orderBy('id','DESC');
        if (\request('search_company_name')){
            $client->where('company_name','LIKE','%'.\request('search_company_name').'%');
            $clients = $client->paginate(50);
        }else{
            $clients = $client->whereBetween("created_at",[date('Y-m-d 00:00:00'),  date('Y-m-t 11:11:59')])->paginate(100);
        }
        return view('admin.client.index',compact('title','clients','category','count_clients'));

    }
    public function create(){
        $title = 'Create New Client - Admin-Panel | khojbiz.com';
        $districts = District::orderBy('name','ASC')->get();
        $category = Category::orderBy('name','ASC')->get();
        $staffs = Staff::orderBy('f_name')->get();
        $alpha = Alphabate::orderBy('name')->get();
        return view('admin.client.create',compact('title','districts','category','alpha','staffs'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'company_name'=> 'required|unique:clients,company_name',
            'district_id'=> 'required',
            'send_mail'=> 'required',
            'client_type'=> 'required',
            'tag'=> 'required',
//            'name'=> 'required|unique:users,name',
            'email'=> 'required|unique:users,email',
            'password' =>'required|confirmed',
        ]);
        /*=========== Creating User ============ */
        $username = str_slug($request->company_name);
        $user = New User();
//        $user->name = strtolower($request->name);
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->type = 'client';
        $user->status = 'active';
        $login_email = $request->email;
        $login_password = $request->password;
        if ($user->save()){
            $user->name = $username.'-'.$user->id;
            $user->save();
            /*=========== Creating Clients ============ */
            $client = New Client();
            $client->company_name = $request->company_name;
            $client->slug = str_slug($request->company_name);
            $client->company_address = $request->company_address;
            $client->company_head = $request->company_head;
            $client->mobile = $request->mobile;
            $client->ofc_tel_no = $request->ofc_tel_no;
            $client->website = $request->website;
            $client->map_link = $request->map_link;
            $client->client_type = $request->client_type;
            $client->company_nature = 'business';
            $client->company_profile = $request->company_profile;
            $client->district_id = $request->district_id;
            $client->alpha_id = $request->alpha_id;
            $client->password = $request->password;
            $client->user_id = $user->id;
            $client->entry_by = $request->entry_by;
            $client->status = $request->status;
            $client->tag = $request->tag;
            if ($request->hasFile('logo')){
                $filename = time().'.'.request()->file('logo')->getClientOriginalExtension();
                $filename = md5(microtime()) . '.' . $filename;
                request()->file('logo')->move('public/uploads/logos/',$filename);
                $client->logo =$filename;
            }
            if ($request->hasFile('banner')){
                $filename = time().'.'.request()->file('banner')->getClientOriginalExtension();

                $filename = md5(microtime()) . '.' . $filename;

                request()->file('banner')->move('public/uploads/banners/',$filename);
                $client->banner =$filename;
            }

            $client->save();
            if (\request('send_mail')=='Yes'){
                Mail::to($request->email)->send(new WelcomeMail($login_email, $login_password));
            }

            foreach(\request('cat_id') as $key => $value){
                if ((CategoryWiseClient::where('cat_id',$value)->where('client_id',$client->id)->count())==0){
                    $client_category = CategoryWiseClient::firstOrNew(['cat_id'=>$value,'client_id'=>$client->id]);
                    $client_category->save();
                }else{
                    return redirect()->back()->with('error', 'Already Uses');
                }
            }
            return redirect('admin/list-clients')->with('success','Client Created Successfully !');
        }
    }
    public function edit($id){
        $title = 'Edit Client - Admin-Panel | khojbiz.com';
        $districts = District::orderBy('name','ASC')->get();
        $alpha = Alphabate::orderBy('name','ASC')->get();
        $categories  = Category::orderBy('name','ASC')->get();
        $client = Client::findOrFail($id);
        $staffs = Staff::orderBy('f_name')->get();
        return view('admin.client.edit',compact('title','districts','categories','alpha','client','staffs'));
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'company_name'=> 'required',
            'district_id'=> 'required',
            'client_type'=> 'required',
            'tag'=> 'required',
        ]);
        $client = Client::findOrFail($id);
        $client->company_name = $request->company_name;
        $client->slug = str_slug($request->company_name);
        $client->company_address = $request->company_address;
        $client->company_head = $request->company_head;
        $client->mobile = $request->mobile;
        $client->ofc_tel_no = $request->ofc_tel_no;
        $client->client_type = $request->client_type;
        $client->company_nature = 'business';
        $client->company_profile = $request->company_profile;
        $client->district_id = $request->district_id;
        $client->alpha_id = $request->alpha_id;
        $client->website = $request->website;
        $client->map_link = $request->map_link;
        $client->entry_by = $request->entry_by;
        $client->status = $request->status;
        $client->office_contact = $request->office_contact;
        $client->tag = $request->tag;
        if ($request->hasFile('logo')){
            if (is_file(public_path('uploads/logos/').'/'.$client->logo) && file_exists(public_path('uploads/logos/').'/'.$client->logo)){
                unlink(public_path('uploads/logos/').'/'.$client->logo);
            }

            $filename = time().'.'.request()->file('logo')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('logo')->move('public/uploads/logos/',$filename);
            $client->logo =$filename;
        }
        if ($request->hasFile('banner')){
            if (is_file(public_path('uploads/banners/').'/'.$client->banner) && file_exists(public_path('uploads/banners/').'/'.$client->banner)){
                unlink(public_path('uploads/banners/').'/'.$client->banner);
            }

            $filename = time().'.'.request()->file('banner')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('banner')->move('public/uploads/banners/',$filename);
            $client->banner =$filename;
        }

        $client->save();
        if ($request->cat_id){
            foreach(\request('cat_id') as $key => $value){
                $client_category = CategoryWiseClient::firstOrNew(['cat_id'=>$value,'client_id'=>$client->id]);
                $client_category->save();
            }

        }else{
            foreach ($client->client_category as $category){
                $category->delete();
            }
        }
        return redirect('admin/list-clients')->with('success','Client Updated Successfully !');

    }
    public function delete($id){
        $client = Client::findOrFail($id);
        $cat_clients = CategoryWiseClient::where('client_id',$id)->get();
        $client_contacts = ClientContactUs::where('client_id',$id)->get();
        $client_galleries = ClientGallery::where('client_id',$id)->get();
        $client_notices = ClientNotice::where('client_id',$id)->get();
        $client_services = ClientService::where('client_id',$id)->get();
        if (count($cat_clients)>0){
            foreach ($cat_clients as $cat){
                $cat->delete();
            }
        }
        if (count($client_contacts)>0){
            foreach ($client_contacts as $contact){
                $contact->delete();
            }
        }
        if (count($client_galleries)>0){
            foreach ($client_galleries as $gallery){
                if (is_file(public_path('uploads/client-gallery/').'/'.$gallery->image) && file_exists(public_path('uploads/client-gallery/').'/'.$gallery->image)){
                    unlink(public_path('uploads/client-gallery/').'/'.$gallery->image);
                }
                $gallery->delete();
            }
        }
        if (count($client_notices)>0){
            foreach ($client_notices as $notice){
                $notice->delete();
            }
        }
        if (count($client_services)>0){
            foreach ($client_services as $service){
                if (is_file(public_path('uploads/client-service/').'/'.$service->file) && file_exists(public_path('uploads/client-service/').'/'.$service->file)){
                    unlink(public_path('uploads/client-service/').'/'.$service->file);
                }
                $service->delete();
            }
        }
        if (is_file(public_path('uploads/logos/').'/'.$client->logo) && file_exists(public_path('uploads/logos/').'/'.$client->logo)){
            unlink(public_path('uploads/logos/').'/'.$client->logo);
        }
        if (is_file(public_path('uploads/banners/').'/'.$client->banner) && file_exists(public_path('uploads/banners/').'/'.$client->banner)){
            unlink(public_path('uploads/banners/').'/'.$client->banner);
        }
        $user = User::where('id',$client->user_id)->first();
        $user->delete();

        $client->delete();

        return redirect('admin/list-clients')->with('success','Client Deleted Successfully !!');
    }
}
