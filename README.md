# Laravel training
This is a training project to introduce software developers into Laravel framework. This contains the basic usage and coding best practices implementation using a **To do list** example.

## System requirements
- PHP 8.1+ with these extensions:
    - ctype , xml , mbstring , dom , curl , mysql , gd , BCMath, Fileinfo, JSON, Mbstring, OpenSSL, PDO, Tokenizer, Pgsql, Pdo_pgsql
- Composer 2+
- Node JS 16+
- NPM 8+
- PostgreSQL 12+

## Local Installation
1. **Get the project in local environment:** Clone the project from Github repository [https://github.com/epsomsegura/Laravel_training.git](https://github.com/epsomsegura/Laravel_training.git) and go to the cloned project directory root. Then, ***copy*** *.env.example* file to *.env* file for future configurations.

2. **Database configurations:** Create a new PostgeSQL database. This should be called ***laravel_training***. Then, set the host, port, database name, user and password values into ***.env*** file corresponding variables. This is a variables configuration example:

    > - DB_CONNECTION=**pgsql**
    > - DB_HOST=**127.0.0.1**
    > - DB_PORT=**5432**
    > - DB_DATABASE=**laravel_training**
    > - DB_USERNAME=*your postgresql user*
    > - DB_PASSWORD=*your postgresql user password*

3. **Project dependencies and configurations:** Install all dependendencies and configure the project settings following the next commands:
    
    > - Execute command ***composer install*** 
    > - Execute command ***php artisan key:generate***
    > - Execute command ***php artisan storage:link***
    > - Execute command ***php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"***
    > - Execute command ***php artisan vendor:publish --provider="Laravel\Tinker\TinkerServiceProvider"***
    > - Execute command ***php artisan migrate:fresh --seed***
    > - Execute command ***npm -i***
    > - Execute command ***npm run dev***

4. **Local deploy:** Deploy the project following the next steps:

    > - Execute command ***php artisan serve***
    > - Open localhost URL [http://localhost:8000](http://localhost:8000)

 ## Training topics
 ### Commands
You can create commands into Laravel framework and use when you require one of them. Let´s create your *Hello world laravel command* using this command:

> php artisan make:command Training/HelloWorldCommand

A new command called *HelloWorldCommand* was created into *App\Console\Commands\Training* directory. Then, you need to update two protected variables and update the *handle* method to test your first command.

> ``protected $signature = 'training:helloworld';``
> 
> \...
> 
> ``protected $description = 'This is my first Laravel command';``
>
> ...
>
> ``public function handle()``
>
> ``{``
>
>&emsp;``$this->info("Successfully executed");``
>
> ``}``

Then, if you execute the **php artisan list** command, you can see your new laravel command into artisan commands list.

Finally, to execute the new laravel command you should use artisan command and add the **signature** value setted into Command file. This is an example:

> php artisan training:helloworld

Otherwire, you can create laravel commands that contains arguments or options to pass *"parameters"* and execute specific tasks setting data manually. You can see each example exploring these files:

#### - **With commands**
Example file directory:

- App\Console\Commands\Training\WithArgumentsCommand.php

*Note: Optional arguments must be declared with '**?**' symbol after argument name (Example: {argument_name?}) into **protected $signature** variable value.* 

#### - **With options**
Example file directory:
- App\Console\Commands\Training\WithOptionsCommand.php

 ### Tinker
 This is an application that allows to interact with entire Laravel application on the command line, including Eloquent models, events and more. You can enter the Tinker environment executing this command:

 > - php artisan tinker 

 ## Author
>
> - Epsom Enrique Segura Jaramillo 
> - <segurajaramilloepsom@gmail.com>
> - <https://www.linkedin.com/in/epsomsegura/>

## References
- [Laravel Docs](https://laravel.com/docs/8.x)
- [Laravel Best Practices](https://github.com/alexeymezenin/laravel-best-practices)
- [Livewire Docs](https://laravel-livewire.com/docs/2.x/quickstart)
- [Spatie Laravel Permissions](https://spatie.be/docs/laravel-permission/v5/introduction)
- [PSR-2](https://www.php-fig.org/psr/psr-2/)
- [PSR-4](https://www.php-fig.org/psr/psr-4/)
- [PSR-11](https://www.php-fig.org/psr/psr-11/)
- [PSR-12](https://www.php-fig.org/psr/psr-12/)
- [Databases Best Practices](https://www.datanamic.com/support/database-normalization.html)