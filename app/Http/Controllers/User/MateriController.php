<?php

namespace App\Http\Controllers\User;

use App\Models\Materi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MateriController extends Controller
{
    public function index()
    {
        $materi = Materi::all();
        return view('pages.user.materi', [
            'materis' => $materi
        ]);
    }

    public function detail(Materi $materi)
    {
        $course = $materi->course;
        $prev = Materi::where('urutan', '<', $materi->urutan)->where('course_id', $materi->course_id)
            ->orderBy('urutan', 'desc')->first();
        $next = Materi::where('urutan', '>', $materi->urutan)->where('course_id', $materi->course_id)
            ->orderBy('urutan', 'asc')->first();
        return view('pages.user.materi-detail', [
            'materi' => $materi,
            'prev' => $prev,
            'next' => $next,
            'course' => $course

        ]);
    }
}
