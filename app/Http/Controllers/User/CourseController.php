<?php

namespace App\Http\Controllers\User;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('pages.user.course', [
            'courses' => $courses
        ]);
    }

    public function detail(Course $course)
    {
        return view('pages.user.course-detail', [
            'course' => $course
        ]);
    }    //
}
