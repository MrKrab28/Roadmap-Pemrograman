<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('pages.admin.user', compact('user'));
    }

    public function store(){
        $data = request()->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create($data);

        return redirect()->route('admin.user-store')->with('success', 'User Berhasil Ditambahkan');
    }

    public function edit(User $user){
        return view('pages.admin.user-edit', compact('user'));
    }

    public function update(User $user){
        $data = request()->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user->update($data);

        return redirect()->route('admin.user-update')->with('success', 'User Berhasil Diupdate');
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->back()->with('success', 'User Berhasil Dihapus');
    }
}
