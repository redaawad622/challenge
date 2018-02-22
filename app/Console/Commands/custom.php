<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class custom extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom:deletedDb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this command will delete all table in database every your';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

       /* DB::table('daily_report_mornings')->truncate();
        $this->info('all table are deleted successfully!');
        */

    }
}
