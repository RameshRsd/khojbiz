<?php

namespace App\Http\Controllers\Staff;

use App\Alphabate;
use App\District;
use App\Place\location;
use App\Place\locationCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LocationController extends Controller
{
    public function index(){
        $title = 'Location/Places Section - Staff Panel - Khojbiz.com';
        $locations = location::orderBy('id','DESC')->get();
        return view('staff.location.index',compact('title','locations'));
    }
    public function create(){
        $title = 'Create New Location/Places - Staff Panel - Khojbiz.com';
        $alpha = Alphabate::orderBy('name')->get();
        $districts = District::orderBy('name')->get();
        $location_categores = locationCategory::orderBy('name')->get();
        return view('staff.location.create',compact('title','location_categores','alpha','districts'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'name'=> 'required|unique:locations,name',
            'district_id'=> 'required',
            'alpha_id'=> 'required',
            'cat_id'=> 'required',
            'address'=> 'required',
        ]);
        $location = new location();
        $location->name = $request->name;
        $location->slug = str_slug($request->name);
        $location->district_id = $request->district_id;
        $location->address = $request->address;
        $location->contact = $request->contact;
        $location->website = $request->website;
        $location->map_link = $request->map_link;
        $location->status = 1;
        $location->details = $request->details;
        $location->alpha_id = $request->alpha_id;
        $location->cat_id = $request->cat_id;
        $location->user_id = Auth::user()->id;
        if ($request->hasFile('image')){
            $filename = time().'.'.request()->file('image')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('image')->move('public/uploads/location_image/',$filename);
            $location->image =$filename;
        }
        $location->save();
        return redirect('staff/locations')->with('success','Locaton Create Successfully !!');
    }
    public function edit($id){
        $title = 'Edit Location/Places - Staff Panel - Khojbiz.com';
        $alpha = Alphabate::orderBy('name')->get();
        $districts = District::orderBy('name')->get();
        $location_categores = locationCategory::orderBy('name')->get();
        $location = location::findOrFail($id);
        return view('staff.location.edit',compact('title','location_categores','alpha','districts','location'));
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'name'=> 'required',
            'district_id'=> 'required',
            'alpha_id'=> 'required',
            'cat_id'=> 'required',
            'address'=> 'required',
        ]);
        $location = location::findOrFail($id);
        $location->name = $request->name;
        $location->slug = str_slug($request->name);
        $location->district_id = $request->district_id;
        $location->address = $request->address;
        $location->contact = $request->contact;
        $location->website = $request->website;
        $location->map_link = $request->map_link;
        $location->status = $request->status;
        $location->details = $request->details;
        $location->alpha_id = $request->alpha_id;
        $location->cat_id = $request->cat_id;
        if ($request->hasFile('image')){
            if (is_file(public_path('uploads/location_image/').'/'.$location->image) && file_exists(public_path('uploads/location_image/').'/'.$location->image)){
                unlink(public_path('uploads/location_image/').'/'.$location->image);
            }
            $filename = time().'.'.request()->file('image')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('image')->move('public/uploads/location_image/',$filename);
            $location->image =$filename;
        }
        $location->save();
        return redirect('staff/locations')->with('success','Locaton Updated Successfully !!');
    }
}
