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
            'email' => 'larswiegers@live.nl',
            'password' => Hash::make('6XyonQ5Is*VY9zW%w#dkMQt7'),
        ]);
    }
}
