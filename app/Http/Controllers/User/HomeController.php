<?php

namespace App\Http\Controllers\User;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\CourseCompletion;
use App\Http\Controllers\Controller;
use App\Models\Materi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {

        $categories = Category::all();
        return view('pages.user.index', [
            'categories' => $categories,

        ]);
    }

    public function profile(User $user)
    {
        return view('pages.user.profile', compact('user'));


    }

    public function update(Request $request, User $user)
    {
        $user = User::find($user->id);
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required',

        ]);

        $user->nama = $data['nama'];
        $user->email = $data['email'];


        if ($request->password) {

            $user->password = bcrypt($request->password);
        }
    $user->update();
        // dd($request->all());


        return redirect()->back()->with('success', 'Profile Anda Berhasil di Update');
    }

    public function learning()
    {
        $user = Auth::user()->id;

        $completions = CourseCompletion::where('user_id', $user)
            ->where('selesai', true)
            ->with('course', 'course.category')
            ->get();

            $grouped = $completions->groupBy(function ($completion) {
                return $completion->course->category->id ?? 'tanpa_kategori';
            });

            $categories = $completions
                ->pluck('course.category')
                ->unique('id')
                ->filter()
                ->values();


        return view('pages.user.mylearning', [
            'groupedCompletions' => $grouped,
            'categories' => $categories,

        ]);
    }
}
