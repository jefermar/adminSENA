<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course_Teacher extends Model
{
    //muchos a muchos:
    public function course(){
        return $this->belongsTomany('App\Models\Course');
    }
    public function teacher(){
        return $this->belongsTomany('App\Models\Teacher');
    }


}
