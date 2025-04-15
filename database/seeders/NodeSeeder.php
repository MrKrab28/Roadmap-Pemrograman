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
                ['kode' => 'PHP', 'label' => 'PHP', 'roadmap_id' => 1],
                ['kode' => 'LVL', 'label' => 'LARAVEL', 'roadmap_id' => 1],
                ['kode' => 'php1', 'label' => 'Pengenalan PHP', 'roadmap_id' => 1],
                ['kode' => 'php1-1', 'label' => 'Apa itu PHP?', 'roadmap_id' => 1],
                ['kode' => 'php1-2', 'label' => 'Sejarah PHP', 'roadmap_id' => 1],
                ['kode' => 'php1-3', 'label' => 'Fungsi PHP dalam Pengembangan Web Backend', 'roadmap_id' => 1],
                ['kode' => 'php1-4', 'label' => 'Cara Menginstal PHP dan Lingkungan', 'roadmap_id' => 1],



                ['kode' => 'php2', 'label' => 'Dasar - Dasar PHP', 'roadmap_id' => 1],
                ['kode' => 'php2-1', 'label' => 'Sintaks Dasar PHP', 'roadmap_id' => 1],
                ['kode' => 'php2-2', 'label' => 'PHP Function', 'roadmap_id' => 1],
                ['kode' => 'php2-3', 'label' => 'Struktur Kontrol', 'roadmap_id' => 1],
                ['kode' => 'php2-4', 'label' => 'Operasi Array', 'roadmap_id' => 1],



                ['kode' => 'php3', 'label' => 'Menghubungkan PHP dengan Database', 'roadmap_id' => 1],
                ['kode' => 'php3-1', 'label' => 'Instalasi dan Konfigurasi MySQL', 'roadmap_id' => 1],
                ['kode' => 'php3-2', 'label' => 'Menghubungkan PHP dengan Database MySQL', 'roadmap_id' => 1],
                ['kode' => 'php3-3', 'label' => 'Menulis Query SQL di PHP: SELECT, INSERT, UPDATE, DELETE', 'roadmap_id' => 1],
                ['kode' => 'php3-4', 'label' => 'Menangani Data Form dengan PHP dan MySQL', 'roadmap_id' => 1],



                ['kode' => 'php4', 'label' => 'Create CRUD Project With PHP', 'roadmap_id' => 1],
                ['kode' => 'php4-1', 'label' => 'Apa itu CRUD (Create, Read, Update, Delete)?', 'roadmap_id' => 1],
                ['kode' => 'php4-2', 'label' => 'Membuat aplikasi sederhana dengan operasi CRUD', 'roadmap_id' => 1],
                ['kode' => 'php4-3', 'label' => 'Handle form dan proses data ke database', 'roadmap_id' => 1],


                
                ['kode' => 'php4-3', 'label' => 'Handle form dan proses data ke database', 'roadmap_id' => 1],
                ]
        );
    }
}
