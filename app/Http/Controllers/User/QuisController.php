<?php

namespace App\Http\Controllers\User;

use App\Models\Quis;
use App\Models\Materi;
use App\Models\Jawaban;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCompletion;
use Illuminate\Support\Facades\Auth;

class QuisController extends Controller
{
    public function show(Course $course)
    {
        $courseCompletion = CourseCompletion::where('user_id', Auth::user()->id)->where('course_id', $course->id)->first();

        return view('pages.user.quiz', [
            'daftarPertanyaan' => $course->quis,
            'course' => $course,
            'courseCompletion' => $courseCompletion
        ]);
    }

    public function submitJawaban(Request $request, Course $course)
    {
        $skor = 0;
        foreach ($request->jawaban as $jawaban) {
            $jwb = Jawaban::find($jawaban);

            if ($jwb->status == "benar") $skor += 1;
        }

        $skor = $skor * 100 / count($course->quis);
        if ($skor != 50) {

            CourseCompletion::insert([
                'user_id' => Auth::user()->id,
                'course_id' => $course->id,
                'selesai' => true,
                'skor' => $skor
            ]);
        } else {
            return back()->with('error', 'Skor Anda Belum Memenuhi syarat');
        }

        return to_route('user.category-detail', $course->category_id)->with('skor', 'Andah Telah Menyelesaikan Course ' . $course->judul . ', Skor Anda : ' . $skor);
    }

}
