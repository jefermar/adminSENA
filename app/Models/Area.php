<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    // uno a muchos
    public function teacher(){
        return $this->hasMany(Teacher::class);
    }
    public function course(){
        return $this->hasMany(Course::class);
    }
}
