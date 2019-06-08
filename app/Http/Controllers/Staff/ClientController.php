<?php

namespace App\Http\Controllers\Staff;

use App\Alphabate;
use App\Category;
use App\CategoryWiseClient;
use App\Client\Client;
use App\District;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index(){
        $title = 'Client Listing - Admin-Panel | khojbiz.com';
        $clients = Client::where('entry_by',Auth::user()->id)->orderBy('company_name','ASC')->get();
        $category = Category::orderBy('name','ASC')->get();
        return view('staff.pages.index',compact('title','clients','category'));

    }
    public function create(){
        $title = 'Create New Client - Admin-Panel | khojbiz.com';
        $districts = District::orderBy('name','ASC')->get();
        $category = Category::orderBy('name','ASC')->get();
        $alpha = Alphabate::orderBy('name')->get();
        return view('staff.pages.create',compact('title','districts','category','alpha'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'company_name'=> 'required|unique:clients,company_name',
            'district_id'=> 'required',
            'client_type'=> 'required',
            'name'=> 'required|unique:users,name',
            'email'=> 'required|unique:users,email',
            'password' =>'required|confirmed',
        ]);
        /*=========== Creating User ============ */
        $user = New User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->type = 'client';
        $user->status = 'active';
        if ($user->save()){
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
            $client->company_profile = $request->company_profile;
            $client->district_id = $request->district_id;
            $client->alpha_id = $request->alpha_id;
            $client->password = $request->password;
            $client->user_id = $user->id;
            $client->entry_by = Auth::user()->id;
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
            return redirect('admin/category-wise-client')->with('success','Client Created Successfully !');
        }
    }
    public function edit($id){
        $title = 'Edit Client - Admin-Panel | khojbiz.com';
        $districts = District::orderBy('name','ASC')->get();
        $alpha = Alphabate::orderBy('name','ASC')->get();
        $category = Category::orderBy('name','ASC')->get();
        $client = Client::findOrFail($id);
        return view('staff.pages.edit',compact('title','districts','category','alpha','client'));
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'company_name'=> 'required',
            'district_id'=> 'required',
            'client_type'=> 'required',
        ]);
        $client = Client::findOrFail($id);
        $client->company_name = $request->company_name;
        $client->slug = str_slug($request->company_name);
        $client->company_address = $request->company_address;
        $client->company_head = $request->company_head;
        $client->mobile = $request->mobile;
        $client->ofc_tel_no = $request->ofc_tel_no;
        $client->client_type = $request->client_type;
        $client->company_profile = $request->company_profile;
        $client->district_id = $request->district_id;
        $client->alpha_id = $request->alpha_id;
        $client->website = $request->website;
        $client->map_link = $request->map_link;
        $client->office_contact = $request->office_contact;
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
        return redirect('staff/category-wise-client')->with('success','Client Updated Successfully !');

    }

    public function cat_wise_client(){
        $title = 'Category Wise Client';
        $client = Client::where('entry_by',Auth::user()->id)->orderBy('id','DESC')->get();
        $categories = Category::all();
        return view('staff.category.category_wise_client',compact('title','client','categories'));
    }
    public function cat_wise_client_store(Request $request){
        $this->validate($request,[
            'client_id'=>'required',
            'cat_id'=>'required',
        ]);

        foreach(\request('cat_id') as $key => $value){
            if ((CategoryWiseClient::where('cat_id',$value)->where('client_id',$request->client_id)->count())==0){
                $student_grades = CategoryWiseClient::firstOrNew(['cat_id'=>$value,'client_id'=>$request->client_id]);
                $student_grades->save();
            }else{
                return redirect()->back()->with('error', 'Already Uses');
            }
        }
        return redirect()->back()->with('success', 'Record Saved Successfully');

    }
}