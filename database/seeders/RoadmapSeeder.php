<?php

namespace Database\Seeders;

use App\Models\Roadmap;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoadmapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Roadmap::insert(
            [
                ['category_id' => 1],
                ['category_id' => 2],
                ['category_id' => 3],

            ]
        );
    }
}
