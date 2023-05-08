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
            'email' =>"admin@vdriver.com",
            'email_verified_at' => now(),
            'password' => "123456789", // password
            'remember_token' => "1223456",
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
