<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function features(){
        return $this->hasMany(PackageFeature::class,'package_id');
    }
}
