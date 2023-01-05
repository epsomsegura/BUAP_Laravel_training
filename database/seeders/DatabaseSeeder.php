<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RolesPermissionsSeeder::class,
            UsersSeeder::class
        ]);

        $users = User::all();
        Task::factory(20)->create()->each(function($task) use ($users){
            $user = $users->random(1)->first();
            $user->tasks()->attach($task->id);
        });
    }
}
