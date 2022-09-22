<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ImportGuests extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'guests:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import guests from google sheets url';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        dd('test');
        return 0;
    }
}
