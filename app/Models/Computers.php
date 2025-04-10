<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computers extends Model
{
    //
    public function computer(){
        return $this->hasOne('App\Models\Computer');
    }
}
