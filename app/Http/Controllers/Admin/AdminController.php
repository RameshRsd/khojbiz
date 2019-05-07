<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        $title = 'Admin Panel | khojbiz.com';
        return view('admin.dashboard',compact('title'));
    }
}
