<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Apprentice;
use App\Models\Area;
use App\Models\Computer;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\TrainingCenter;


use Illuminate\Http\Request;

class OrmController extends Controller
{
    //
    public function consultas(){

        // $area = Area::find(1);
        // return $area;

        //  $trainingCenter = TrainingCenter::find(1);
        //  return $trainingCenter;

        // $teacher = Teacher::find(1);
        // return $teacher;

        //  $course = Course::find(1);
        //  return $course;

        //  $computer = Computer::find(1);
        //  return $computer;

        // $apprentices = Apprentice::find(1);
        // return $apprentices;

         //RELACIONES ANIDADAS

        return Teacher::with('Area')->get();
    
    }
}