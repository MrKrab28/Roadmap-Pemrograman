<?php

namespace App\Http\Controllers\User;

use App\Models\Node;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\CourseCompletion;
use App\Models\RoadmapConnection;
use App\Http\Controllers\Controller;
use App\Models\Roadmap;
use Illuminate\Support\Facades\Auth;

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

        $user = Auth::id();
        $courses = Course::where('category_id', $category->id)->get();
        $courseCompletionStatus = [];

        $coursesWithCompletionStatus = $courses->map(function ($course) use ($user) {
            // Mengecek apakah kursus telah selesai oleh pengguna
            $isCompleted = CourseCompletion::where('user_id', $user)
                ->where('course_id', $course->id)
                ->where('selesai', true)
                ->exists();

            // Menambahkan status penyelesaian ke objek kursus
            $course->is_completed = $isCompleted;

            return $course;
        });

        return view('pages.user.category-detail', [
            'category' => $category,
            'courses' => $coursesWithCompletionStatus,
            'courseCompletionStatus' => $courseCompletionStatus,
            'mermaidData' => $category->roadmap ? $this->renderMermaid($category->roadmap) : null
        ]);
    }

    private function renderMermaid(Roadmap $roadmap)
    {
        $nodes = Node::where('roadmap_id', $roadmap->id)->get();
        $connection = RoadmapConnection::where('roadmap_id', $roadmap->id)->get();
        $mermaidData = "graph TD;\n";
        foreach ($nodes as $node) {
            $mermaidData .= " {$node->kode}[\"{$node->label}\"];\n";
        }

        foreach ($connection as $konek) {
            $mermaidData .= " {$konek->source} --> {$konek->target};\n";
        }
        $mermaidData .= "classDef node fill:#29b6f6,stroke:#000,stroke-width:1px, rx:10px,ry:10px,color:#fff;\n";  // Styling untuk node
        $mermaidData .= "linkStyle default stroke:#fff,stroke-width:2px;\n";

        return $mermaidData;
    }
}
