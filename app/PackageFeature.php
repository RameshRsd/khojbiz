<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageFeature extends Model
{
    public function package(){
        return $this->belongsTo(Package::class,'package_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
