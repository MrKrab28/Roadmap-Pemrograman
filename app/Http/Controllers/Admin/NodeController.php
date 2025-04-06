<?php

namespace App\Http\Controllers\Admin;

use App\Models\Node;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NodeController extends Controller
{
  public function index(Request $request)
  {

   
  }

  public function store(Request $request){
    $data = $request->validate([
        'kode' => 'required',
        'label' => 'required',
    ]);

    Node::create($data);

    return redirect()->back()->with('success', 'Node Berhasil Ditambahkan');
  }
}
