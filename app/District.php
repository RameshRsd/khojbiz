<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function state(){
        return $this->belongsTo(State::class,'state_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function jobs(){
        return $this->hasMany(Job::class,'district_id')->where('publish_date','<=',date('Y-m-d'))->where('expiry_date','>=',date('Y-m-d'))->where('status','public');
    }
}
