<?php

namespace App\Http\Controllers\Admin;

use App\Position;
use App\Staff;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    public function index(){
        $title = 'Staff Management - Khojbiz';
        $staffs = Staff::orderBy('id','DESC')->get();
        return view('admin.staff.index',compact('title','staffs'));
    }
    public function create(){
        $title = 'Create New Staff - Khojbiz';
        $positions = Position::all();
//        $staffs = Staff::orderBy('id','DESC')->get();
        return view('admin.staff.create',compact('title','positions'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'f_name'=> 'required',
            'l_name'=> 'required',
            'type'=> 'required',
            'ctn_no'=> 'required',
            'mobile'=> 'required',
            'name'=> 'required|unique:users,name',
            'email'=> 'required|unique:users,email',
            'password' =>'required|confirmed',
        ]);
        /*=========== Creating User ============ */
        $user = New User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->type = 'staff';
        $user->status = 'active';
        if ($user->save()){
            /*=========== Creating Clients ============ */
            $client = New Staff();
            $client->f_name = $request->f_name;
            $client->l_name = $request->l_name;
            $client->m_name = $request->m_name;
            $client->mobile = $request->mobile;
            $client->address = $request->address;
            $client->ref_person = $request->ref_person;
            $client->ref_person_no = $request->ref_person_no;
            $client->ref_person_address = $request->ref_person_address;
            $client->ctn_no = $request->ctn_no;
            $client->password = $request->password;
            $client->position_id = $request->position_id;
            $client->user_id = $user->id;
            if ($request->hasFile('photo')){
                $filename = time().'.'.request()->file('photo')->getClientOriginalExtension();

                $filename = md5(microtime()) . '.' . $filename;

                request()->file('photo')->move('public/uploads/staff/photo',$filename);
                $client->photo =$filename;
            }
            if ($request->hasFile('doc')){
                $filename = time().'.'.request()->file('doc')->getClientOriginalExtension();

                $filename = md5(microtime()) . '.' . $filename;

                request()->file('doc')->move('public/uploads/staff/doc',$filename);
                $client->doc =$filename;
            }
            if ($request->hasFile('cv')){
                $filename = time().'.'.request()->file('cv')->getClientOriginalExtension();

                $filename = md5(microtime()) . '.' . $filename;

                request()->file('cv')->move('public/uploads/staff/cv',$filename);
                $client->cv =$filename;
            }

            $client->save();
            return redirect('admin/staffs')->with('success','Staff Created Successfully !');
        }
    }

    public function edit($id){
        $title ='Staff Edit';
        $staffs = Staff::findOrFail($id);
        $positions = Position::all();
        return view('admin.staff.edit',compact('title','staffs','positions'));
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'f_name' => 'required',
            ]);

        $staffs = Staff::findOrFail($id);

        $staffs->f_name = $request->f_name;
        $staffs->l_name = $request->l_name;
        $staffs->m_name = $request->m_name;
        $staffs->mobile = $request->mobile;
        $staffs->address = $request->address;
        $staffs->ref_person = $request->ref_person;
        $staffs->ref_person_no = $request->ref_person_no;
        $staffs->ref_person_address = $request->ref_person_address;
        $staffs->ctn_no = $request->ctn_no;
        $staffs->position_id = $request->position_id;
        if ($request->hasFile('photo')){
            if (is_file(public_path('uploads/staff/photo/').'/'.$staffs->photo) && file_exists(public_path('uploads/staff/photo/').'/'.$staffs->photo)){
                unlink(public_path('uploads/staff/photo/').'/'.$staffs->photo);
            }
            $filename = time().'.'.request()->file('photo')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('photo')->move('public/uploads/staff/photo',$filename);
            $staffs->photo =$filename;
        }
        if ($request->hasFile('doc')){
            if (is_file(public_path('uploads/staff/doc/').'/'.$staffs->doc) && file_exists(public_path('uploads/staff/doc/').'/'.$staffs->doc)){
                unlink(public_path('uploads/staff/doc/').'/'.$staffs->doc);
            $filename = time().'.'.request()->file('doc')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('doc')->move('public/uploads/staff/doc',$filename);
            $staffs->doc =$filename;
        }
        if ($request->hasFile('cv')){
            if (is_file(public_path('uploads/staff/cv/').'/'.$staffs->cv) && file_exists(public_path('uploads/staff/cv/').'/'.$staffs->cv)){
                unlink(public_path('uploads/staff/cv/').'/'.$staffs->cv);}
        }
            $filename = time().'.'.request()->file('cv')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('cv')->move('public/uploads/staff/cv',$filename);
            $staffs->cv =$filename;
        }

        $staffs->save();
        return redirect('admin/staffs')->with('success','Staff Updated Successfully !');
    }




}
