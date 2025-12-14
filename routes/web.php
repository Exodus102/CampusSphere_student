<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login.login_stud');
})->name('login.login_stud');
Route::get('/forgot-password', function () {
    return view('login.forgot_password');
})->name('password.request');