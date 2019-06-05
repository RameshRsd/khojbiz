<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function country(){
        return $this->belongsTo(Country::class,'country_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function state(){
        return $this->belongsTo(State::class,'country_id');
    }
}
