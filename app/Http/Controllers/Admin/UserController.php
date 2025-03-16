<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('pages.admin.user', compact('users'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create($data);

        return redirect()->route('admin.user-store')->with('success', 'User Berhasil Ditambahkan');
    }

    public function edit(User $user)
    {
        return view('pages.admin.user-edit', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        $user = User::find($user->id);
        $user->nama = $request->nama;

        $user->email = $request->email;

        if ($request->password) {

            $user->password = bcrypt($request->password);
        }

        $user->update();



        return redirect()->back()->with('success', 'User Berhasil Diupdate');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('success', 'User Berhasil Dihapus');
    }
}
