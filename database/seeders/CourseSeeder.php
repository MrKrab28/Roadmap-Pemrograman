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
                'gambar' => 'php_logo.png',
            ],
            [
                'category_id' => 2,
                'judul' => 'Pengenalan HTML',
                'gambar' => 'html_logo.png',
            ],

            [
                'category_id' => 1,
                'judul' => 'Dasar - Dasar PHP',
                'gambar' => 'php_logo.png',
            ],
            [
                'category_id' => 1,
                'judul' => 'Menghubungkan PHP dengan Database',
                'gambar' => 'php_logo.png',
            ],
            [
                'category_id' => 1,
                'judul' => 'Create CRUD Project',
                'gambar' => 'php_logo.png',
            ],
            [
                'category_id' => 1,
                'judul' => 'Validasi & Security',
                'gambar' => 'php_logo.png'
            ],










            [
                'category_id' => 2,
                'judul' => 'Content HTML',
                'gambar' => 'html_logo.png',
            ],
            [
                'category_id' => 2,
                'judul' => 'Layout Structur',
                'gambar' => 'html_logo.png',
            ],
            [
                'category_id' => 2,
                'judul' => 'Pengenalan CSS',
                'gambar' => 'html_logo.png',
            ],
            [
                'category_id' => 2,
                'judul' => 'Styling Dasar',
                'gambar' => 'html_logo.png',
            ],
            [
                'category_id' => 2,
                'judul' => 'Responsif Design & Media Queries',
                'gambar' => 'html_logo.png',
            ],

        ]);
    }
}
