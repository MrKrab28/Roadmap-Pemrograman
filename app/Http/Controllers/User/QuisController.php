<?php

namespace App\Http\Controllers\User;

use App\Models\Quis;
use App\Models\Materi;
use App\Models\Jawaban;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;

class QuisController extends Controller
{
    public function show(Materi $materi)
    {
        $quis = Quis::where('materi_id', $materi->id)->first();
        $jawabans = Jawaban::where('quis_id', $quis->id)->get();
        return view('pages.user.quiz', [
            'materi' => $materi,
            'quis' => $quis,
            'jawabans' => $jawabans
        ]);
    }

    public function submitJawaban(Request $request)
    {

        $data = $request->validate([
            'jawabanOpsi' => 'required',
            'materi_id' => 'required'
        ]);

        $quis = Quis::where('materi_id', $data['materi_id'])->first();

        $jawabanUser = $data['jawabanOpsi'];
        $jawaban = Jawaban::where('quis_id', $quis->id)->where('opsi', $jawabanUser)->first();
        $jawabanBenar = Jawaban::where('quis_id', $quis->id)
            ->where('opsi', $jawabanUser)
            ->where('status', 'benar')
            ->first();

        $status = $jawaban && $jawaban->status ==  'benar' ? 'benar' : 'salah';
        session([
            'jawabanUser' => $jawaban ? $jawaban->jawaban : '',
            'jawabanOpsi' => $jawabanUser,
            'materi_selesai_' . $data['materi_id'] => true
        ]);
        $course = Course::find($quis->materi->course_id);
        // $listMateri = Materi::where('course_id', $course)->first();
        // session(['listMateri' => $listMateri]);
        $lastMateri = $course->materi->last();
        if ($data['materi_id'] == $lastMateri->id) {
            // Set session untuk menandai materi terakhir selesai
            session(['materi_selesai_' . $lastMateri->id => true]);
        }
        return redirect()->route('user.quis-show', ['materi' => $data['materi_id']])->with([
            'status' => $status,
            'jawabanUser' => $jawaban ? $jawaban->jawaban : '',
            'quis_id' => $quis->id,
            'materi_id' => $data['materi_id'],
            'course' => $course,

        ]);
    }
}
