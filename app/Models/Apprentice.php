<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    public function courses(){
        return $this->hasMany(Course::class);
    }
    //muchos a uno
    public function course(){
        return $this->belongsTo(Course::class);
    }
    //1,1
    public function computer(){
        return $this->belongsTo(Computer::class);
    }
}
