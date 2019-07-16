<?php

namespace App\Http\Controllers\User;

use App\Advertisement;
use App\Alphabate;
use App\BuySell\Product;
use App\BuySell\ProductCategory;
use App\BuySell\ProductWiseSuppliers;
use App\Category;
use App\CategoryWiseClient;
use App\Client\Client;
use App\Client\ClientNotice;
use App\Client\ClientService;
use App\ClientGallery;
use App\District;
use App\Menufacture\MenuCategory;
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
//        $letter = \request('keyword');
//        dd(mb_strtoupper($letter[0]));
        $title ='Search Company Listing - Khojbiz.com';
        $feature_ads = Advertisement::where('status','active')->where('type','feature')->where('status','active')->get();
        $search =Client::orderBy('id','DESC');
        if (\request('cat')){
            $categories = Category::where('slug',\request('cat'))->firstOrFail();
            $title =$categories->name.' - Khojbiz.com';
            $search->whereIn('id',$categories->getClientIds());
        }
        if (\request('keyword')){
            $search->where('tag','like','%'.\request('keyword').'%')->orWhere('company_name','like','%'.\request('keyword').'%');
        }
        if (\request('location')){
            $disticts = District::where('name',\request('keyword'))->orWhere('name',\request('location'))->get();
            if (count($disticts)>0)
            {
                $distict = District::where('name',\request('keyword'))->orWhere('name',\request('location'))->first();
                $search->where('district_id',$distict->id);
            }else{
                $search->where('company_address','like','%'.\request('location').'%');
            }

        }
        if (\request('alphabate')){
            $alpha = Alphabate::where('name',\request('alphabate'))->first();
            $search->where('alpha_id',$alpha->id);
        }
        $clients =$search->paginate(10);
        $category =Category::orderBy('id','DESC');
        return view('new.search.index',compact('title','clients','category','feature_ads'));
//        return view('frontend.listing',compact('title','clients','category'));
    }
    public function search_manufacture(){
        $title ='Search Company Listing - Khojbiz.com';
        $feature_ads = Advertisement::where('status','active')->where('type','feature')->where('status','active')->get();
        $clients =Client::where('company_nature','manufacture')->orderBy('id','DESC');
        if (\request('cat')){
            $categories = MenuCategory::where('slug',\request('cat'))->firstOrFail();
            $title =$categories->name.' - Khojbiz.com';
            $clients->whereIn('id',$categories->getClientIds());
        }
        if (\request('keyword')){
            $clients->where('company_name','like','%'.\request('keyword').'%');
        }
        if (\request('location')){
            $disticts = District::where('name',\request('keyword'))->orWhere('name',\request('location'))->get();
            if (count($disticts)>0)
            {
                $distict = District::where('name',\request('keyword'))->orWhere('name',\request('location'))->first();
                $clients->where('district_id',$distict->id);
            }else{
                $clients->where('company_address','like','%'.\request('location').'%');
            }

        }
        if (\request('alphabate')){
            $alpha = Alphabate::where('name',\request('alphabate'))->first();
            $clients->where('alpha_id',$alpha->id);
        }
        $clients =$clients->paginate(10);
        $category =MenuCategory::orderBy('id','DESC');
        return view('new.search.search_manufacture',compact('title','clients','category','feature_ads'));
//        return view('frontend.listing',compact('title','clients','category'));
    }
    public function search_product(){
        $title ='Product Listing - Khojbiz.com';
        $top_product = Product::orderBy('id','ASC')->where('product_type','diamond')->get();
        $feature_ads = Advertisement::where('status','active')->where('type','feature')->where('status','active')->get();
        $products =Product::orderBy('id','ASC');
        if (\request('cat')){
            $categories = ProductCategory::where('slug',\request('cat'))->firstOrFail();
            $title =$categories->name;
            $products->whereIn('id',$categories->getProductIds());
        }
        if (\request('keyword')){
            $products->where('product_name','like','%'.\request('keyword').'%')
                ->orWhere('address',\request('keyword'));
        }
        if (\request('alphabate')){
            $alpha = Alphabate::where('name',\request('alphabate'))->first();
            $products->where('alpha_id',$alpha->id);
        }
        $clients =$products->paginate(10);
        $category =ProductCategory::orderBy('id','DESC');
        return view('new.search.product',compact('title','clients','category','feature_ads','top_product'));
//        return view('frontend.pages.product.listing',compact('title','products','category','feature_ads','top_product'));
    }

    public function overview($UserName){
        $user = User::where('name',$UserName)->firstOrFail();
        $client =Client::where('user_id',$user->id)->firstOrFail();
        $ads = Advertisement::where('status','active')->where('type','top')->where('status','active')->get();
        $side_ads = Advertisement::where('status','active')->where('type','general')->where('status','active')->get();
        $category =Category::all();
        $galleries = ClientGallery::where('client_id',$client->id)->orderBy('id','DESC')->get();
        $services = ClientService::where('client_id',$client->id)->orderBy('id','DESC')->get();
        $notices = ClientNotice::where('client_id',$client->id)->where('start_at','<=',date('Y-m-d'))->where('end_at','>=',date('Y-m-d'))->orderBy('id','DESC')->get();
        $title = $client->company_name.' - Khojbiz.com';
        $discription = str_limit($client->company_profile,150);
        if (isset($client->banner)){
            $image = '/public/uploads/banners'.'/'.$client->banner;
        }
        return view('new.business.overview',compact('title','client','services','galleries','ads','side_ads','category','discription','image','notices'));
//        return view('frontend.pages.client.pages.index',compact('title','client','ads','side_ads','category','discription','image'));
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
        if (isset($products->banner)){
            $image = '/public/uploads/banners'.'/'.$products->banner;
        }
        return view('new.product.overview',compact('title','client','ads','side_ads','category','discription','image','products','top_product'));
//        return view('frontend.pages.product.index',compact('title','client','ads','side_ads','category','discription','image','products','top_product'));
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
    public function view_service($UserName, $id){
        $user = User::where('name',$UserName)->firstOrFail();
        $client =Client::where('user_id',$user->id)->firstOrFail();
        $galleries = ClientGallery::where('client_id',$client->id)->orderBy('id','DESC')->get();
        $service = ClientService::findOrFail($id);
        $title = $service->name.' | '.$client->company_name .' | Khojbiz.com';
        $discription = str_limit($service->details,155);
        if (isset($client->banner)){
            $image = '/public/uploads/banners'.'/'.$client->banner;
        }

        return view('new.business.service-details',compact('title','client','galleries','service','image','discription'));
    }
    public function view_notice($UserName, $id){
        $user = User::where('name',$UserName)->firstOrFail();
        $client =Client::where('user_id',$user->id)->firstOrFail();
        $galleries = ClientGallery::where('client_id',$client->id)->orderBy('id','DESC')->get();
        $notice = ClientNotice::findOrFail($id);
        $title = $notice->name.' | '.$client->company_name .' | Khojbiz.com';
        $discription = str_limit($notice->details,155);
        if (isset($client->banner)){
            $image = '/public/uploads/banners'.'/'.$client->banner;
        }

        return view('new.business.notice-details',compact('title','client','galleries','notice','image','discription'));
    }
}
