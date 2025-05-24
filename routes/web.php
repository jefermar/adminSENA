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
    return view('welcome.index');
})->name('welcome.index');

Route::get('ormconsultas',[OrmController::class,'consultas']);

Route::get('apprentices',[ApprenticeController::class,'index'])->name('apprentice.index');

Route::get('areas',[AreaController::class,'index'])->name('area.index');
Route::get('area/create', [AreaController::class, 'create'])->name('area.create');
Route::post('area/store', [AreaController::class, 'store'])->name('area.store');

Route::get('computers',[ComputerController::class,'index'])->name('computer.index');
Route::get('computer/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('computer/store', [ComputerController::class, 'store'])->name('computer.store');
Route::get('computer/{computer}',[ComputerController::class,'show'])->name('computer.show');
Route::put('computer/{computer}',[ComputerController::class,'update'])->name('computer.update');
Route::get('computer/{computer}/editar',[ComputerController::class,'edit'])->name('computer.edit');
Route::delete('computer/{computer}',[ComputerController::class,'destroy'])->name('computer.destroy');

Route::get('courses',[CourseController::class,'index'])->name('course.index');

Route::get('teachers',[TeacherController::class,'index'])->name('teacher.index');

Route::get('trainingcenters',[TrainingCenterController::class,'index'])->name('trainingCenter.index');
Route::get('trainingcenter/create', [TrainingCenterController::class, 'create'])->name('trainingcenter.create');
Route::post('trainingcenter/store', [TrainingCenterController::class, 'store'])->name('trainingcenter.store');

/*Route::get('trainingCenter/{trainingCenter}', [TrainingCenterController::class, 'show'])->name('category.show');
Route::put('trainingCenter/{trainingCenter}',[TrainingCenterController::class,'update'])->name('category.update');
Route::delete('trainingCenter/{trainingCenter}',[TrainingCenterController::class,'destroy'])->name('category.destroy');
Route::get('curso/{trainingCenter}/editar',[TrainingCenterController::class,'edit'])->name('category.edit');*/