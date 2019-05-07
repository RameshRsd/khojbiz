<?php

namespace App\Http\Controllers\Admin;

use App\Client\Client;
use App\CompanyNature;
use App\District;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    public function index(){
        $title = 'Client Listing - Admin-Panel | khojbiz.com';
        $clients = Client::orderBy('company_name','ASC')->get();
        return view('admin.client.index',compact('title','clients'));

    }
    public function create(){
        $title = 'Create New Client - Admin-Panel | khojbiz.com';
        $districts = District::orderBy('name','ASC')->get();
        $natures = CompanyNature::orderBy('name','ASC')->get();
        return view('admin.client.create',compact('title','districts','natures'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'company_name'=> 'required|unique:clients,company_name',
            'district_id'=> 'required',
            'client_type'=> 'required',
            'company_nature_id'=> 'required',
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
            $client->company_address = $request->company_address;
            $client->company_head = $request->company_head;
            $client->mobile = $request->mobile;
            $client->client_type = $request->client_type;
            $client->company_profile = $request->company_profile;
            $client->district_id = $request->district_id;
            $client->company_nature_id = $request->company_nature_id;
            $client->password = $request->password;
            $client->user_id = $user->id;
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
            return redirect('admin/list-clients')->with('success','Client Created Successfully !');
        }
    }
    public function edit($id){
        $title = 'Edit Client - Admin-Panel | khojbiz.com';
        $districts = District::orderBy('name','ASC')->get();
        $natures = CompanyNature::orderBy('name','ASC')->get();
        $client = Client::findOrFail($id);
        return view('admin.client.edit',compact('title','districts','natures','client'));
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'company_name'=> 'required',
            'district_id'=> 'required',
            'client_type'=> 'required',
            'company_nature_id'=> 'required',
        ]);
        $client = Client::findOrFail($id);
        $client->company_name = $request->company_name;
        $client->company_address = $request->company_address;
        $client->company_head = $request->company_head;
        $client->mobile = $request->mobile;
        $client->client_type = $request->client_type;
        $client->company_profile = $request->company_profile;
        $client->district_id = $request->district_id;
        $client->company_nature_id = $request->company_nature_id;
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
        return redirect('admin/list-clients')->with('success','Client Updated Successfully !');

    }
}
