<?php

namespace App\Http\Controllers\Manufacture;

use App\Client\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ManufactureController extends Controller
{
    public function index(){
        $title = 'hello';
        $client = Client::where('user_id',Auth::user()->id)->firstOrFail();
        return view('manufacture.index',compact('client','title'));
    }
}
