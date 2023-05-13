<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user = User::create([
            'name' => "Toundji",
            'email' =>"toundji@vdriver.com",
            'role' =>"super admin",
            'email_verified_at' => now(),
            'password' => "123456789", // password
            'remember_token' => "1234567",
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
