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
    public function update_user_account(Request $request, $id){
        $user = User::findOrFail($id);
        $user->status= $request->status;
        $user->save();
        return redirect()->back()->with('success','User Account Updated');
    }
}
