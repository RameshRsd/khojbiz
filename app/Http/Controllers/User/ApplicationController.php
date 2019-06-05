<?php

namespace App\Http\Controllers\User;

use App\Advertisement;
use App\Category;
use App\CategoryWiseClient;
use App\Client\Client;
use App\District;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplicationController extends Controller
{
    public function profile(){
        $title ='Client Profile';
        $clients =Client::all();
        $category =Category::all();
        return view('frontend.profile',compact('title','clients','category'));
    }
    public function product(){
        $title ='Product Profile';
        return view('frontend.pages.product.index',compact('title','clients','category'));
    }
    public function search(){
        $title ='Search Profile';
        $clients =Client::orderBy('id','DESC');
        if (\request('cat')){
            $categories = Category::where('slug',\request('cat'))->firstOrFail();
            $title =$categories->name;
            $client_wise_cats = CategoryWiseClient::where('cat_id',$categories->id)->get();
            foreach ($client_wise_cats as $category){
                $clients->orWhere('id',$category->client_id);
            }
        }
        if (\request('keyword') || \request('location')){
            $disticts = District::where('name',\request('keyword'))->orWhere('name',\request('location'))->get();
            $clients->where('company_name','like','%'.\request('keyword').'%')
            ->orWhere('company_address',\request('keyword'))->orWhere('company_address',\request('location'));
            if (count($disticts)>0){
                foreach ($disticts as $distict){
                    $clients->orWhere('district_id',$distict->id);
                }
            }else{
                $clients->orWhere('district_id',\request('keyword'));
            }
        }
        $clients =$clients->get();
        $category =Category::orderBy('id','DESC');
        return view('frontend.listing',compact('title','clients','category'));
    }

    public function overview($slug){
        $client =Client::where('slug',$slug)->firstOrFail();
        $ads = Advertisement::where('status','active')->where('type','top')->where('status','active')->get();
        $side_ads = Advertisement::where('status','active')->where('type','general')->where('status','active')->get();
        $category =Category::all();
        $title = $client->company_name.' - Khojbiz.com';
        $discription = str_limit($client->company_profile,150);
        if (isset($client->banner)){
            $image = '/public/uploads/banners'.'/'.$client->banner;
        }
        return view('frontend.profile',compact('title','client','ads','side_ads','category','discription','image'));
    }
}
