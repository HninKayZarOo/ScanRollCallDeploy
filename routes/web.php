<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\TeacherRegisterController;
use App\Http\Controllers\TeacherLoginController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/student-home', function () {
    return view('studentHome');
});



Route::post('/signup', [RegisterController::class, 'store']);

Route::post('/login', [LoginController::class, 'login'])->name('login');

//Route::post('/signup', [UserController::class, 'store']);

Route::post('/generate-qr', [QrCodeController::class, 'generate']);
Route::get('/generate-qr', [QrCodeController::class, 'showForm']);

Route::get('/attend', [AttendanceController::class, 'recordAttendance'])->middleware('auth');

Route::get('/dashboard', [AttendanceController::class, 'index']);
Route::get('/dashboard-teacher', [AttendanceController::class, 'index']);

Route::get('/register-teacher', [TeacherRegisterController::class, 'showForm']);
Route::post('/register-teacher', [TeacherRegisterController::class, 'store']);

Route::get('/login-teacher', [TeacherLoginController::class, 'showLoginForm']);
Route::post('/login-teacher', [TeacherLoginController::class, 'login']);
