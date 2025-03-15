<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\QuisController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\MateriController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;

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

    // CATEGORY
    Route::get('categories', [CategoryController::class, 'index'])->name('admin.category-index');
    Route::post('categories/add', [CategoryController::class, 'store'])->name('admin.category-store');
    Route::get('categories/edit/{category}', [CategoryController::class, 'edit'])->name('admin.category-edit');
    Route::put('categories/update/{category}', [CategoryController::class, 'update'])->name('admin.category-update');
    Route::delete('categories/delete/{category}', [CategoryController::class, 'delete'])->name('admin.category-delete');

    // COURSE
    Route::get('courses', [CourseController::class, 'index'])->name('admin.course-index');
    Route::post('courses/add', [CourseController::class, 'store'])->name('admin.course-store');
    Route::get('courses/edit/{course}', [CourseController::class, 'edit'])->name('admin.course-edit');
    Route::put('courses/update/{course}', [CourseController::class, 'update'])->name('admin.course-update');
    Route::delete('courses/delete/{course}', [CourseController::class, 'delete'])->name('admin.course-delete');

    // MATERI
    Route::get('materis', [MateriController::class, 'index'])->name('admin.materi-index');
    Route::post('materis/add', [MateriController::class, 'store'])->name('admin.materi-store');
    Route::get('materis/edit/{materi}', [MateriController::class, 'edit'])->name('admin.materi-edit');
    Route::put('materis/update/{materi}', [MateriController::class, 'update'])->name('admin.materi-update');
    Route::delete('materis/delete/{materi}', [MateriController::class, 'delete'])->name('admin.materi-delete');

    // QUIZ
    Route::get('quizzes', [QuisController::class, 'index'])->name('admin.quis-index');
    Route::post('quizzes/add', [QuisController::class, 'store'])->name('admin.quis-store');
    Route::get('quizzes/edit/{quis}', [QuisController::class, 'edit'])->name('admin.quis-edit');
    Route::put('quizzes/update/{quis}', [QuisController::class, 'update'])->name('admin.quis-update');
    Route::delete('quizzes/delete/{quis}', [QuisController::class, 'delete'])->name('admin.quis-delete');


    

});


