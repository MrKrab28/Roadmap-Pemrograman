<?php

namespace Database\Seeders;

use App\Models\Quis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quis::insert([
            ['course_id' => 1, 'pertanyaan' => 'Apa kepanjangan dari PHP?'],
            ['course_id' => 1, 'pertanyaan' => 'Siapa pencipta awal dari bahasa PHP?'],
            ['course_id' => 1, 'pertanyaan' => 'PHP termasuk bahasa pemrograman sisi...?'],
            ['course_id' => 1, 'pertanyaan' => 'Apa fungsi utama PHP dalam pengembangan web?'],
            ['course_id' => 1, 'pertanyaan' => 'Di bawah ini yang termasuk web server untuk menjalankan PHP lokal adalah?'],



            ['course_id' => 2, 'pertanyaan' => 'Apa kepanjangan dari HTML?'],
            ['course_id' => 2, 'pertanyaan' => 'HTML digunakan untuk...?'],
            ['course_id' => 2, 'pertanyaan' => 'Tag <head> biasanya berisi...?'],
            ['course_id' => 2, 'pertanyaan' => 'Tag yang digunakan untuk membuat paragraf adalah...?'],
            ['course_id' => 2, 'pertanyaan' => 'Struktur dasar HTML dimulai dengan...?'],

        ]);
    }
}
