<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Materi;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $categories = Category::select('id', 'nama')->get();
        return view('pages.admin.course', ['courses' => $courses, 'categories' => $categories]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id' => 'required',
            'judul' => 'required',
            'gambar' => 'required',
        ]);

        $file = $request->file('gambar');
        $filename = time() .  $data['judul'] .'.' . $file->extension();
        $file->move(public_path('images/courses'), $filename);
        $data['gambar'] = $filename;

        Course::create($data);

        return redirect()->back()->with('success', 'Course Berhasil Ditambahkan');
    }

    public function courseModul(Course $course){
        $materi = Materi::where('course_id', $course->id)->get();
        return view('pages.admin.course-modul', [
            'materis' => $materi,
            'course' => $course
        ]);
    }

    public function quis(Course $course){
        return view('pages.admin.quis', [
            'course' => $course
        ]);
    }


    public function edit(Course $course)
    {
        return view('pages.admin.course-edit', compact('course'));
    }

    public function update(Course $course, Request $request)
    {
        $data = request()->validate([
            'category_id' => 'required',
            'judul' => 'required',
            'gambar' => 'required',
        ]);

        if($request->hasFile('gambar')){

            $file = $request->file('gambar');
            $filename = time() .  $data['judul'] .'.' . $file->extension();
            $file->move(public_path('images/courses'), $filename);
            $data['gambar'] = $filename;
        }else{
            $data['gambar'] = $course->gambar;
        }
        $course->update($data);



        return redirect()->back()->with('success', 'Course Berhasil Diupdate');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->back()->with('success', 'Course Berhasil Dihapus');
    }
}
