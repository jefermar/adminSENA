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
        public function create()
        {
            return view('trainingCenter.create');
        }

        public function store(Request $request)
        {

            $trainingcenter = new TrainingCenter();
            $trainingcenter->name = $request->name;
            $trainingcenter->location = $request->location;
            $trainingcenter->save();
            return redirect()->route('trainingCenter.index');
        }
}
