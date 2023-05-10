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
            'name' => "SODJINOU Amour",
            'email' =>"amour@vdriver.com",
            'email_verified_at' => now(),
            'password' => "00000000", // password
            'remember_token' => "1234567",
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
