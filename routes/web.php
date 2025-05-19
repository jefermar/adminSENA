<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrmController;
use App\Http\Controllers\TeacherController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('ormconsultas',[OrmController::class,'consultas']);
Route::get('teachers',[TeacherController::class,'teacher']);