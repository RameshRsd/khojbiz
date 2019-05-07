<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        $title = 'User Management - Admin Panel | khojbiz.com';
        $users = User::all();
        return view('admin.users.index',compact('title','users'));
    }
}
