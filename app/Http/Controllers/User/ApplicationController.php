<?php

namespace App\Http\Controllers\User;

use App\Advertisement;
use App\BuySell\Product;
use App\BuySell\ProductCategory;
use App\BuySell\ProductWiseSuppliers;
use App\Category;
use App\CategoryWiseClient;
use App\Client\Client;
use App\District;
use App\Place\location;
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
            $title =$categories->name.' - Khojbiz.com';
                $clients->whereIn('id',$categories->getClientIds());
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
    public function search_product(){
        $title ='Search Profile';
        $top_product = Product::orderBy('id','ASC')->where('product_type','diamond')->get();
        $feature_ads = Advertisement::where('status','active')->where('type','feature')->where('status','active')->get();
        $products =Product::orderBy('id','ASC');
        if (\request('cat')){
            $categories = ProductCategory::where('slug',\request('cat'))->firstOrFail();
            $title =$categories->name;
            $products->whereIn('id',$categories->getProductIds());
            }
        if (\request('keyword') || \request('location')){
            $disticts = District::where('name',\request('keyword'))->orWhere('name',\request('location'))->get();
            $products->where('company_name','like','%'.\request('keyword').'%')
            ->orWhere('company_address',\request('keyword'))->orWhere('company_address',\request('location'));
            if (count($disticts)>0){
                foreach ($disticts as $distict){
                    $products->orWhere('district_id',$distict->id);
                }
            }else{
                $products->orWhere('district_id',\request('keyword'));
            }
        }
        $products =$products->get();
        $category =ProductCategory::orderBy('id','DESC');
        return view('frontend.pages.product.listing',compact('title','products','category','feature_ads','top_product'));
    }

    public function overview($UserName){
        $user = User::where('name',$UserName)->firstOrFail();
        $client =Client::where('user_id',$user->id)->firstOrFail();
        $ads = Advertisement::where('status','active')->where('type','top')->where('status','active')->get();
        $side_ads = Advertisement::where('status','active')->where('type','general')->where('status','active')->get();
        $category =Category::all();
        $title = $client->company_name.' - Khojbiz.com';
        $discription = str_limit($client->company_profile,150);
        if (isset($client->banner)){
            $image = '/public/uploads/banners'.'/'.$client->banner;
        }
        return view('frontend.pages.client.pages.index',compact('title','client','ads','side_ads','category','discription','image'));
    }
    public function about_us($UserName){
        $user = User::where('name',$UserName)->firstOrFail();
        $client =Client::where('user_id',$user->id)->firstOrFail();
        $ads = Advertisement::where('status','active')->where('type','top')->where('status','active')->get();
        $side_ads = Advertisement::where('status','active')->where('type','general')->where('status','active')->get();
        $category =Category::all();
        $title = 'About Us - '. $client->company_name.' - Khojbiz.com';
        $discription = str_limit($client->company_profile,150);
        if (isset($client->banner)){
            $image = '/public/uploads/banners'.'/'.$client->banner;
        }
        return view('frontend.pages.client.pages.about_us',compact('title','client','ads','side_ads','category','discription','image'));
    }
    public function client_profile($UserName){
        $user = User::where('name',$UserName)->firstOrFail();
        $client =Client::where('user_id',$user->id)->firstOrFail();
        $ads = Advertisement::where('status','active')->where('type','top')->where('status','active')->get();
        $side_ads = Advertisement::where('status','active')->where('type','general')->where('status','active')->get();
        $category =Category::all();
        $title = 'Profile - '. $client->company_name.' - Khojbiz.com';
        $discription = str_limit($client->company_profile,150);
        if (isset($client->banner)){
            $image = '/public/uploads/banners'.'/'.$client->banner;
        }
        return view('frontend.pages.client.pages.client_profile',compact('title','client','ads','side_ads','category','discription','image'));
    }
    public function contact_us($UserName){
        $user = User::where('name',$UserName)->firstOrFail();
        $client =Client::where('user_id',$user->id)->firstOrFail();
        $ads = Advertisement::where('status','active')->where('type','top')->where('status','active')->get();
        $side_ads = Advertisement::where('status','active')->where('type','general')->where('status','active')->get();
        $category =Category::all();
        $title = 'Contact-Us '.$client->company_name.' - Khojbiz.com';
        $discription = str_limit($client->company_profile,150);
        if (isset($client->banner)){
            $image = '/public/uploads/banners'.'/'.$client->banner;
        }
        return view('frontend.pages.client.pages.client_contact_us',compact('title','client','ads','side_ads','category','discription','image'));
    }
    public function image_gallery($UserName){
        $user = User::where('name',$UserName)->firstOrFail();
        $client =Client::where('user_id',$user->id)->firstOrFail();
        $ads = Advertisement::where('status','active')->where('type','top')->where('status','active')->get();
        $side_ads = Advertisement::where('status','active')->where('type','general')->where('status','active')->get();
        $category =Category::all();
        $title = 'Image Gallery '.$client->company_name.' - Khojbiz.com';
        $discription = str_limit($client->company_profile,150);
        if (isset($client->banner)){
            $image = '/public/uploads/banners'.'/'.$client->banner;
        }
        return view('frontend.pages.client.pages.image_gallery',compact('title','client','ads','side_ads','category','discription','image'));
    }
    public function product_and_service($UserName){
        $user = User::where('name',$UserName)->firstOrFail();
        $client =Client::where('user_id',$user->id)->firstOrFail();
        $ads = Advertisement::where('status','active')->where('type','top')->where('status','active')->get();
        $side_ads = Advertisement::where('status','active')->where('type','general')->where('status','active')->get();
        $category =Category::all();
        $title = 'Product and service - '. $client->company_name.' - Khojbiz.com';
        $discription = str_limit($client->company_profile,150);
        if (isset($client->banner)){
            $image = '/public/uploads/banners'.'/'.$client->banner;
        }
        return view('frontend.pages.client.pages.product_and_service',compact('title','client','ads','side_ads','category','discription','image'));
    }

    public function product_details($slug){
        $products =Product::where('slug',$slug)->firstOrFail();
        $title =  $products->product_name.' - Khojbiz.com';
        $top_product = Product::orderBy('id','ASC')->where('product_type','diamond')->get();
        $discription = str_limit($products->company_profile,150);
        if (isset($client->banner)){
            $image = '/public/uploads/banners'.'/'.$products->banner;
        }
        return view('frontend.pages.product.index',compact('title','client','ads','side_ads','category','discription','image','products','top_product'));
    }
    public function location_details($slug){
        $locations =location::where('slug',$slug)->firstOrFail();
        $title =  $locations->name.' - Khojbiz.com';
        $discription = str_limit($locations->details,155);
        if (isset($client->banner)){
            $image = '/public/uploads/location_image'.'/'.$locations->image;
        }
        return view('frontend.pages.location.index',compact('title','client','ads','side_ads','category','discription','image','products','locations'));
    }


    public function buying_selling(){
        $title = 'Buying & Selling';
        return view('frontend.pages.classified.index');
    }

    /*manufacture company Details view*/
    public function menu_overview($UserName){
        $user = User::where('name',$UserName)->firstOrFail();
        $client =Client::where('user_id',$user->id)->firstOrFail();
        $ads = Advertisement::where('status','active')->where('type','top')->where('status','active')->get();
        $side_ads = Advertisement::where('status','active')->where('type','general')->where('status','active')->get();
        $category =Category::all();
        $title = $client->company_name.' - Khojbiz.com';
        $discription = str_limit($client->company_profile,155);
        if (isset($client->banner)){
            $image = '/public/uploads/banners'.'/'.$client->banner;
        }
        return view('frontend.pages.client.pages.index',compact('title','client','ads','side_ads','category','discription','image'));
    }
}
