<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstTimeLoginController;
use App\Http\Controllers\StudentLoginController;

Route::get('/', function () {
    return view('login.login_stud');
})->name('login.login_stud');
Route::get('/forgot-password', function () {
    return view('login.forgot_password');
})->name('password.request');
Route::get('/first-time-login', function () {
    return view('login.first_time_login');
})->name('login.first_time');



Route::get('/login', [StudentLoginController::class, 'showLogin'])->name('login.show');
Route::post('/login', [StudentLoginController::class, 'login'])->name('login.submit');

Route::get('/student/home', function () {
    return view('student.home'); // create this blade for student home
})->name('student.home');

Route::post('/logout', [StudentLoginController::class, 'logout'])->name('student.logout');



Route::post('/first-time-login', [FirstTimeLoginController::class, 'submit'])
    ->name('first-time-login.submit');



    