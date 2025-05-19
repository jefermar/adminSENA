<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Area;
use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
    public function index()
    {
        $teachers = Teacher::all();
        $areas = Area::all();
        $trainingCenters = TrainingCenter::all();
        return view('teacher.index', compact('teachers','areas,trainingCenters'));
    }
}

