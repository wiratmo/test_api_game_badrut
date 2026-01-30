<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'player1',
            'password' => Hash::make('helloworld1!'),
        ]);

        User::create([
            'username' => 'player2',
            'password' => Hash::make('helloworld2!'),
        ]);

        User::create([
            'username' => 'player3',
            'password' => Hash::make('helloworld3!'),
        ]);

        User::create([
            'username' => 'player4',
            'password' => Hash::make('helloworld4!'),
        ]);

        User::create([
            'username' => 'player5',
            'password' => Hash::make('helloworld5!'),
        ]);

        User::create([
            'username' => 'player6',
            'password' => Hash::make('helloworld6!'),
        ]);

        User::create([
            'username' => 'dev1',
            'password' => Hash::make('hellobyte1!'),
        ]);

        User::create([
            'username' => 'dev2',
            'password' => Hash::make('hellobyte2!'),
        ]);
    }
}
