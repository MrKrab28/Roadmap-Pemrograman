<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\HomeController;

use App\Http\Controllers\User\QuisController;
use App\Http\Controllers\User\CourseController;
use App\Http\Controllers\User\MateriController;
use App\Http\Controllers\User\CategoryController;

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
    Route::post('/logout-user', [AuthController::class, 'logoutUser'])->name('user.logout');

    Route::get('/user/learning', [HomeController::class, 'learning'])->name('user.mylearning');

    Route::get('/user/index', [HomeController::class, 'index'])->name('user.index');


    Route::get('/category/detail/{category}', [CategoryController::class, 'detail'])->name('user.category-detail');

    Route::get('course', [CourseController::class, 'index'])->name('user.course-index');
    Route::get('course/detail/{course}', [CourseController::class, 'detail'])->name('user.course-detail');

    Route::get('materi', [MateriController::class, 'index'])->name('user.materi-index');
    Route::get('materi/detail/{materi}', [MateriController::class, 'detail'])->name('user.materi-detail');


    Route::get('quiz/show/{course}', [QuisController::class, 'show'])->name('user.quis-show');
    Route::post('/quiz/submit/{course}', [QuisController::class, 'submitJawaban'])->name('user.quis-submitJawaban');


    Route::get('course/{course_id}/complete', [CourseController::class, 'completeCourse'])->name('user.complete-course');
});
