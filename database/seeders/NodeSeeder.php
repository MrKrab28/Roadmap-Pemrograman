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

                ['kode' => 'Category', 'label' => 'BACKEND', 'roadmap_id' => 1],
                ['kode' => 'PHP', 'label' => 'PHP', 'roadmap_id' => 1],
                ['kode' => 'LVL', 'label' => 'LARAVEL', 'roadmap_id' => 1],



                ['kode' => 'php1', 'label' => 'Pengenalan PHP', 'roadmap_id' => 1],
                ['kode' => 'php1-1', 'label' => 'Apa itu PHP?', 'roadmap_id' => 1],
                ['kode' => 'php1-2', 'label' => 'Sejarah', 'roadmap_id' => 1],
                ['kode' => 'php1-3', 'label' => 'Fungsi PHP dalam Pengembangan Web Backend', 'roadmap_id' => 1],
                ['kode' => 'php1-4', 'label' => 'Instalasi', 'roadmap_id' => 1],



                ['kode' => 'php2', 'label' => 'Dasar - Dasar PHP', 'roadmap_id' => 1],
                ['kode' => 'php2-1', 'label' => 'Sintaks Dasar', 'roadmap_id' => 1],
                ['kode' => 'php2-2', 'label' => 'Variabel, tipe data, & operator','roadmap_id' => 1],
                ['kode' => 'php2-3', 'label' => 'Struktur Kontrol', 'roadmap_id' => 1],
                ['kode' => 'php2-4', 'label' => 'PHP Function', 'roadmap_id' => 1],
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

                ]
        );
    }
}
