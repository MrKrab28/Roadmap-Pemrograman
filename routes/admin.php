<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('components.admin.layout');
// });

Route::middleware('auth:admin')->group(function () {
    Route::post('/logout-admin', [AuthController::class, 'logout'])->name('logout');



    // DASHBOARD
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


});


