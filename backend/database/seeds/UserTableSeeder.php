<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            "name" => "admin",
            "email" => "admin@example.com",
            "password" => bcrypt('password'),
            "remember_token" => null,
        ]);
    }
}
