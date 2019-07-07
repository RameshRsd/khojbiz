<?php

namespace App\Http\Controllers\Admin;

use App\Client\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function update_payment(Request $request, $id){
        $client = Client::findOrFail($id);
        $client->status = $request->status;
        $client->save();
        return redirect('admin/list-clients')->with('success','Payment Status Update Successfully !!');
    }
}
