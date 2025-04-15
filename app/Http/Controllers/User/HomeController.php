<?php

namespace App\Http\Controllers\User;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\CourseCompletion;
use App\Http\Controllers\Controller;
use App\Models\Materi;
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
