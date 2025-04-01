<?php

namespace App\Http\Controllers\User;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;

class CategoryController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $categories = Category::all();
        return view('pages.user.category', [
            'categories' => $categories,
            'courses' => $courses
        ]);
    }

    public function detail(Category $category)
    {

        $course = Course::where('category_id', $category->id)->get();

        return view('pages.user.category-detail', [
            'category' => $category,
            'courses' => $course
        ]);
    }
}
