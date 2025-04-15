<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Apprentices;
use App\Models\Area;
use App\Models\Computers;
use App\Models\Courses;
use App\Models\Teachers;
use App\Models\TrainingCenter;


use Illuminate\Http\Request;

class OrmController extends Controller
{
    //
    public function consultas(){

        // $user = User::find(12);
        // return $user;

        // $area = Area::find(1222);
        // return $area;

        // $trainingCenter = TrainingCenter::find(4974);
        // return $trainingCenter;

        // $teacher = Teachers::find(116);
        // return $teacher;

        // $course = Courses::find(615);
        // return $course;

        // $computer = Computers::find(104);
        // return $computer;

        // $apprentices = Apprentices::find(15868949);
        // return $apprentices;

         //RELACIONES ANIDADAS

        return Teachers::with('TrainingCenter.Courses')->get();
    
    }
}