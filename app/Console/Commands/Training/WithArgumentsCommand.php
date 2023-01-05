<?php

namespace App\Console\Commands\Training;

use Illuminate\Console\Command;

class WithArgumentsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'training:witharguments {name} {email?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is an laravel command example using arguments. You can add a "name" and "email" (optional) arguments. Example "php artisan training:witharguments Username usermail@mail.com".';

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
        $name = $this->argument('name');
        $email = $this->argument('email');
        $this->info("Setted argument name: ".$name." and setted argument email: ".$email);
    }
}
