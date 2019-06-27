<?php

namespace App\Http\Controllers\Business;

use App\Client\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BusinessController extends Controller
{
    public function index(){
        $title = 'hello';
        $client = Client::where('user_id',Auth::user()->id)->where('company_nature','business')->firstOrFail();
        return view('business.index',compact('title','client'));
    }
}
