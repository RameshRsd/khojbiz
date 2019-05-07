<?php

namespace App\Http\Controllers\Admin;

use App\Candidate\Candidate;
use App\District;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CandidateController extends Controller
{
    public function index(){
        $title = 'Candidate Listing - Admin-Panel | khojbiz.com';
        $candidates = Candidate::orderBy('id','DESC')->get();
        return view('admin.candidate.index',compact('title','candidates'));
    }
    public function edit($id){
        $title = 'Edit Candidate - Admin-Panel | khojbiz.com';
        $districts = District::orderBy('name','ASC')->get();
        $candidate = Candidate::findOrFail($id);
        return view('admin.candidate.edit',compact('title','candidate','districts'));
    }
    public function update(Request $request,$id){
        $candidate = Candidate::findOrFail($id);
        $candidate->first_name = $request->first_name;
        $candidate->middle_name = $request->middle_name;
        $candidate->last_name = $request->last_name;
        $candidate->dob = $request->dob;
        $candidate->gender = $request->gender;
        $candidate->marital_status = $request->marital_status;
        $candidate->mobile_number = $request->mobile_number;
        $candidate->telephone_no = $request->telephone_no;
        $candidate->temp_district_id = $request->temp_district_id;
        $candidate->current_address = $request->current_address;
        $candidate->perm_district_id = $request->perm_district_id;
        $candidate->permanent_address = $request->permanent_address;

        if ($request->hasFile('image')){
            if (is_file(public_path('uploads/candidates/').'/'.$candidate->image) && file_exists(public_path('uploads/candidates/').'/'.$candidate->image)){
                unlink(public_path('uploads/candidates/').'/'.$candidate->image);
            }

            $filename = time().'.'.request()->file('image')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('image')->move('public/uploads/candidates/',$filename);
            $candidate->image =$filename;
        }
        $candidate->save();
        return redirect('admin/list-candidates')->with('success','Candidate Updated Successfully !');
    }
}
