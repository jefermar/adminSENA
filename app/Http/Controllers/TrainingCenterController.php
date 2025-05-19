<?php

namespace App\Http\Controllers;
use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    //
     public function index()
    {
        $TrainingCenters = TrainingCenter::all();
        return view('TrainingCenter.index', compact('TrainingCenters'));
    }
}
