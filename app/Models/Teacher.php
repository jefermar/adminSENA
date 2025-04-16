<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //Relacion Uno a Muchos (Inversa) con Area
     public function Area(){
        return $this->belongsTo(Area::class);
    }

    //Relacion Uno a Muchos (Inversa) con TrainingCenter
    public function TrainingCenter(){
        return $this->belongsTo(TrainingCenter::class);
    }
    public function course(){
        return $this->belongsTomany(Course::class);
    }

}
