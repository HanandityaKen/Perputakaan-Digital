<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

//sementara
Route::get('/', function () {
    return view('auth.user.user_register');
});

//login user
Route::get('/login', [AuthController::class, 'showUserLoginForm'])->name('user.login');
Route::get('/register', [AuthController::class, 'showUserRegisterForm'])->name('user.register');
