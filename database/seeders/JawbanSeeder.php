<?php

namespace Database\Seeders;

use App\Models\Jawaban;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JawbanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jawaban::insert([
            ['quis_id' => 1, 'jawaban' => 'Personal Home Page', 'status' => 'benar', 'opsi' => 'A'],
            ['quis_id' => 1, 'jawaban' => 'PHP Hyper Module', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 1, 'jawaban' => 'Program Hosting Protocol', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 1, 'jawaban' => 'Private Home Process', 'status' => 'salah', 'opsi' => 'D'],


            ['quis_id' => 2, 'jawaban' => 'Guido van Rossum', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 2, 'jawaban' => 'Dennis Ritchie', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 2, 'jawaban' => 'Rasmus Lerdorf', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 2, 'jawaban' => 'Brendan Eich', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 3, 'jawaban' => 'Client-side', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 3, 'jawaban' => 'Database-side', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 3, 'jawaban' => 'Server-side', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 3, 'jawaban' => 'User-side', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 4, 'jawaban' => 'Mengelola tampilan web', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 4, 'jawaban' => 'Menjalankan aplikasi mobile', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 4, 'jawaban' => 'Menangani logika backend dan database', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 4, 'jawaban' => 'Memformat teks', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 5, 'jawaban' => 'Adobe Dreamweaver', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 5, 'jawaban' => 'WordPress', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 5, 'jawaban' => 'XAMPP', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 5, 'jawaban' => 'Notepad++', 'status' => 'salah', 'opsi' => 'D'],








            ['quis_id' => 6, 'jawaban' => 'HyperTool Markup Language', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 6, 'jawaban' => 'HyperText Markup Language', 'status' => 'benar', 'opsi' => 'B'],
            ['quis_id' => 6, 'jawaban' => 'HyperTransfer Main Language', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 6, 'jawaban' => 'HighText Markdown Language', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 7, 'jawaban' => 'Membuat logika backend', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 7, 'jawaban' => 'Membuat desain grafis', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 7, 'jawaban' => 'Membuat struktur halaman web', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 7, 'jawaban' => 'Mengatur warna CSS', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 8, 'jawaban' => 'Konten utama web', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 8, 'jawaban' => 'Form dan input', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 8, 'jawaban' => 'Judul, meta, link CSS, script', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 8, 'jawaban' => 'Tabel dan gambar', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 9, 'jawaban' => '<div>', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 9, 'jawaban' => '<p>', 'status' => 'benar', 'opsi' => 'B'],
            ['quis_id' => 9, 'jawaban' => '<h1>', 'status' => 'salah', 'opsi' => 'C'],
            ['quis_id' => 9, 'jawaban' => '<br>', 'status' => 'salah', 'opsi' => 'D'],

            ['quis_id' => 10, 'jawaban' => '<html>', 'status' => 'salah', 'opsi' => 'A'],
            ['quis_id' => 10, 'jawaban' => '<head>', 'status' => 'salah', 'opsi' => 'B'],
            ['quis_id' => 10, 'jawaban' => '<!DOCTYPE html>', 'status' => 'benar', 'opsi' => 'C'],
            ['quis_id' => 10, 'jawaban' => '<body>', 'status' => 'salah', 'opsi' => 'D'],

        ]);
    }
}
