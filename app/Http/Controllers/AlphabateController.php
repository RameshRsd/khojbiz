<?php

namespace App\Http\Controllers;

use App\Alphabate;
use App\Category;
use App\Client\Client;
use Illuminate\Http\Request;

class AlphabateController extends Controller
{
    public function index($alpha){
        $title = 'Browse By Alphabates - Khojbiz.com';
        $alpha_id = Alphabate::where('name',$alpha)->firstOrFail();
        $categories= Category::where('alphabate_id',$alpha_id->id)->get();
        $top_clients= Client::where('client_type','sponser')->get();
        return view('frontend.pages.alpha.category',compact('title','categories','top_clients'));
    }
    public function category($slug){
        $title = 'Browse By Alphabates - Khojbiz.com';
        $alpha_id = Alphabate::where('name',$slug)->firstOrFail();
        $clients= Client::where('alpha_id',$alpha_id->id)->get();
        $top_clients= Client::where('client_type','sponser')->get();
        return view('frontend.pages.alpha.index',compact('title','clients','top_clients'));
    }
}
