<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DeleteDataFromTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    protected $signature = 'delete:data {table}';
    protected $description = 'Delete all data from a specific table';
    /**
     * The console command description.
     *
     * @var string
     */

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $table = $this->argument('table');
        DB::table($table)->delete();
        $this->info('Data deleted from ' . $table);
    }
}
