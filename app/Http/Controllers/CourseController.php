<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Area;
use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index()
    {
        $courses = Course::all();
        $areas = Area::all();
        $trainingCenters = TrainingCenter::all(); 
        return view('course.index', compact('courses','areas','trainingCenters'));
    }
}
