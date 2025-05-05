<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::insert([
            [
                'category_id' => 1,
                'judul' => 'Pengenalan PHP',
                'gambar' => 'backend.png',
            ],
            [
                'category_id' => 2,
                'judul' => 'Pengenalan HTML',
                'gambar' => 'frontend.png',
            ],

            [
                'category_id' => 1,
                'judul' => 'Dasar - Dasar PHP',
                'gambar' => 'phplogo2.png',
            ],
            [
                'category_id' => 1,
                'judul' => 'Menghubungkan PHP dengan Database',
                'gambar' => 'phpdatabase.jpg',
            ],
            [
                'category_id' => 1,
                'judul' => 'Create CRUD Project',
                'gambar' => 'phpcrud.png',
            ],
            [
                'category_id' => 1,
                'judul' => 'Validasi & Security',
                'gambar' => 'phpsecurity.jpeg'
            ],










            [
                'category_id' => 2,
                'judul' => 'Content HTML',
                'gambar' => 'html.png',
            ],
            [
                'category_id' => 2,
                'judul' => 'Layout Structur',
                'gambar' => 'html.png',
            ],
            [
                'category_id' => 2,
                'judul' => 'Pengenalan CSS',
                'gambar' => 'css.png',
            ],
            [
                'category_id' => 2,
                'judul' => 'Styling Dasar',
                'gambar' => 'css.png',
            ],
            [
                'category_id' => 2,
                'judul' => 'Responsif Design & Media Queries',
                'gambar' => 'css.png',
            ],
            [
                'category_id' => 2,
                'judul' => 'Pengenalan JavaScript',
                'gambar' => 'javascript.png',
            ],
            [
                'category_id' => 2,
                'judul' => 'Control Alur dengan JavaScript',
                'gambar' => 'javascript.png',
            ],







            [
                'category_id' => 3,
                'judul' => 'LARAVEL',
                'gambar' => 'laravel.png',
            ],
            [
                'category_id' => 3,
                'judul' => 'Routing & contollers',
                'gambar' => 'laravel.png',
            ],
            [
                'category_id' => 3,
                'judul' => 'Model & Database',
                'gambar' => 'laravel.png',
            ],
            [
                'category_id' => 3,
                'judul' => 'Blade',
                'gambar' => 'laravel.png',
            ],
            [
                'category_id' => 3,
                'judul' => 'Blade Direktif',
                'gambar' => 'laravel.png',
            ],

        ]);
    }
}
