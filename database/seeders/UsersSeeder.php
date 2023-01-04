<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $root = User::firstOrCreate([
            "email" => "buaplaraveltrainingroot@yopmail.com"
        ],[
            "name" => "Epsom Segura",
            "email" => "buaplaraveltrainingroot@yopmail.com",
            "email_verified_at" => Carbon::now(),
            "password" => Hash::make("@1234567890$")
        ]);

        $root->assignRole(Role::ROOT);

        $guest = User::firstOrCreate([
            "email" => "buaplaraveltrainintguest1@yopmail.com"
        ],[
            "name" => "BLT Guest One",
            "email" => "buaplaraveltrainintguest1@yopmail.com",
            "email_verified_at" => Carbon::now(),
            "password" => Hash::make("@1234567890$")
        ]);

        $root->assignRole(Role::GUEST);
    }
}
