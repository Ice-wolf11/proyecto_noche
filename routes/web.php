<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\attendance_typesController;
use App\Http\Controllers\attitudesController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('attitudes', attitudesController::class);
Route::resource('attendance_types', attendance_typesController::class);
Route::get('attitudestry', function () {
    return view('attitudes.index');
});
