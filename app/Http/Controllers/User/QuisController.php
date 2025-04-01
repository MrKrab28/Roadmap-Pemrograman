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
    public function show(Materi $materi)
    {   $course = $materi->course;
        $quis = Quis::where('materi_id', $materi->id)->first();
        $jawabans = Jawaban::where('quis_id', $quis->id)->get();
        return view('pages.user.quiz', [
            'materi' => $materi,
            'quis' => $quis,
            'jawabans' => $jawabans,
            'course' => $course
        ]);
    }

    public function submitJawaban(Request $request)
    {
        $data = $request->validate([
            'jawabanOpsi' => 'required',
            'materi_id' => 'required',
            'course_id' => 'required' // pastikan course_id ada di request
        ]);

        // Ambil data quiz
        $quis = Quis::where('materi_id', $data['materi_id'])->first();
        $jawabanUser = $data['jawabanOpsi'];
        $jawaban = Jawaban::where('quis_id', $quis->id)->where('opsi', $jawabanUser)->first();

        // Tentukan status jawaban
        $status = $jawaban && $jawaban->status == 'benar' ? 'benar' : 'salah';
        $user = Auth::user();
        $course = Course::find($data['course_id']); // Sekarang bisa mendapatkan course_id dari request
        $materi_id = $data['materi_id'];

        // Simpan informasi di session
        session([
            'jawabanUser' => $jawaban ? $jawaban->jawaban : '',
            'jawabanOpsi' => $jawabanUser,
            'materi_selesai_' . $data['materi_id'] => true
        ]);

        // Cek apakah materi terakhir sudah selesai
        $lastMateri = $course->materi->last();
        if ($materi_id == $lastMateri->id) {
            // Tandai materi sebagai selesai
            CourseCompletion::updateOrCreate(
                [
                    'user_id' => $user->id,
                    'course_id' => $course->id,
                    'materi_id' => $materi_id
                ],
                [
                    'selesai' => true,
                    'jawabanUser' => $jawabanUser
                ]
            );

            // Setelah materi terakhir selesai, cek apakah seluruh materi dalam kursus telah selesai
            $allMaterisCompleted = true;

            foreach ($course->materi as $materi) {
                $materiCompleted = CourseCompletion::where('user_id', $user->id)
                    ->where('course_id', $course->id)
                    ->where('materi_id', $materi->id)
                    ->where('selesai', false)
                    ->exists();

                if ($materiCompleted) {
                    $allMaterisCompleted = false;
                    break;
                }
            }

            // Jika semua materi selesai, tandai kursus sebagai selesai
            if ($allMaterisCompleted) {
                CourseCompletion::updateOrCreate(
                    [
                        'user_id' => $user->id,
                        'course_id' => $course->id
                    ],
                    [
                        'selesai' => true
                    ]
                );
            }
        }

        return redirect()->route('user.quis-show', ['materi' => $data['materi_id']])->with([
            'status' => $status,
            'jawabanUser' => $jawaban ? $jawaban->jawaban : '',
            'quis_id' => $quis->id,
            'materi_id' => $data['materi_id'],
            'course' => $course // Pastikan mengirimkan $course ke view
        ]);
    }




}
