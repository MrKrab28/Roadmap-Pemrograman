<?php

namespace App\Http\Controllers\Admin;

use App\Models\Quis;
use App\Models\Materi;
use App\Models\Jawaban;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuisController extends Controller
{
    public function index(Materi $materi)
    {
        $quis = Quis::where('materi_id', $materi->id)->first();
        if($quis){

            $jawabans = Jawaban::where('quis_id', $quis->id)->get();
            $opsiDipilih = $jawabans->pluck('opsi')->toArray();
        }else {
            $jawabans = collect();
            $opsiDipilih = [];
        }
        return view('pages.admin.quis', [
            'jawabans' => $jawabans??[],
            'quis' => $quis,
            'materi' => $materi,
            'opsiDipilih' => $opsiDipilih
        ]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'pertanyaan' => 'required',
            'materi_id' => 'required',
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
