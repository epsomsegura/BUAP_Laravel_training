# BUAP Laravel training

## System requirements
- PHP 8.1+
- Composer 2+
- Node JS 16+
- NPM 8+
- PostgreSQL 12+

## Installation
1. Clone the project from Github repository [https://github.com/epsomsegura/BUAP_Laravel_training.git](https://github.com/epsomsegura/BUAP_Laravel_training.git)

2. Create a new database into postgres, this should be called ***buap_laravel_training***. Then, save the database name, user, password, host and port to configure ***.env*** file after database creation.

3. Go to BUAP_Laravel_training directory (recently cloned) and configure it using these commands:
    
    > - Copy ***.env.example*** file to ***.env*** file and configure all needed variables
    > - Execute command ***composer install*** 
    > - Execute command ***php artisan key:generate***
    > - Execute command ***php artisan storage:link***
    > - Execute command ***php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"***
    > - Execute command ***php artisan migrate:fresh --seed***
    > - Execute command ***npm -i***
    > - Execute command ***npm run dev***


