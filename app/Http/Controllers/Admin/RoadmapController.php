<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Materi;
use App\Models\Node;
use App\Models\Roadmap;
use App\Models\RoadmapConnection;
use IcehouseVentures\LaravelMermaid\Facades\Mermaid;

use Illuminate\Http\Request;

class RoadmapController extends Controller
{


    public function index()
    {
        $roadmap = Roadmap::all();
        $categories = Category::all();
        return view(
            'pages.admin.roadmap',
            [
                'roadmaps' => $roadmap,
                'categories' => $categories
            ]
        );
    }



    public function store(Request $request){
        $data = $request->validate([
            'category_id' => 'required',
        ]);

        Roadmap::create($data);

        return redirect()->back()->with('success', 'Category Roadmap Berhasil Ditambahkan');
    }

    public function build( Roadmap $roadmap){

        $nodes = Node::where('roadmap_id', $roadmap->id)->get();
        $connection = RoadmapConnection::where('roadmap_id', $roadmap->id)->get();
        $mermaidData = "graph TD;\n";
        foreach ($nodes as $node) {
            $mermaidData .=" {$node->kode}[\"{$node->label}\"];\n";
        }

        foreach ($connection as $konek) {
            $mermaidData .=" {$konek->source} --> {$konek->target};\n";
        }
        $mermaidData .= "classDef node fill:#29b6f6,stroke:#000,stroke-width:1px, rx:10px,ry:10px,color:#fff;\n";  // Styling untuk node
        // $mermaidData .= "class A,B,C,D node;\n";
        $mermaidData .= "linkStyle default stroke:#fff,stroke-width:2px;\n";

        return view('pages.admin.roadmap-build', [
            'roadmap' =>   $roadmap,
            'nodes' => Node::all(),
            'koneks' => RoadmapConnection::all(),
            'mermaidData' => $mermaidData,

        ]);
    }




    public function nodeStore(Request $request){
        $data = $request->validate([
            'roadmap_id' => 'required',
            'kode' => 'required',
            'label' => 'required',
        ]);

        Node::create($data);

        return redirect()->back()->with('success', 'Node Berhasil Ditambahkan');
    }



    public function konekStore(Request $request){
        $data = $request->validate([
            'roadmap_id' => 'required',
            'source' => 'required',
            'target' => 'required',
        ]);

        RoadmapConnection::create($data);

        return redirect()->back()->with('success', 'Koneksi Berhasil Ditambahkan');
    }

    public function konekDelete(RoadmapConnection $konek){
        $konek->delete();
        return redirect()->back()->with('success', 'Koneksi Berhasil Dihapus');
    }


    public function nodeDelete(Node $node){
        $node->delete();
        return redirect()->back()->with('success', 'Node Berhasil Dihapus');
    }

    public function category()
    {

        $categories = Category::with('course.materi')->get();

        $data = [];

        foreach ($categories as $category) {


            $data[] = "{$category->id}(({$category->nama}))";

            foreach ($category->course as $course) {
                $data[] = "{$course->id}[{$course->judul}]";
                $data[] = "{$category->id} --> {$course->id}";

                foreach ($course->materi as $materi) {
                    $data[] = "{$materi->id}[{$materi->judul}]";
                    $data[] = "{$course->id} --> {$materi->id}";
                }
            }
        }

        // $data[] = "classDef category fill:#f9f9f9,stroke:#000,stroke-width:200px";
        // $data[] = "classDef course fill:#e0f7fa,stroke:#00796b,stroke-width:2px";
        // $data[] = "classDef modul fill:#e3f2fd,stroke:#01579b,stroke-width:2px";


        // $data[] = "linkStyle 0,1 stroke:#29b6f6,stroke-width:2px";
        // $data[] = "linkStyle 3,4 stroke:#29b6f6,stroke-width:2px";


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
