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
                ['kode' => '1_php', 'label' => 'Pengenalan PHP', 'roadmap_id' => 1],
                ['kode' => 'php1', 'label' => 'Apa itu PHP?', 'roadmap_id' => 1],
                ['kode' => 'php2', 'label' => 'Sejarah PHP', 'roadmap_id' => 1],
                ['kode' => 'php3', 'label' => 'Fungsi PHP dalam Pengembangan Web Backend', 'roadmap_id' => 1],
                ['kode' => 'php4', 'label' => 'Cara Menginstal PHP dan Lingkungan', 'roadmap_id' => 1],
                ['kode' => 'php5', 'label' => 'Sintaks dasar PHP', 'roadmap_id' => 1],
                ['kode' => 'php6', 'label' => 'Struktur Kontrol', 'roadmap_id' => 1],
                ['kode' => 'php7', 'label' => 'Fungsi dalam PHP', 'roadmap_id' => 1],
            ]
        );
    }
}
