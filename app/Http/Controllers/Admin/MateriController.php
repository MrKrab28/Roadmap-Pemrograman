<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Materi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MateriController extends Controller
{
    public function index(){
        $materis = Materi::all();
        $courses = Course::select('id', 'judul')->get();
        return view('pages.admin.materi', ['materis' => $materis, 'courses' => $courses]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'course_id' => 'required',
            'judul' => 'required',
            'content' => 'required',
        ]);

        Materi::create($data);
       
        return redirect()->back()->with('success', 'Materi Berhasil Ditambahkan');
    }

    public function update(Materi $materi, Request $request){
        $data = $request->validate([
            'judul' => 'required',
            'content' => 'required',
        ]);

        $materi->update($data);

        return redirect()->back()->with('success', 'Materi Berhasil Diupdate');
    }

    public function edit(Materi $materi){
        return view('pages.admin.materi-edit', compact('materi'));
    }
}
