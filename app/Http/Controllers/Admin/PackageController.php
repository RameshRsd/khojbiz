<?php

namespace App\Http\Controllers\Admin;

use App\Package;
use App\PackageFeature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    public function index(){
        $title = 'Package Listing - Admin Panel - Khojbiz.com';
        $packages = Package::orderBy('id','DESC')->get();
        return view('admin.package.index',compact('title','packages'));
    }
    public function create(){
        $title = 'Add Package - Admin Panel - Khojbiz.com';
        return view('admin.package.create',compact('title'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'name'=> 'required|unique:packages,name',
            'status'=> 'required',
            'price'=> 'required',
        ]);
        $package = new Package();
        $package->name = $request->name;
        $package->details = $request->details;
        $package->status = $request->status;
        $package->user_id = Auth::user()->id;
        $package->price = $request->price;
        $package->save();
        return redirect('admin/list-package')->with('success','Package Added Successfully !!');
    }
    public function edit($id){
        $title = 'Edit Package - Admin Panel - Khojbiz.com';
        $package = Package::findOrFail($id);
        return view('admin.package.edit',compact('title','package'));
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'name'=> 'required|unique:packages,name,'.$id,
            'status'=> 'required',
            'price'=> 'required',
        ]);
        $package = Package::findOrFail($id);
        $package->name = $request->name;
        $package->details = $request->details;
        $package->status = $request->status;
        $package->user_id = Auth::user()->id;
        $package->price = $request->price;
        $package->save();
        return redirect('admin/list-package')->with('success','Package Updated Successfully !!');
    }

    public function package_feature(){
        $title = 'Package Wise Feature - Admin Panel - Khojbiz.com';
        $packages = Package::all();
        $f_packages = PackageFeature::orderBy('id','DESC')->get();
        return view('admin.package.package_feature',compact('title','packages','f_packages'));
    }
    public function package_feature_store(Request $request){
        $this->validate($request, [
            'package_id'=> 'required',
            'status'=> 'required',
            'details'=> 'required',
        ]);
        $package = new PackageFeature();
        $package->package_id = $request->package_id;
        $package->details = $request->details;
        $package->open = $request->status;
        $package->user_id = Auth::user()->id;
        $package->save();
        return redirect('admin/package-feature')->with('success','Featured Added Successfully !!');
    }
    public function package_feature_update(Request $request, $id){
        $this->validate($request, [
            'package_id'=> 'required',
            'status'=> 'required',
            'details'=> 'required',
        ]);
        $package = PackageFeature::findOrFail($id);
        $package->package_id = $request->package_id;
        $package->details = $request->details;
        $package->open = $request->status;
        $package->user_id = Auth::user()->id;
        $package->save();
        return redirect('admin/package-feature')->with('success','Featured Updated Successfully !!');
    }


}
