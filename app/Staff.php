<?php

namespace App;

use App\Client\Client;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function position(){
        return $this->belongsTo(Position::class,'position_id');
    }
}
