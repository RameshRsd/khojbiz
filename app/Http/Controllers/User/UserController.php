<?php

namespace App\Http\Controllers\User;

use App\Client\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $client = Client::where('user_id',Auth::user()->id)->firstOrFail();
        return view('frontend.pages.users.profile.index',compact('client'));
    }
    public function about_us(){
        $client = Client::where('user_id',Auth::user()->id)->firstOrFail();
        return view('frontend.pages.users.profile.about_us',compact('client'));
    }


}
