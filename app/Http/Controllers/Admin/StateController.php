<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use App\State;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StateController extends Controller
{
    public function index(){
        $title='States - Admin-Panel | khojbiz.com';
        $states = State::orderBy('name','ASC')->get();
        $country = Country::orderBy('name','ASC')->get();
        return view('admin.location.states',compact('title','states','country'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'name'=> 'required|unique:states,name',
            'country_id'=> 'required',
        ]);
        $state = New State();
        $state->name=$request->name;
        $state->country_id = $request->country_id;
        $state->user_id = Auth::user()->id;
        $state->save();
        return redirect()->back()->with('success','New State Created Successfully');
    }
    public function edit($id){
        $title = 'Edit State Name - Admin-Panel | khojbiz.com';
        $state = State::findOrFail($id);
        $country = Country::orderBy('name','ASC')->get();
        return view('admin.location.edit_state',compact('title','state','country'));
    }
    public function update(Request $request,$id){
//        $this->validate($request, [
//            'name'=> 'required|unique:states,name',
//            'country_id'=> 'required',
//        ]);
        $state = State::findOrFail($id);
        $state->name=$request->name;
        $state->country_id = $request->country_id;
        $state->user_id = Auth::user()->id;
        $state->save();

        return redirect('admin/states')->with('success','State Name Updated Successfully !!');

    }
}
