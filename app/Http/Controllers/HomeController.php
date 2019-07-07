<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Alphabate;
use App\BuySell\Product;
use App\Category;
use App\Client\Client;
use App\District;
use App\Place\location;
use App\Place\locationCategory;
use App\Client\ClientAboutUs;
use App\ClientContactUs;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index(){
        $title = 'Khojbiz - Local Search Engine';
//        $client =Client::where('client_type','diamond')->get();
        $clients =Client::where('company_nature','business')->where('client_type','diamond')->limit(8)->get();
        $manufacture_client =Client::where('company_nature','manufacture')->limit(4)->get();
        $ads = Advertisement::where('status','active')->where('type','top')->where('status','active')->get();
        $side_ads = Advertisement::where('status','active')->where('type','general')->where('status','active')->get();
        $feature_ads = Advertisement::where('status','active')->where('type','feature')->where('status','active')->get();
        $category =Category::orderBy('name','ASC')->where('status','active')->limit(8)->get();
        $location_categories = locationCategory::orderBy('name')->get();
        $locations = location::orderBy('id','ASC')->limit(4)->get();
        $products = Product::where('product_type','diamond')->limit(4)->get();
        $alphas = Alphabate::orderBy('name')->get();
        return view('welcome',compact('title','clients','alphas','ads','side_ads','category','manufacture_client','location_categories','feature_ads','products','locations'));
//        return view('frontend.welcome',compact('client','ads','side_ads','category','manufacture_client','location_categories','feature_ads','products','locations'));
    }
    public function getLogin(){
        return view('auth.login');
    }
    public function postLogin(){
        $this->validate(request(),[
            'email'=>'required',
            'password'=>'required'
        ]);
        $field = filter_var(request('email'),FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        if (Auth::attempt([$field => request('email'), 'password' => request('password')])) {
            if (Auth::check()) {
                if (Auth::user()->type == 'admin') {
                    return redirect('admin');
                }
                if (Auth::user()->type == 'staff') {
                    return redirect('staff');
                }
                if (Auth::user()->type == 'client' && Auth::user()->status=='active') {
                    return redirect('client');
                }
                if (Auth::user()->type == 'users' && Auth::user()->status=='active') {
                    return redirect('users');
                }
                if (Auth::user()->type == 'business' && Auth::user()->status=='active') {
                    return redirect('business');
                }
                if (Auth::user()->type == 'manufacture' && Auth::user()->status=='active') {
                    return redirect('manufacture');
                }
                if (Auth::user()->type == 'product' && Auth::user()->status=='active') {
                    return redirect('product');
                }
                if (Auth::user()->type == 'candidate' && Auth::user()->status=='active') {
                    return redirect('candidate');
                }
            }
        }
        return redirect('login')->withErrors(['email'=>'Invalid credentail'])->withInput(request()->only('email'));
    }

    public function getregister(Request $request){
        return view('auth.register');
    }
    public function get_business_register(Request $request){
        $category = Category::orderBy('name','ASC')->get();
        return view('auth.business.register',compact('category'));

    }
    public function get_manufacture_register(Request $request){
        $category = Category::orderBy('name','ASC')->get();
        return view('auth.manufacture.register',compact('category'));

    }
    public function postregister(Request $request){
        $this->validate(request(),[
            'email'=>'required|unique:users,email',
            'username'=>'required|unique:users,name',
            'password'=>'required|confirmed',
            'company_nature'=>'required',
            'company_name'=>'required',
        ]);
        $user = new User();
        $user->name = \request('username');
        $user->email = \request('email');
        $user->type = 'client';
        $user->status = 'active';
        $user->password = bcrypt(\request('password'));
        if ($user->save()){
        $client = new Client();
        $client->user_id = $user->id;
        $client->company_name = $request->company_name;
        $client->slug = str_slug($request->company_name);
        $client->ofc_tel_no = $request->ofc_tel_no;
        $client->password = \request('password');
        $client->client_type = 'free_listing';
        $client->company_nature = $request->company_nature;
        $client->save();
        }
        return redirect('login')->with('success','Congratulations Your Account Successfully Created !!');
    }
    public function post_business_register(Request $request){
        $this->validate(request(),[
            'email'=>'required|unique:users,email',
            'username'=>'required|unique:users,name',
            'password'=>'required|confirmed',
        ]);
        $user = new User();
        $user->name = \request('username');
        $user->email = \request('email');
        $user->type = 'business';
        $user->status = 'active';
        $user->password = bcrypt(\request('password'));
        if ($user->save()){
        $client = new Client();
        $client->user_id = $user->id;
        $client->company_name = $request->company_name;
        $client->slug = $request->company_name;
        $client->ofc_tel_no = $request->ofc_tel_no;
        $client->password = \request('password');
        $client->company_nature = 'business';
        $client->save();
        $client_about_us = new ClientAboutUs();
        $client_about_us->client_id = $client->id;
        $client_about_us->save();
        }
        return redirect('login')->with('success','welcome to login pages');
    }
    public function post_manufacture_register(Request $request){
        $this->validate(request(),[
            'username'=>'required|unique:users,name',
            'email'=>'required|unique:users,email',
            'password'=>'required|confirmed',
        ]);
        $user = new User();
        $user->name = \request('username');
        $user->email = \request('email');
        $user->type = 'manufacture';
        $user->status = 'active';
        $user->password = bcrypt(\request('password'));
        if ($user->save()){
            $client = new Client();
            $client->user_id = $user->id;
            $client->company_name = $request->company_name;
            $client->slug = $request->company_name;
            $client->ofc_tel_no = $request->ofc_tel_no;
            $client->password = \request('password');
            $client->company_nature = 'manufacture';
            $client->save();
            $client_about_us = new ClientAboutUs();
            $client_about_us->client_id = $client->id;
            $client_about_us->save();
        }
        return redirect('login')->with('success','welcome to login pages');
    }
    public function place_name(Request $request)
    {
        $term = $request->term;

        $queries = District::where('name', 'like', '%'.$term.'%')->orderBy('id','DESC')->get();

        foreach ($queries as $query)
        {
            $results[] = ['id' => $query->id, 'value' => $query->name]; //you can take custom values as you want
        }
        $resultsCount = $queries->count();
        if ($resultsCount>0){
            return response()->json($results);
        }else{
            $results[] = ['id' => 1, 'value' => 'Not Found']; //you can take custom values as you want
            return response()->json($results);
        }
    }

}
