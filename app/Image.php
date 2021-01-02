<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use  Illuminate\Support\Facades\Schema;

class Image extends Model
{
    public function imageable(){
        return $this->morphTo();
    }
}
