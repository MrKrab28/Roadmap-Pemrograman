<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\HomeController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::middleware(['guest:user,admin'])->group(function () {


    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'regis'])->name('register');
    Route::post('/auth', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::post('/register', [AuthController::class, 'registerUser'])->name('registerUser');
});

Route::middleware('auth:user')->group(function () {
    Route::get('/logout-user', [AuthController::class, 'logout'])->name('logout');

    Route::get('/user/index', [HomeController::class, 'index'])->name('user.index');
});
