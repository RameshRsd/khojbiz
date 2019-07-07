<?php

namespace App\Menufacture;

use App\Alphabate;
use App\Client\Client;
use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    public function alpha(){
        return $this->belongsTo(Alphabate::class,'alphabet_id');
    }
    public function sub_category(){
        return $this->hasMany(MenuSubCategory::class,'cat_id');
    }
    public function clients(){
        return $this->belongsToMany(Client::class,'manufacture_wise_categories','cat_id','client_id');
    }
    public function getClientIds(){
        return $this->clients()->allRelatedIds();
    }
}
