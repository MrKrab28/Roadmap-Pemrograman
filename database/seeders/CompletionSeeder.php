<?php

namespace Database\Seeders;

use App\Models\CourseCompletion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompletionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CourseCompletion::insert([

                ['user_id' => 1, 'course_id' => 1, 'selesai'=> true, 'skor' => 80],
                ['user_id' => 1, 'course_id' => 3, 'selesai'=> true, 'skor' => 90],
                ['user_id' => 1, 'course_id' => 4, 'selesai'=> true, 'skor' => 70],
                ['user_id' => 1, 'course_id' => 5, 'selesai'=> true, 'skor' => 60],
                ['user_id' => 1, 'course_id' => 6, 'selesai'=> true, 'skor' => 80],
                ['user_id' => 1, 'course_id' => 2, 'selesai'=> true, 'skor' => 90],

        ]);
    }
}
