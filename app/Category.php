<?php

namespace App;

use App\Client\Client;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function alpha(){
        return $this->belongsTo(Alphabate::class,'alphabate_id');
    }
    public function clients(){
        return $this->hasMany(Client::class,'cat_id');
    }
    public function sub_category(){
        return $this->hasMany(SubCategory::class,'cat_id');
    }
    public function client_cat(){
        return $this->hasMany(CategoryWiseClient::class,'cat_id');
    }
    public function clientsId(){
        return $this->belongsToMany(Client::class,'category_wise_clients','cat_id','client_id');
    }
    public function getClientIds()
    {
        return $this->clientsId()->allRelatedIds();
    }
}
