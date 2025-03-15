<?php

namespace App\Http\Controllers\Admin;

use App\Models\Quis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuisController extends Controller
{
    public function index()
    {
        $quis = Quis::all();
        return view('pages.admin.quis', compact('quis'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'pertanyaan' => 'required',
        ]);

        Quis::create($data);

        return redirect()->route('admin.quis-store')->with('success', 'Quis Berhasil Ditambahkan');
    }

    public function edit(Quis $quis){
        return view('pages.admin.quis-edit', compact('quis'));

    }

    public function update(Quis $quis, Request $request){
        $data = $request->validate([
            'pertanyaan' => 'required',
        ]);

        $quis->update($data);

        return redirect()->route('admin.quis-update')->with('success', 'Quis Berhasil Diupdate');
    }

    public function destroy(Quis $quis){
        $quis->delete();
        return redirect()->route('admin.quis-update')->with('success', 'Quis Berhasil Dihapus');
    }
}
