<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\attendance_typesController;
use App\Http\Controllers\attitudesController;
use App\Http\Controllers\AttendanceReportController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/attendance-report', [AttendanceReportController::class, 'index'])->name('attendance-report');
Route::resource('attitudes', attitudesController::class);
Route::resource('attendance_types', attendance_typesController::class);
Route::get('attitudestry', function () {
    return view('attitudes.index');
});
