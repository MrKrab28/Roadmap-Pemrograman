<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert(
            [
                [
                    'nama' => 'BackEnd',
                    'deskripsi' => 'Backend adalah bagian dari sistem aplikasi yang bekerja di belayar layar, tidak terlihat langsung oleh pengguna tetapi berperan krusial dalam menjalankan aplikasi. Ini seperti "dapur" dalam sebuah restoran - pelanggan tidak melihat proses memasak, tapi merekalah yang bertanggung jawab atas hidangan yang disajikan.',
                ],
                [
                    'nama' => 'FrontEnd',
                    'deskripsi' => 'Frontend adalah bagian dari pengembangan web yang berfokus pada antarmuka pengguna (user interface, UI) yang dapat dilihat dan berinteraksi langsung dengan pengguna. Frontend mencakup segala hal yang terlihat di layar pengguna, seperti tata letak, desain, grafik, dan interaktivitas pada halaman web atau aplikasi.',
                ],
                [
                    'nama' => 'Fullstack',
                    'deksripsi' => 'Fullstack merujuk pada pengembangan aplikasi web atau perangkat lunak yang mencakup baik sisi frontend (yang berhubungan langsung dengan pengguna) maupun sisi backend (yang menangani logika, penyimpanan data, dan pengolahan di server). Seorang Fullstack Developer adalah seseorang yang memiliki keterampilan untuk mengembangkan seluruh bagian dari aplikasi, mulai dari tampilan antarmuka pengguna hingga manajemen basis data dan logika server.',

                ],
            ]
        );
    }
}
