<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Course;
use App\Models\Materi;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        $categories = Category::all();
        $courses = Course::all();
        $moduls = Materi::all();
        return view('pages.admin.dashboard', [
            'users' => $users->count(),
            'categories' => $categories->count(),
            'courses' => $courses->count(),
            'moduls' => $moduls->count()
        ]);
    }
}
