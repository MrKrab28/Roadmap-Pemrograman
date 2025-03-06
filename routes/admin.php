<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('components.admin.layout');
// });

Route::middleware('auth:admin')->group(function () {
    Route::post('/logout-admin', [AuthController::class, 'logout'])->name('logout');



    // DASHBOARD
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



    // USER
    Route::get('users', [UserController::class, 'index'])->name('admin.user-index');
    Route::post('users/add', [UserController::class, 'store'])->name('admin.user-store');
    Route::get('users/edit/{user}', [UserController::class, 'edit'])->name('admin.user-edit');
    Route::put('users/update/{user}', [UserController::class, 'update'])->name('admin.user-update');
    Route::delete('users/delete/{user}', [UserController::class, 'delete'])->name('admin.user-delete');


});


