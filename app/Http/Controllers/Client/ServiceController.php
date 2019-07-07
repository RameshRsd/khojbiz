<?php

namespace App\Http\Controllers\Client;

use App\Client\Client;
use App\Client\ClientService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index(){
        $client = Client::where('user_id',Auth::user()->id)->first();
        $title = 'List Services - '.$client->company_name.' - Client Area - Khojbiz.com';
        $services = ClientService::where('client_id',$client->id)->orderBy('id','DESC')->get();
        return view('new.client.service.index',compact('title','client','services'));
    }
    public function create(){
        $client = Client::where('user_id',Auth::user()->id)->first();
        $title = 'Add New Service - '.$client->company_name.' - Client Area - Khojbiz.com';
        return view('new.client.service.create',compact('title','client'));
    }
    public function store(Request $request){
        $client = Client::where('user_id',Auth::user()->id)->first();
        $service = new ClientService();
            $this->validate($request, [
                'name'=> 'required',
                'details'=> 'required',
            ]);
            $service->name = $request->name;
            $service->details = $request->details;
            $service->client_id = $client->id;
            $service->save();
            return redirect('client/service-manage/list-service')->with('success','Record Saved Successfully !!');
    }
    public function edit($id){
        $client = Client::where('user_id',Auth::user()->id)->first();
        $title = 'Edit Services - '.$client->company_name.' - Client Area - Khojbiz.com';
        $service = ClientService::findOrFail($id);
        if ($service->client_id == $client->id){
            return view('new.client.service.edit',compact('title','client','service'));
        }else{
            return redirect('client/service-manage/list-service')->with('error','Invalid Access');
        }
    }
    public function update(Request $request, $id){
        $client = Client::where('user_id',Auth::user()->id)->first();
        $service = ClientService::findOrFail($id);
        if ($service->client_id == $client->id){
            $this->validate($request, [
                'name'=> 'required',
                'details'=> 'required',
            ]);
            $service->name = $request->name;
            $service->details = $request->details;
            $service->save();
            return redirect('client/service-manage/list-service')->with('success','Record Updated');
        }else{
            return redirect('client/service-manage/list-service')->with('error','Invalid Access');
        }
    }
    public function delete($id){
        $client = Client::where('user_id',Auth::user()->id)->first();
        $service = ClientService::findOrFail($id);
        if ($service->client_id == $client->id){
            $service->delete();
            return redirect('client/service-manage/list-service')->with('success','Record Deleted');
        }else{
            return redirect('client/service-manage/list-service')->with('error','Invalid Access');
        }
    }
}
