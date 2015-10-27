<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    //belongsTo
    public function user(){
//        return $this->belongsTo('App\User', 'foreign_key');
//        return $this->belongsTo('App\User', 'foreign_key', 'user_id');
        return $this->belongsTo('App\User');
    }
}
