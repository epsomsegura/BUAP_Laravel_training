<?php

namespace App\Console\Commands\Training;

use Illuminate\Console\Command;

class HelloWorldCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'training:helloworld';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is my first Laravel command';

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
     * @return int
     */
    public function handle()
    {
        $this->info("Successfully executed");
    }
}
