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

                ['source' => 'Category', 'target' => 'PHP', 'roadmap_id' => 1],
                ['source' => 'Category', 'target' => 'LVL', 'roadmap_id' => 1],


                ['source' => 'PHP', 'target' => 'php1', 'roadmap_id' => 1],
                ['source' => 'php1', 'target' => 'php1-1', 'roadmap_id' => 1],
                ['source' => 'php1', 'target' => 'php1-2', 'roadmap_id' => 1],
                ['source' => 'php1', 'target' => 'php1-3', 'roadmap_id' => 1],
                // ['source' => 'php1', 'target' => 'php1-4', 'roadmap_id' => 1],


                ['source' => 'php1-1', 'target' => 'php1-4', 'roadmap_id' => 1],
                ['source' => 'php1-2', 'target' => 'php1-4', 'roadmap_id' => 1],
                ['source' => 'php1-3', 'target' => 'php1-4', 'roadmap_id' => 1],




                ['source' => 'php1-4', 'target' => 'php2', 'roadmap_id' => 1],
                ['source' => 'php2', 'target' => 'php2-1', 'roadmap_id' => 1],
                ['source' => 'php2', 'target' => 'php2-2', 'roadmap_id' => 1],
                ['source' => 'php2', 'target' => 'php2-3', 'roadmap_id' => 1],
                // ['source' => 'php2', 'target' => 'php2-4', 'roadmap_id' => 1],
                ['source' => 'php2', 'target' => 'php2-5', 'roadmap_id' => 1],


                ['source' => 'php2-1', 'target' => 'php2-4', 'roadmap_id' => 1],
                ['source' => 'php2-2', 'target' => 'php2-4', 'roadmap_id' => 1],
                ['source' => 'php2-3', 'target' => 'php2-4', 'roadmap_id' => 1],
                ['source' => 'php2-5', 'target' => 'php2-4', 'roadmap_id' => 1],



                ['source' => 'php2-4', 'target' => 'php3', 'roadmap_id' => 1],
                ['source' => 'php3', 'target' => 'php3-1', 'roadmap_id' => 1],
                ['source' => 'php3', 'target' => 'php3-2', 'roadmap_id' => 1],
                ['source' => 'php3', 'target' => 'php3-3', 'roadmap_id' => 1],
                // ['source' => 'php3', 'target' => 'php3-4', 'roadmap_id' => 1],


                ['source' => 'php3-1', 'target' => 'php3-4', 'roadmap_id' => 1],
                ['source' => 'php3-2', 'target' => 'php3-4', 'roadmap_id' => 1],
                ['source' => 'php3-3', 'target' => 'php3-4', 'roadmap_id' => 1],



                ['source' => 'php3-4', 'target' => 'php4', 'roadmap_id' => 1],
                ['source' => 'php4', 'target' => 'php4-1', 'roadmap_id' => 1],
                ['source' => 'php4', 'target' => 'php4-2', 'roadmap_id' => 1],
                // ['source' => 'php4', 'target' => 'php4-3', 'roadmap_id' => 1],


                ['source' => 'php4-1', 'target' => 'php4-3', 'roadmap_id' => 1],
                ['source' => 'php4-2', 'target' => 'php4-3', 'roadmap_id' => 1],


                ['source' => 'php4-3', 'target' => 'php5', 'roadmap_id' => 1],
                ['source' => 'php5', 'target' => 'php5-1', 'roadmap_id' => 1],
                ['source' => 'php5', 'target' => 'php5-2', 'roadmap_id' => 1],
                ['source' => 'php5', 'target' => 'php5-3', 'roadmap_id' => 1],

            ]
        );
    }
}
