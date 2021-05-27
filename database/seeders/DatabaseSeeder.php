<?php

namespace Database\Seeders;

use Canvas\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        User::create([
            'id' => Str::uuid(),
            'name' => 'Lars Wiegers',
            'email' => env('DEFAULT_USER_EMAIL'),
            'password' => Hash::make(env('DEFAULT_USER_PASSWORD')),
        ]);
    }
}
