<?php

namespace Database\Seeders;

use App\Models\Materi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Materi::insert([
            [
                'course_id' => 1,
                'judul' => 'Introduction to Backend Development',
                'content' => 'Materi ini akan membahas pengenalan pengembangan backend, seperti apa itu server dan bagaimana cara kerjanya.',
                'urutan' => 1,
            ],
            [
                'course_id' => 1,
                'judul' => 'Introduction to Backend Development',
                'content' => 'Introduction to Backend Development',
                'urutan' => 2,
            ],
            [
                'course_id' => 1,
                'judul' => 'Introduction to Backend Development',
                'content' => 'Introduction to Backend DevelopmentIntroduction to Backend Development',
                'urutan' => 3,
            ],
            [
                'course_id' => 1,
                'judul' => 'Introduction to Backend Development',
                'content' => 'Materi ini akan membahas pengenalan pengembangan backend, seperti apa itu server dan bagaimana cara kerjanya.',
                'urutan' => 4,
            ],
            [
                'course_id' => 1,
                'judul' => 'Introduction to Backend Development',
                'content' => 'ada dasdasdasdasdas',
                'urutan' => 5,
            ],
            [
                'course_id' => 1,
                'judul' => 'Introduction to Backend Development',
                'content' => 'rtghggsfdsdfg324324342342324',
                'urutan' => 6,
            ],
            [
                'course_id' => 1,
                'judul' => 'Introduction to Backend Development',
                'content' => 'SDFDSFDFSSDF3124343',
                'urutan' => 7,
            ],
            [
                'course_id' => 1,
                'judul' => 'Introduction to Backend Development',
                'content' => 'GHGFHGFHFHGFG343434SSASADSADS',
                'urutan' => 8,
            ],
            [
                'course_id' => 1,
                'judul' => 'Introduction to Backend Development',
                'content' => 'Materi ini akan membahas pengenalan pengembangan backend, seperti apa itu server dan bagaimana cara kerjanya.',
                'urutan' => 9,
            ],
            [
                'course_id' => 1, // Backend Course
                'judul' => 'HTTP & APIs Basics',
                'content' => 'Di sini, kita akan mempelajari bagaimana HTTP bekerja dan bagaimana cara membuat serta mengonsumsi API.',
                'urutan' => 10,
            ],
            [
                'course_id' => 1, // Backend Course
                'judul' => 'Database Management',
                'content' => 'Materi ini mengajarkan dasar-dasar pengelolaan database di backend, termasuk cara membuat dan mengelola database menggunakan SQL.',
                'urutan' => 11,
            ],
            [
                'course_id' => 2, // Frontend Course
                'judul' => 'Introduction to HTML',
                'content' => 'Materi ini akan mengajarkan dasar-dasar HTML, markup dasar untuk membuat halaman web.',
                'urutan' => 1,
            ],
            [
                'course_id' => 2, // Frontend Course
                'judul' => 'CSS Basics',
                'content' => 'Di sini kita akan belajar bagaimana membuat desain halaman web menggunakan CSS.',
                'urutan' => 2,
            ],
            [
                'course_id' => 2, // Frontend Course
                'judul' => 'Responsive Web Design',
                'content' => 'Materi ini mengajarkan cara membuat halaman web yang responsif, yang bisa tampil dengan baik di berbagai perangkat.',
                'urutan' => 3,
            ],
            [
                'course_id' => 2, // Frontend Course
                'judul' => 'Responsive Web Design',
                'content' => 'Materi ini mengajarkan cara membuat halaman web yang responsif, yang bisa tampil dengan baik di berbagai perangkat.',
                'urutan' => 4,
            ],
            [
                'course_id' => 2, // Frontend Course
                'judul' => 'Responsive Web Design',
                'content' => 'Materi ini mengajarkan cara membuat halaman web yang responsif, yang bisa tampil dengan baik di berbagai perangkat.',
                'urutan' => 5,
            ],
        ]);
    }
}
