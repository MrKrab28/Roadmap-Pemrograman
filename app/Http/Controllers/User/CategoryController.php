<?php

namespace App\Http\Controllers\User;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\CourseCompletion;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $categories = Category::all();
        return view('pages.user.category', [
            'categories' => $categories,
            'courses' => $courses
        ]);
    }

    public function detail(Category $category)
    {

        $user = Auth::id();
        $courses = Course::where('category_id', $category->id)->get();
        $courseCompletionStatus = [];

        $coursesWithCompletionStatus = $courses->map(function ($course) use ($user) {
            // Mengecek apakah kursus telah selesai oleh pengguna
            $isCompleted = CourseCompletion::where('user_id', $user)
                ->where('course_id', $course->id)
                ->where('selesai', true)
                ->exists();

            // Menambahkan status penyelesaian ke objek kursus
            $course->is_completed = $isCompleted;

            return $course;
        });

        return view('pages.user.category-detail', [
            'category' => $category,
            'courses' => $coursesWithCompletionStatus,
            'courseCompletionStatus' => $courseCompletionStatus
        ]);
    }
}
