<?php

namespace App\Client;

use App\CompanyNature;
use App\District;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function company_nature(){
        return $this->belongsTo(CompanyNature::class,'company_nature_id');
    }
    public function district(){
        return $this->belongsTo(District::class,'district_id');
    }
}
