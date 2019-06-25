<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Alphabate;
use App\BuySell\ProductCategory;
use App\Category;
use App\Client\Client;
use App\Menufacture\MenuCategory;
use App\Menufacture\MenuSubCategory;
use Illuminate\Http\Request;

class AlphabateController extends Controller
{
    public function index($alpha){
        $title = 'Browse By Alphabates - Khojbiz.com';
        $alpha_id = Alphabate::where('name',$alpha)->firstOrFail();
        $categories= Category::where('alphabate_id',$alpha_id->id)->get();
        $top_clients= Client::where('client_type','sponser')->get();
        return view('frontend.pages.alpha.category',compact('title','categories','top_clients','alpha_id'));
    }
    public function product_index($alpha){
        $title = 'Product Browse By Alphabet - Khojbiz.com';
        $alpha_id = Alphabate::where('name',$alpha)->firstOrFail();
        $categories= ProductCategory::where('alphabet_id',$alpha_id->id)->get();
        $top_clients= Client::where('client_type','sponser')->get();
        $feature_ads = Advertisement::where('status','active')->where('type','feature')->where('status','active')->get();
        return view('frontend.pages.alpha.product_alpha_category',compact('title','categories','top_clients','alpha_id','feature_ads'));
    }
    public function manufacture_alpha($alpha){
        $title = 'Browse By Alphabates - Khojbiz.com';
        $alpha_id = Alphabate::where('name',$alpha)->firstOrFail();
        $categories= MenuCategory::where('alphabet_id',$alpha_id->id)->get();
        $top_clients= Client::where('client_type','sponser')->get();
        $feature_ads = Advertisement::where('status','active')->where('type','feature')->where('status','active')->get();
        return view('frontend.pages.alpha.manufacture_alpha_category',compact('title','categories','top_clients','alpha_id','feature_ads'));
    }
    public function category($slug){
        $title = 'Browse By Alphabates - Khojbiz.com';
        $alpha_id = Alphabate::where('name',$slug)->firstOrFail();
        $clients= Client::where('alpha_id',$alpha_id->id)->get();
        $top_clients= Client::where('client_type','sponser')->get();
        return view('frontend.pages.alpha.index',compact('title','clients','top_clients','alpha_id'));
    }
}
