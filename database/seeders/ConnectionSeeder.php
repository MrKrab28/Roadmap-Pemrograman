<?php

namespace Database\Seeders;

use App\Models\Roadmap;
use Illuminate\Database\Seeder;
use App\Models\RoadmapConnection;

class ConnectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoadmapConnection::insert(
            [

                ['source' => '1_php', 'target' => 'php1', 'roadmap_id' => 1],
                ['source' => '1_php', 'target' => 'php2', 'roadmap_id' => 1],
                ['source' => '1_php', 'target' => 'php3', 'roadmap_id' => 1],
                ['source' => '1_php', 'target' => 'php4', 'roadmap_id' => 1],
                ['source' => '1_php', 'target' => 'php5', 'roadmap_id' => 1],
                ['source' => '1_php', 'target' => 'php6', 'roadmap_id' => 1],
                ['source' => '1_php', 'target' => 'php7', 'roadmap_id' => 1],

            ]
        );
    }
}
