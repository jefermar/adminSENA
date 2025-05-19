<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrmController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingCenterController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('ormconsultas',[OrmController::class,'consultas']);
Route::get('apprentices',[ApprenticeController::class,'index'])->name('apprentice.index');
Route::get('areas',[AreaController::class,'index'])->name('area.index');
Route::get('computers',[ComputerController::class,'index'])->name('computer.index');
Route::get('courses',[CourseController::class,'index'])->name('course.index');
Route::get('teachers',[TeacherController::class,'index'])->name('teacher.index');
Route::get('trainingcenters',[TrainingCenterController::class,'index'])->name('trainingCenter.index');