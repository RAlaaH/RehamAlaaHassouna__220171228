<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    public function shareable(){
        return $this->morphTo();
    }
}

