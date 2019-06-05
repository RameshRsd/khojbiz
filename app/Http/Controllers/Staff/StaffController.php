<?php

namespace App\Http\Controllers\Staff;

use App\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    public function index(){
        $title = 'Staff Panel | khojbiz.com';
        $staffs =Staff::all();
        return view('staff.dashboard',compact('title','staffs'));
    }
}
