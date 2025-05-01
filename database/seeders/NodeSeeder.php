<?php

namespace Database\Seeders;

use App\Models\Node;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Node::insert(
            [

                ['kode' => 'CategoryBE', 'label' => 'BACKEND', 'roadmap_id' => 1],
                ['kode' => 'PHP', 'label' => 'PHP', 'roadmap_id' => 1],



                ['kode' => 'php1', 'label' => 'Pengenalan PHP', 'roadmap_id' => 1],
                ['kode' => 'php1-1', 'label' => 'Instalasi', 'roadmap_id' => 1],
                ['kode' => 'php1-2', 'label' => 'Apa itu PHP?', 'roadmap_id' => 1],
                ['kode' => 'php1-3', 'label' => 'Sejarah', 'roadmap_id' => 1],
                ['kode' => 'php1-4', 'label' => 'Fungsi PHP dalam Pengembangan Web Backend', 'roadmap_id' => 1],



                ['kode' => 'php2', 'label' => 'Dasar - Dasar PHP', 'roadmap_id' => 1],
                ['kode' => 'php2-1', 'label' => 'PHP Function', 'roadmap_id' => 1],
                ['kode' => 'php2-2', 'label' => 'Sintaks Dasar', 'roadmap_id' => 1],
                ['kode' => 'php2-3', 'label' => 'Variabel, tipe data, & operator','roadmap_id' => 1],
                ['kode' => 'php2-4', 'label' => 'Struktur Kontrol', 'roadmap_id' => 1],
                ['kode' => 'php2-5', 'label' => 'Operasi Array', 'roadmap_id' => 1],



                ['kode' => 'php3', 'label' => 'Menghubungkan PHP dengan Database', 'roadmap_id' => 1],
                ['kode' => 'php3-1', 'label' => 'Instalasi dan Config MySQL', 'roadmap_id' => 1],
                ['kode' => 'php3-2', 'label' => 'Config PHP dengan MySQL', 'roadmap_id' => 1],
                ['kode' => 'php3-3', 'label' => 'Query SQL: SELECT, INSERT, UPDATE, DELETE', 'roadmap_id' => 1],
                ['kode' => 'php3-4', 'label' => 'Handle Data Form dengan MySQL', 'roadmap_id' => 1],



                ['kode' => 'php4', 'label' => 'Create CRUD Project', 'roadmap_id' => 1],
                ['kode' => 'php4-1', 'label' => 'CRUD (Create, Read, Update, Delete)?', 'roadmap_id' => 1],
                ['kode' => 'php4-2', 'label' => 'Project sederhana dengan operasi CRUD', 'roadmap_id' => 1],
                ['kode' => 'php4-3', 'label' => 'Handle form dan data ke database', 'roadmap_id' => 1],



                ['kode' => 'php5', 'label' => 'Validasi & Security', 'roadmap_id' => 1],
                ['kode' => 'php5-1', 'label' => 'Validasi form & sanitasi data', 'roadmap_id' => 1],
                ['kode' => 'php5-2', 'label' => 'App Secure dengan prepared statements untuk menghindari SQL Injection', 'roadmap_id' => 1],
                ['kode' => 'php5-3', 'label' => 'password Hashing (password_hash)', 'roadmap_id' => 1],










                ['kode' => 'CategoryFE', 'label' => 'FRONTEND', 'roadmap_id' => 2],


                ['kode' => 'HTML', 'label' => 'HTML', 'roadmap_id' => 2],


                ['kode' => 'html1', 'label' => 'Pengenalan HTML', 'roadmap_id' => 2],
                ['kode' => 'html1-1', 'label' => 'Struktur Dasar', 'roadmap_id' => 2],
                ['kode' => 'html1-2', 'label' => 'Apa itu HTML?', 'roadmap_id' => 2],
                ['kode' => 'html1-3', 'label' => 'Elemen Dasar: Tag, Atribut, & Value', 'roadmap_id' => 2],



                ['kode' => 'html2', 'label' => 'Content HTML', 'roadmap_id' => 2],
                ['kode' => 'html2-1', 'label' => 'Heading, Paragraph, Lists', 'roadmap_id' => 2],
                ['kode' => 'html2-2', 'label' => 'Form Input', 'roadmap_id' => 2],
                ['kode' => 'html2-3', 'label' => 'Image, Video, & Audio', 'roadmap_id' => 2],
                ['kode' => 'html2-4', 'label' => 'Link & Navigation', 'roadmap_id' => 2],


                ['kode' => 'html3', 'label' => 'Layout Structur', 'roadmap_id' => 2],
                ['kode' => 'html3-1', 'label' => 'Elemen Layout Dasar', 'roadmap_id' => 2],
                ['kode' => 'html3-2', 'label' => 'Table Layout & Grid Sederhana', 'roadmap_id' => 2],
                ['kode' => 'html3-3', 'label' => 'Elemen dengan Hierarki Semantik yang Benar', 'roadmap_id' => 2],


                ['kode' => 'CSS', 'label' => 'CSS', 'roadmap_id' => 2],


                ['kode' => 'css1', 'label' => 'Pengenalan CSS', 'roadmap_id' => 2],
                ['kode' => 'css1-1', 'label' => 'Apa itu CSS?', 'roadmap_id' => 2],
                ['kode' => 'css1-2', 'label' => 'Config CSS', 'roadmap_id' => 2],
                ['kode' => 'css1-3', 'label' => 'CSS: selector, properti, & value', 'roadmap_id' => 2],


                ['kode' => 'css2', 'label' => 'Styling Dasar', 'roadmap_id' => 2],
                ['kode' => 'css2-1', 'label' => 'Menata Text & Font', 'roadmap_id' => 2],
                ['kode' => 'css2-2', 'label' => 'Padding, Margin, & Border', 'roadmap_id' => 2],
                ['kode' => 'css2-3', 'label' => 'Background, Gradient, & Image', 'roadmap_id' => 2],
                ['kode' => 'css2-4', 'label' => 'Width, Height, & Display', 'roadmap_id' => 2],


                ['kode' => 'css3', 'label' => 'Responsif Design & Media Queries', 'roadmap_id' => 2],
                ['kode' => 'css3-1', 'label' => 'Responsif Design', 'roadmap_id' => 2],
                ['kode' => 'css3-2', 'label' => 'Layout Responsif & Viewport Units', 'roadmap_id' => 2],
                ['kode' => 'css3-3', 'label' => 'Media queries', 'roadmap_id' => 2],
                ['kode' => 'css3-4', 'label' => 'Flexbox & Grid', 'roadmap_id' => 2],



                ['kode' => 'JS', 'label' => 'JavaScript', 'roadmap_id' => 2],

                ['kode' => 'js1', 'label' => 'Pengenalan JavaScript', 'roadmap_id' => 2],
                ['kode' => 'js1-1', 'label' => 'Apa itu JavaScript?', 'roadmap_id' => 2],
                ['kode' => 'js1-2', 'label' => 'Menyisipkan JavaScript dalam HTML', 'roadmap_id' => 2],
                ['kode' => 'js1-3', 'label' => 'Struktur Dasar', 'roadmap_id' => 2],


                ['kode' => 'js2', 'label' => 'Structur Control', 'roadmap_id' => 2],
                ['kode' => 'js2-1', 'label' => 'Function', 'roadmap_id' => 2],
                ['kode' => 'js2-2', 'label' => 'Object & Array', 'roadmap_id' => 2],
                ['kode' => 'js2-3', 'label' => 'Event Handling', 'roadmap_id' => 2],















                ['kode' => 'CategoryFS', 'label' => 'FULLSTACK', 'roadmap_id' => 3],


                ['kode' => 'LVL', 'label' => 'LARAVEL', 'roadmap_id' => 3],



                ['kode' => 'lvl1', 'label' => 'pengenalan Laravel', 'roadmap_id' => 3],
                ['kode' => 'lvl1-1', 'label' => 'Installation', 'roadmap_id' => 3],
                ['kode' => 'lvl1-2', 'label' => 'Folder Structur', 'roadmap_id' => 3],


                ['kode' => 'lvl2', 'label' => 'Routing & Controllers', 'roadmap_id' => 3],
                ['kode' => 'lvl2-1', 'label' => 'Routes', 'roadmap_id' => 3],
                ['kode' => 'lvl2-2', 'label' => 'Controllers', 'roadmap_id' => 3],
                ['kode' => 'lvl2-3', 'label' => 'Routing Resource & CRUD Operations', 'roadmap_id' => 3],



                ['kode' => 'lvl3', 'label' => 'Model & Database', 'roadmap_id' => 3],
                ['kode' => 'lvl3-1', 'label' => 'Eloquent ORM', 'roadmap_id' => 3],
                ['kode' => 'lvl3-2', 'label' => 'Interaksi Model dan Database', 'roadmap_id' => 3],
                ['kode' => 'lvl3-3', 'label' => 'migration & struktur tabel', 'roadmap_id' => 3],
                ['kode' => 'lvl3-4', 'label' => 'Laravel Seeder', 'roadmap_id' => 3],



                ]
        );
    }
}
