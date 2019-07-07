<?php

namespace App\Http\Controllers\Client;

use App\Category;
use App\CategoryWiseClient;
use App\Client\Client;
use App\District;
use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function business_details(){
        $client = Client::where('user_id',Auth::user()->id)->first();
        $title = 'Edit Profile'.$client->company_name.' - Client Area - Khojbiz.com';
        $categories = Category::orderBy('name')->get();
        return view('new.client.profile.business-details',compact('title','client','categories'));
    }
    public function update_business_details(Request $request){
        $this->validate($request, [
            'company_name'=> 'required',
            'cat_id'=> 'required',
        ]);
        $client = Client::where('user_id',Auth::user()->id)->firstOrFail();
        $client->company_name = $request->company_name;
        $client->website = $request->website;
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
        return redirect()->back()->with('success','Record Updated Successfully !!');
    }
    public function contact_details(){
        $client = Client::where('user_id',Auth::user()->id)->first();
        $title = 'Edit Contact Details'.$client->company_name.' - Client Area - Khojbiz.com';
        $districts = District::orderBy('name')->get();
        return view('new.client.profile.contact-details',compact('title','client','districts'));
    }
    public function update_contact_details(Request $request){
        $this->validate($request, [
            'district_id'=> 'required',
            'company_address'=> 'required',
            'mobile'=> 'required',
        ]);
        $client = Client::where('user_id',Auth::user()->id)->firstOrFail();
        $client->district_id = $request->district_id;
        $client->company_address = $request->company_address;
        $client->ofc_tel_no = $request->office_contact;
        $client->company_head = $request->company_head;
        $client->mobile = $request->mobile;
        $client->map_link = $request->map_link;
        $client->save();
        return redirect()->back()->with('success','Record Updated Successfully !!');
    }
    public function about_company(){
        $client = Client::where('user_id',Auth::user()->id)->first();
        $title = 'Edit About Company'.$client->company_name.' - Client Area - Khojbiz.com';
        return view('new.client.profile.about-company',compact('title','client'));
    }
    public function update_about_company(Request $request){
        $this->validate($request, [
            'company_profile'=> 'required',
        ]);
        $client = Client::where('user_id',Auth::user()->id)->firstOrFail();
        $client->company_profile = $request->company_profile;
        $client->save();
        return redirect()->back()->with('success','Record Updated Successfully !!');
    }
}
