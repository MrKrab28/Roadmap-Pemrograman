<?php

namespace App\Http\Controllers\User;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\CourseCompletion;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


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
    }

    public function completeCourse($course_id)
    {
        $user_id = Auth::user()->id;  // Mendapatkan ID pengguna yang sedang login

        // Cek apakah user sudah memiliki record untuk course tersebut
        $courseCompletion = CourseCompletion::where('user_id', $user_id)
            ->where('course_id', $course_id)
            ->first();

        if ($courseCompletion) {
            // Jika sudah ada, update status selesai menjadi true
            $courseCompletion->selesai = true;
            $courseCompletion->save();
        } else {
            // Jika belum ada, buat entri baru
            CourseCompletion::create([
                'user_id' => $user_id,
                'course_id' => $course_id,
                'selesai' => true,
            ]);
        }

        // Redirect kembali ke halaman kursus
        return redirect()->route('user.course-index')->with('status', 'benar');
    }

}
