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

                ['source' => 'CategoryBE', 'target' => 'PHP', 'roadmap_id' => 1],
                ['source' => 'CategoryBE', 'target' => 'LVL', 'roadmap_id' => 1],


                ['source' => 'PHP', 'target' => 'php1', 'roadmap_id' => 1],
                ['source' => 'php1', 'target' => 'php1-1', 'roadmap_id' => 1],
                ['source' => 'php1', 'target' => 'php1-2', 'roadmap_id' => 1],
                ['source' => 'php1', 'target' => 'php1-3', 'roadmap_id' => 1],
                ['source' => 'php1', 'target' => 'php1-4', 'roadmap_id' => 1],







                ['source' => 'php1-1', 'target' => 'php2', 'roadmap_id' => 1],
                ['source' => 'php2', 'target' => 'php2-1', 'roadmap_id' => 1],
                ['source' => 'php2', 'target' => 'php2-2', 'roadmap_id' => 1],
                ['source' => 'php2', 'target' => 'php2-3', 'roadmap_id' => 1],
                ['source' => 'php2', 'target' => 'php2-4', 'roadmap_id' => 1],
                ['source' => 'php2', 'target' => 'php2-5', 'roadmap_id' => 1],





                ['source' => 'php2-1', 'target' => 'php3', 'roadmap_id' => 1],
                ['source' => 'php3', 'target' => 'php3-1', 'roadmap_id' => 1],
                ['source' => 'php3', 'target' => 'php3-2', 'roadmap_id' => 1],
                ['source' => 'php3', 'target' => 'php3-3', 'roadmap_id' => 1],
                ['source' => 'php3', 'target' => 'php3-4', 'roadmap_id' => 1],






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








                ['source' => 'CategoryFE', 'target' => 'HTML', 'roadmap_id' => 2],
                ['source' => 'CategoryFE', 'target' => 'CSS', 'roadmap_id' => 2],
                ['source' => 'CategoryFE', 'target' => 'JS', 'roadmap_id' => 2],





                ['source' => 'HTML', 'target' => 'html1', 'roadmap_id' => 2],


                ['source' => 'html1', 'target' => 'html1-1', 'roadmap_id' => 2],
                ['source' => 'html1', 'target' => 'html1-2', 'roadmap_id' => 2],
                ['source' => 'html1', 'target' => 'html1-3', 'roadmap_id' => 2],


                ['source' => 'html1-1', 'target' => 'html2', 'roadmap_id' => 2],
                ['source' => 'html2', 'target' => 'html2-1', 'roadmap_id' => 2],
                ['source' => 'html2', 'target' => 'html2-2', 'roadmap_id' => 2],
                ['source' => 'html2', 'target' => 'html2-3', 'roadmap_id' => 2],
                ['source' => 'html2', 'target' => 'html2-4', 'roadmap_id' => 2],


                ['source' => 'html1-1', 'target' => 'html3', 'roadmap_id' => 2],
                ['source' => 'html3', 'target' => 'html3-1', 'roadmap_id' => 2],
                ['source' => 'html3', 'target' => 'html3-2', 'roadmap_id' => 2],
                ['source' => 'html3', 'target' => 'html3-3', 'roadmap_id' => 2],




                ['source' => 'CSS', 'target' => 'css1', 'roadmap_id' => 2],

                ['source' => 'css1', 'target' => 'css1-1', 'roadmap_id' => 2],
                ['source' => 'css1', 'target' => 'css1-2', 'roadmap_id' => 2],
                ['source' => 'css1', 'target' => 'css1-3', 'roadmap_id' => 2],



                ['source' => 'css1-3', 'target' => 'css2', 'roadmap_id' => 2],

                ['source' => 'css2', 'target' => 'css2-1', 'roadmap_id' => 2],
                ['source' => 'css2', 'target' => 'css2-2', 'roadmap_id' => 2],
                ['source' => 'css2', 'target' => 'css2-3', 'roadmap_id' => 2],
                ['source' => 'css2', 'target' => 'css2-4', 'roadmap_id' => 2],



                ['source' => 'css1-3', 'target' => 'css3', 'roadmap_id' => 2],

                ['source' => 'css3', 'target' => 'css3-1', 'roadmap_id' => 2],
                ['source' => 'css3', 'target' => 'css3-2', 'roadmap_id' => 2],
                ['source' => 'css3', 'target' => 'css3-3', 'roadmap_id' => 2],
                ['source' => 'css3', 'target' => 'css3-4', 'roadmap_id' => 2],



                ['source' => 'JS', 'target' => 'js1', 'roadmap_id' => 2],

                ['source' => 'js1', 'target' => 'js1-1', 'roadmap_id' => 2],
                ['source' => 'js1', 'target' => 'js1-2', 'roadmap_id' => 2],
                ['source' => 'js1', 'target' => 'js1-3', 'roadmap_id' => 2],


                ['source' => 'js1-3', 'target' => 'js2', 'roadmap_id' => 2],
                ['source' => 'js2', 'target' => 'js2-1', 'roadmap_id' => 2],
                ['source' => 'js2', 'target' => 'js2-2', 'roadmap_id' => 2],
                ['source' => 'js2', 'target' => 'js2-3', 'roadmap_id' => 2],










                ['source' => 'CategoryFS', 'target' => 'LVL', 'roadmap_id' => 3 ],


                ['source' => 'LVL', 'target' => 'lvl1', 'roadmap_id' => 3 ],
                ['source' => 'lvl1', 'target' => 'lvl1-1', 'roadmap_id' => 3 ],
                ['source' => 'lvl1', 'target' => 'lvl1-2', 'roadmap_id' => 3 ],



                ]
        );
    }
}
