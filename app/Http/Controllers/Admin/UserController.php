<?php

namespace App\Http\Controllers\Admin;

use App\Client\Client;
use App\Staff;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $title = 'User Management - Admin Panel | khojbiz.com';
        $user = User::orderBy('id','DESC');
        if (\request('name')){
            $user->where('name','LIKE','%'.\request('name').'%');
            $users = $user->paginate(50);
        }elseif(\request('email')){
            $user->where('email','LIKE','%'.\request('email').'%');
            $users = $user->paginate(50);
        }else{
            $users = $user->whereBetween("created_at",[date('Y-m-d 00:00:00'),  date('Y-m-t 11:11:59')])->paginate(50);
        }

        return view('admin.users.index',compact('title','users'));
    }
    public function edit($id){
        $title = 'Edit User - Admin Panel | khojbiz.com';
        $user = User::findOrFail($id);
        return view('admin.users.edit',compact('user'));
    }
    public function update_user_account(Request $request, $id){
        $user = User::findOrFail($id);
        $user->status= $request->status;
        $user->save();
        return redirect()->back()->with('success','User Account Updated');
    }
    public function update_email(Request $request, $id){
        $this->validate($request, [
            'email'=> 'unique:users,email,'.$id,
//            'password' =>'required|confirmed',
        ]);
        $user = User::findOrFail($id);
        $user->email = $request->email;
        $user->save();
        return redirect()->back()->with('success','Email/User ID Changed Successfully !!');
    }
    public function update_password(Request $request, $id){
        $this->validate($request,[
            'old_password' =>'required|min:6',
            'password' =>'required|min:6|confirmed',
            'password_confirmation' =>'required',
        ]);
        $user = User::findOrFail($id);
        $current_password = $user->password;
        if(Hash::check($request->old_password, $current_password))
        {
            $user->password = Hash::make($request->password);
            if ($user->type=='client'){
                if ($user->save()){
                    $client = Client::where('user_id',$user->id)->firstOrFail();
                    $client->password = $request->password;
                    $client->save();
                    return redirect('admin/users')->with('success','Password Changed Successfully !!');
                }else{
                    return redirect('admin/users')->with('error','Something Went Wrong !!');
                }
            }elseif($user->type=='staff'){
                if ($user->save()){
                    $staff = Staff::where('user_id',$user->id)->firstOrFail();
                    $staff->password = $request->password;
                    $staff->save();
                    return redirect('admin/users')->with('success','Password Changed Successfully !!');
                }else{
                    return redirect('admin/users')->with('error','Something Went Wrong !!');
                }
            }else{
                $user->save();
                return redirect('admin/users')->with('success','Password Changed Successfully !!');
            }
        }
        else
        {
            return redirect('admin/users')->with('error','Please enter correct old password !!');
        }
    }
}
