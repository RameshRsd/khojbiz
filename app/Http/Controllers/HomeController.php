<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Category;
use App\Client\Client;
use App\Client\ClientAboutUs;
use App\ClientContactUs;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index(){
//        $client =Client::where('client_type','diamond')->get();
        $client =Client::where('company_nature','business')->where('client_type','diamond')->limit(8)->get();
        $manufacture_client =Client::where('company_nature','manufacture')->limit(8)->get();
        $ads = Advertisement::where('status','active')->where('type','top')->where('status','active')->get();
        $side_ads = Advertisement::where('status','active')->where('type','general')->where('status','active')->get();
        $category =Category::orderBy('name','DESC')->limit(8)->get();
        return view('frontend.welcome',compact('client','ads','side_ads','category','manufacture_client'));
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
    public function postregister(Request $request){
        $this->validate(request(),[
            'email'=>'required|unique:users,email',
            'name'=>'required|unique:users,name',
            'password'=>'required|confirmed',
        ]);
        $user = new User();
        $user->name = \request('name');
        $user->email = \request('email');
        $user->type = 'client';
        $user->status = 'active';
        $user->password = bcrypt(\request('password'));
        if ($user->save()){
        $client = new Client();
        $client->user_id = $user->id;
        $client->password = \request('password');
        $client->client_type = 'free_listing';
        $client->save();

        $client_about_us = new ClientAboutUs();
        $client_about_us->client_id = $client->id;
        $client_about_us->save();
        }
        return redirect('');
    }
    public function update_about(){
        $clients = Client::all();
        foreach ($clients as $client){
            $client_about = new ClientAboutUs();
            $client_about->client_id = $client->id;
            $client_about->save();

//            $client_contact = new ClientContactUs();
//            $client_contact->client_id = $client->id;
//            $client_contact->save();
        }
        return redirect('');

    }

}
