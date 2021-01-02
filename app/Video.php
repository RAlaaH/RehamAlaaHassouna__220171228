<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

    public function shares(){
        return $this->morphMany('App\Share','shareable');
    }

    public function tags(){
        return $this->morphToMany('App\Tag','taggable');
    }
}
