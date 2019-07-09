<?php

namespace App\Http\Controllers\Client;

use App\Client\Client;
use App\Client\ClientContactUs;
use App\Client\ClientNotice;
use App\ClientGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
   public function index(){
       $client = Client::where('user_id',Auth::user()->id)->firstOrFail();
       $notices = ClientNotice::where('client_id',$client->id)->where('status','draft')->get();
       $galleries = ClientGallery::where('client_id',$client->id)->where('status','inactive')->get();
       return view('new.client.index',compact('client','notices','galleries'));
//       return view('frontend.pages.client.profile.index',compact('client'));
   }
   public function profile(){
       $client = Client::where('user_id',Auth::user()->id)->firstOrFail();
       return view('frontend.pages.client.profile.client_profile',compact('client'));
   }
   public function contact(){
       $client = Client::where('user_id',Auth::user()->id)->firstOrFail();
       return view('frontend.pages.client.profile.client_profile',compact('client'));
   }

   public function enquiry(){
       $client = Client::where('user_id',Auth::user()->id)->firstOrFail();
       $queries = ClientContactUs::where('client_id',$client->id)->get();
       return view('new.client.contact.index',compact('client','notices','queries'));
//       return view('frontend.pages.client.profile.index',compact('client'));
   }

   public function get_enquiry(Request $request,$id){
       $this->validate($request, [
           'name'=> 'required',
           'mobile'=> 'numeric|required|min:10',
           'email'=> 'required',
           'details'=> 'required',
       ]);
       $contact = new ClientContactUs();
       $contact->name = $request->name;
       $contact->mobile = $request->mobile;
       $contact->email = $request->email;
       $contact->details = $request->details;
       $contact->client_id = $id;
       $contact->save();
       return redirect()->back()->with('contact-success','Thank you for contacting us !!');
   }
}
