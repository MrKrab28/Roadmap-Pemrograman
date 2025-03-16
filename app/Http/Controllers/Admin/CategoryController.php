<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('pages.admin.category', compact('categories'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        Category::create($data);

        return redirect()->back()->with('success', 'Category Berhasil Ditambahkan');
    }

    public function edit(Category $category){
        return view('pages.admin.category-edit', compact('category'));
    }

    public function update(Category $category){
        $data = request()->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        $category->update($data);

        return redirect()->route('admin.category-update')->with('success', 'Category Berhasil Diupdate');
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect()->back()->with('success', 'Category Berhasil Dihapus');
    }
}
