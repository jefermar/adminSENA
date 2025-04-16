<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingCenter extends Model
{
    //uno a muchos:
    public function Teachers(){
        return $this->hasMany(Teacher::class);
    }
    public function courses(){
        return $this->hasMany(Course::class);
    }
}
