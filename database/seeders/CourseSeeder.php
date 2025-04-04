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
                'judul' => 'Introduction to Backend Development',
                'gambar' => '1743532813HTML, CSS.png',
            ],
            [
                'category_id' => 1,
                'judul' => 'Introduction to Backend PHP Language',
                'gambar' => '1743532813HTML, CSS.png',
            ],
            [
                'category_id' => 1,
                'judul' => 'PHP Fundamental',
                'gambar' => '1743532813HTML, CSS.png',
            ],
            [
                'category_id' => 2,
                'judul' => 'Frontend Development with HTML & CSS',
                'gambar' => 'Mempelajari cara membuat website dengan menggunakan HTML dan CSS.',
            ],
            [
                'category_id' => 2,
                'judul' => 'learn how frameworks works',
                'gambar' => '1743532813HTML, CSS.png',
            ],
            [
                'category_id' => 3,
                'judul' => 'Fullstack',
                'gambar' => '1743532813HTML, CSS.png',
            ],
        ]);
    }
}
