<?php

namespace App\Console\Commands\Training;

use Illuminate\Console\Command;

class WithOptionsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'training:withoptions {--name=} {--email=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is an laravel command example using options. You can add --name and --email flags and add values. Example "php artisan training:withoptions --name=Username --email=usermail@mail.com".';

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
        $name = $this->option('name');
        $email = $this->option('email');
        $this->info("Setted option name: ".$name." and setted option email: ".$email);
        return 0;
    }
}
