<?php

namespace App;

use App\Client\Client;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function staffs(){
        return $this->hasMany(Staff::class,'position_id');
    }
}
