<?php

namespace App\Http\Controllers\Admin\ClientProfile;

use App\Alphabate;
use App\Category;
use App\Client\Client;
use App\Client\ClientAboutUs;
use App\District;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClientAboutUsController extends Controller
{
    public function edit_about($name){
        $title = 'Edit Client - Admin-Panel | khojbiz.com';
        $user = User::where('name',$name)->firstOrFail();
        $client = Client::where('user_id',$user->id)->firstOrFail();
        $client_about = ClientAboutUs::where('client_id',$client->id)->firstOrFail();
        return view('admin.client.pages.profile', compact('title', 'districts', 'category', 'alpha', 'client','client_about'));
    }

    public function update_about (Request $request,$id){
        $this->validate($request, [
            'details'=> 'required',
        ]);
        $client = ClientAboutUs::findOrFail($id);
        $client->details = $request->details;
        $client->save();
        return redirect('admin/list-clients')->with('success','Client Updated Successfully !');

    }
}
