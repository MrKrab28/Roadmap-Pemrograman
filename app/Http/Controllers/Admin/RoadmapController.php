<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Materi;
use IcehouseVentures\LaravelMermaid\Facades\Mermaid;

use Illuminate\Http\Request;

class RoadmapController extends Controller
{


    public function category()
    {
        // Ambil data kategori beserta kursus dan modulnya
        $categories = Category::with('course.materi')->get();

        $data = [];

        // Loop untuk setiap kategori dan course serta modul yang berhubungan
        foreach ($categories as $category) {
            // Menambahkan kategori ke diagram
            $data[] = "{$category->id}(({$category->nama}))";

            foreach ($category->course as $course) {
                // Menambahkan course yang ada pada kategori
                $data[] = "{$course->id}[{$course->judul}]";
                // Menambahkan relasi antara kategori dan course
                $data[] = "{$category->id} --> {$course->id}";

                foreach ($course->materi as $materi) {
                    // Menambahkan materi yang ada pada course
                    $data[] = "{$materi->id}[{$materi->judul}]";
                    // Menambahkan relasi antara course dan materi
                    $data[] = "{$course->id} --> {$materi->id}";
                }
            }
        }

        // Kelas dan gaya untuk kategori, course, dan modul
        $data[] = "classDef category fill:#f9f9f9,stroke:#000,stroke-width:200px";
        $data[] = "classDef course fill:#e0f7fa,stroke:#00796b,stroke-width:2px";
        $data[] = "classDef modul fill:#e3f2fd,stroke:#01579b,stroke-width:2px";


        $data[] = "linkStyle 0,1 stroke:#29b6f6,stroke-width:2px";  // Garis dari kategori ke kursus (Merah)
        $data[] = "linkStyle 3,4 stroke:#29b6f6,stroke-width:2px";

        // Men-generate diagram dari array data
        $data = Mermaid::build()->generateDiagramFromArray($data);

        return view('pages.admin.roadmap-category', [
            'categories' => $categories,
            'data' => $data,
        ]);
    }


    public function course()
    {
        $course = Course::all();
        return view('pages.admin.roadmap-course', [
            'courses' => $course
        ]);
    }

    public function modul()
    {
        $modul = Materi::all();
        return view('pages.admin.roadmap-modul', [
            'moduls' => $modul
        ]);
    }
}
