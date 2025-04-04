<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\QuisController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\MateriController;
use App\Http\Controllers\Admin\JawabanController;
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
    Route::get('user', [UserController::class, 'index'])->name('admin.user-index');
    Route::post('user/add', [UserController::class, 'store'])->name('admin.user-store');
    Route::get('user/edit/{user}', [UserController::class, 'edit'])->name('admin.user-edit');
    Route::put('user/update/{user}', [UserController::class, 'update'])->name('admin.user-update');
    Route::delete('user/delete/{user}', [UserController::class, 'delete'])->name('admin.user-delete');

    // CATEGORY
    Route::get('category', [CategoryController::class, 'index'])->name('admin.category-index');
    Route::post('category/add', [CategoryController::class, 'store'])->name('admin.category-store');
    Route::get('category/edit/{category}', [CategoryController::class, 'edit'])->name('admin.category-edit');
    Route::put('category/update/{category}', [CategoryController::class, 'update'])->name('admin.category-update');
    Route::delete('category/delete/{category}', [CategoryController::class, 'delete'])->name('admin.category-delete');

    // COURSE
    Route::get('course', [CourseController::class, 'index'])->name('admin.course-index');
    Route::post('course/add', [CourseController::class, 'store'])->name('admin.course-store');
    Route::get('course/edit/{course}', [CourseController::class, 'edit'])->name('admin.course-edit');
    Route::put('course/update/{course}', [CourseController::class, 'update'])->name('admin.course-update');
    Route::delete('course/delete/{course}', [CourseController::class, 'delete'])->name('admin.course-delete');

    // MATERI
    Route::get('materi', [MateriController::class, 'index'])->name('admin.materi-index');
    Route::post('materi/add', [MateriController::class, 'store'])->name('admin.materi-store');
    Route::get('materi/edit/{materi}', [MateriController::class, 'edit'])->name('admin.materi-edit');
    Route::put('materi/update/{materi}', [MateriController::class, 'update'])->name('admin.materi-update');
    Route::delete('materi/delete/{materi}', [MateriController::class, 'delete'])->name('admin.materi-delete');

    // QUIZ
    Route::get('materi/quizz/{materi}', [QuisController::class, 'index'])->name('admin.quis-index');
    Route::post('materi/quizz/add', [QuisController::class, 'store'])->name('admin.quis-store');
    Route::get('materi/quizz/edit/{quis}', [QuisController::class, 'edit'])->name('admin.quis-edit');
    Route::put('materi/quizz/update/{quis}', [QuisController::class, 'update'])->name('admin.quis-update');
    Route::delete('materi/quizz/delete/{quis}', [QuisController::class, 'destroy'])->name('admin.quis-delete');


    Route::get('jawaban', [JawabanController::class, 'index'])->name('admin.jawaban-index');
    Route::post('jawaban/add', [JawabanController::class, 'store'])->name('admin.jawaban-store');
    Route::get('jawaban/edit/{jawaban}', [JawabanController::class, 'edit'])->name('admin.jawaban-edit');
    Route::put('jawaban/update/{jawaban}', [JawabanController::class, 'update'])->name('admin.jawaban-update');
    Route::delete('jawaban/delete/{jawaban}', [JawabanController::class, 'destroy'])->name('admin.jawaban-delete');

});


