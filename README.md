# Laravel training
This is a training project to introduce software developers into Laravel framework. This contains the basic usage and coding best practices implementation.

## System requirements
- PHP 8.1+
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
    > - Execute command ***php artisan migrate:fresh --seed***
    > - Execute command ***npm -i***
    > - Execute command ***npm run dev***

4. **Local deploy:** Deploy the project following the next steps:

    > - Execute command ***php artisan serve***
    > - Open localhost URL [http://localhost:8000](http://localhost:8000)

 ## Training topics
 ### Commands

 ### Tinker


 
 ## Author
>
>  Epsom Enrique Segura Jaramillo
> 
> <segurajaramilloepsom@gmail.com>
>
> <https://www.linkedin.com/in/epsomsegura/>


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