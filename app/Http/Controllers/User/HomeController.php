<?php

namespace App\Http\Controllers\User;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {

        $categories = Category::all();
        return view('pages.user.index', [
            'categories' => $categories,
          
        ]);
    }
}
