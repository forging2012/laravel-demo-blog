<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    //belongsTo
    public function User(){
//        return $this->belongsTo('App\User', 'foreign_key');
//        return $this->belongsTo('App\User', 'foreign_key', 'user_id');
        return $this->belongsTo('App\User');
    }

    public function Comment(){
        return $this->hasMany('App\Comment');
    }
}
