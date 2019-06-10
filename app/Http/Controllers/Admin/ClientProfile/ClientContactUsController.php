<?php

namespace App\Http\Controllers\Admin\ClientProfile;

use App\Client\Client;
use App\District;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientContactUsController extends Controller
{
    public function edit_contact ($id){
        $title = 'Edit Client - Admin-Panel | khojbiz.com';
        $districts = District::orderBy('name','ASC')->get();
        $client = Client::findOrFail($id);
        return view('admin.client.pages.contact',compact('title','districts','category','alpha','client'));

    }

    public function update_contact(Request $request, $id){
        $this->validate($request, [
            'mobile'=> 'required',
            'district_id'=> 'required',
            'ofc_tel_no'=> 'required',
            'district_id'=> 'required',
        ]);
        $client = Client::findOrFail($id);
        $client->district_id = $request->district_id;
        $client->company_address = $request->company_address;
        $client->company_head = $request->company_head;
        $client->mobile = $request->mobile;
        $client->ofc_tel_no = $request->ofc_tel_no;
        $client->district_id = $request->district_id;
        $client->website = $request->website;
        $client->map_link = $request->map_link;
        $client->office_contact = $request->office_contact;

        $client->save();
        return redirect('admin/list-clients')->with('success','Client Contact Us Updated Successfully !');

    }

}
