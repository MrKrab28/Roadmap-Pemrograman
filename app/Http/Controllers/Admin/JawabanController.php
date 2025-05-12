<?php

namespace App\Http\Controllers\Admin;

use App\Models\Jawaban;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Quis;

class JawabanController extends Controller
{
    // public function index(Course $course)
    // {
    //     $quis = Quis::where('Course', $course->id)->first();
    //     if($quis){

    //         $jawabans = Jawaban::where('quis_id', $quis->id)->get();
    //         $opsiDipilih = $jawabans->pluck('opsi')->toArray();
    //     }else {
    //         $jawabans = collect();
    //         $opsiDipilih = [];
    //     }
    //     return view('pages.admin.quis', [
    //         'jawabans' => $jawabans??[],
    //         'quises' => $quis,
    //         'course' => $course,
    //         'opsiDipilih' => $opsiDipilih
    //     ]);
    // }
    public function index(Quis $quis)
    {
        $jawabans = Jawaban::where('quis_id', $quis->id)->get();
        if($jawabans){
            $opsiDipilih = $jawabans->pluck('opsi')->toArray();
        }else {
            $jawabans = collect();
            $opsiDipilih = [];
        }
        return view('pages.admin.jawaban', [
            'jawabans' => $jawabans,
            'quis' => $quis,
            'opsiDipilih' => $opsiDipilih
        ]);
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

        return redirect()->back()->with('success', 'Jawaban Berhasil Ditambahkan');
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

        return redirect()->back()->with('success', 'Jawaban Berhasil Diupdate');
    }

    public function destroy(Jawaban $jawaban)
    {
        $jawaban->delete();
        return redirect()->back()->with('success', 'Jawaban Berhasil Dihapus');
    }
}
