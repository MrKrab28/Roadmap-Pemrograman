<?php

namespace App\Http\Controllers\Admin;

use App\Models\Jawaban;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JawabanController extends Controller
{
    public function index()
    {
        $jawabans = Jawaban::all();
        return view('pages.admin.jawaban', compact('jawabans'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'jawaban' => 'required',
            'status' => 'required',
            'opsi' => 'required',
            'quis_id' => 'required',
        ]);

        Jawaban::create($data);

        return redirect()->route('admin.jawaban-store')->with('success', 'Jawaban Berhasil Ditambahkan');
    }

    public function edit(Jawaban $jawaban)
    {
        return view('pages.admin.jawaban-edit', compact('jawaban'));
    }

    public function update(Jawaban $jawaban, Request $request)
    {
        $data = $request->validate([
            'jawaban' => 'required',
            'status' => 'required',
            'opsi' => 'required',
            'quis_id' => 'required',
        ]);

        $jawaban->update($data);

        return redirect()->route('admin.jawaban-update')->with('success', 'Jawaban Berhasil Diupdate');
    }

    public function destroy(Jawaban $jawaban)
    {
        $jawaban->delete();
        return redirect()->back()->with('success', 'Jawaban Berhasil Dihapus');
    }
}
