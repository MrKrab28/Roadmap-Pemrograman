<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use Illuminate\Database\Seeder;

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
    }
}
