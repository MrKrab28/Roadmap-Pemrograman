<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use App\Models\Course;
use App\Models\Materi;
use App\Models\Jawaban;
use Illuminate\Database\Seeder;
use Database\Seeders\QuisSeeder;
use Database\Seeders\ModulSeeder;
use Database\Seeders\CourseSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\JawbanSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Admin::create([
            'nama' => 'admin',
            'email' => 'admin@mail',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'nama' => 'Test User',
            'email' => 'user@mail',
            'password' => bcrypt('123'),
        ]);
        User::factory(17)->create();
        $this->call([
            CategorySeeder::class,
            CourseSeeder::class,
            ModulSeeder::class,
            QuisSeeder::class,
           JawbanSeeder::class,
           RoadmapSeeder::class,
           NodeSeeder::class,
           ConnectionSeeder::class,
            // CompletionSeeder::class
        ]);
    }
}
