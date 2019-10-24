<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    p   rotected $fillable  = ['name','user_id'];

    public function user(){
        return $this->hasOne('App\User');
    }
}
