<?php

namespace App\Http\Controllers\Admin;

use App\Models\Quis;
use App\Models\Materi;
use App\Models\Jawaban;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;

class QuisController extends Controller
{


    public function index(Course $course)
    {
        $quises = Quis::where('course_id', $course->id)->get();

        return view('pages.admin.quis', [
            'quises' => $quises,
            'course' => $course
        ]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'pertanyaan' => 'required',
            'course_id' => 'required',
        ]);

        Quis::create($data);

        return redirect()->back()->with('success', 'Quis Berhasil Ditambahkan');
    }

    public function edit(Quis $quis){
        return view('pages.admin.quis-edit', compact('quis'));

    }

    public function update(Quis $quis, Request $request){
        $data = $request->validate([
            'pertanyaan' => 'required',
        ]);

        $quis->update($data);

        return redirect()->back()->with('success', 'Quis Berhasil Diupdate');
    }

    public function destroy(Quis $quis){
        $quis->delete();
        return redirect()->back()->with('success', 'Quis Berhasil Dihapus');
    }
}
