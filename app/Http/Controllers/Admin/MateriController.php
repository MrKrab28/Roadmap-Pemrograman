<?php

namespace App\Http\Controllers\Admin;

use App\Models\Materi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MateriController extends Controller
{
    public function index(){
        $materis = Materi::all();
        return view('pages.admin.materi', compact('materis'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'judul' => 'required',
            'content' => 'required',
        ]);

        Materi::create($data);

        return redirect()->route('admin.materi-store')->with('success', 'Materi Berhasil Ditambahkan');
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
