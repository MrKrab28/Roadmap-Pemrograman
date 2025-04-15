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

    public function learning(){
        $user = Auth::user()->id;
        $completions = CourseCompletion::where('user_id', $user)
                        ->where('selesai', true)
                        ->with('course', 'course.category')
                        ->get();

        return view('pages.user.mylearning', [
            'completions' => $completions,
           
        ]);
    }
}
