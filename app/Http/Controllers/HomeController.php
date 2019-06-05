<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Category;
use App\Client\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index(){
//        $client =Client::where('client_type','diamond')->get();
        $client =Client::where('client_type','diamond')->limit(8)->get();
        $ads = Advertisement::where('status','active')->where('type','top')->where('status','active')->get();
        $side_ads = Advertisement::where('status','active')->where('type','general')->where('status','active')->get();
        $category =Category::orderBy('name','DESC')->limit(8)->get();
        return view('frontend.welcome',compact('client','ads','side_ads','category'));
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
                if (Auth::user()->type == 'client') {
                    return redirect('client');
                }
                if (Auth::user()->type == 'candidate') {
                    return redirect('candidate');
                }
            }
        }
        return redirect('login')->withErrors(['email'=>'Invalid credentail'])->withInput(request()->only('email'));
    }

    public function getregister(Request $request){
        $this->validate(request(),[
            'email'=>'required|unique:users,email',
            'name'=>'required|unique:users,name',
            'first_name'=>'required',
            'password'=>'required|confirmed',
        ]);

    }

}
