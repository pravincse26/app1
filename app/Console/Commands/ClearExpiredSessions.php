<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearExpiredSessions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'session:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        DB::table('session')->truncate();
        $this->info('Table emptied successfully.');
    }
}
