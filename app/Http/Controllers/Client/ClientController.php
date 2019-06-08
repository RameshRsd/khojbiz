<?php

namespace App\Http\Controllers\Client;

use App\Client\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
   public function index(){
       $client = Client::where('user_id',Auth::user()->id)->firstOrFail();
       return view('frontend.pages.client.profile.index',compact('client'));
   }

}
