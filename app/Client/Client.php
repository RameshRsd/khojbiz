<?php

namespace App\Client;

use App\Alphabate;
use App\Category;
use App\CategoryWiseClient;
use App\CompanyNature;
use App\Country;
use App\District;
use App\Menufacture\ManufactureWiseCategory;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function staff(){
        return $this->belongsTo(User::class,'entry_by');
    }
    public function category(){
        return $this->belongsTo(CategoryWiseClient::class,'cat_id');
    }
    public function country(){
        return $this->belongsTo(District::class,'district_id');
    }
    public function client_category(){
        return $this->hasMany(CategoryWiseClient::class,'client_id');
    }
    public function manufacture_wise_category(){
        return $this->hasMany(ManufactureWiseCategory::class,'client_id');
    }
}
