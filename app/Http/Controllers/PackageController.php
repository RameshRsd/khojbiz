<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index(){
        $title = 'Package Details - Client Area - Khojbiz.com';
        $packages = Package::where('status','active')->orderBy('id','ASC')->get();
        return view('new.package.index',compact('title','packages'));
    }
}
