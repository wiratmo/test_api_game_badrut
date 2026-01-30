<?php

namespace Database\Seeders;

use App\Models\Administrator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Administrator::create([
            'username' => 'admin1',
            'password' => Hash::make('hellouniverse1!'),
        ]);

        Administrator::create([
            'username' => 'admin2',
            'password' => Hash::make('hellouniverse2!'),
        ]);

        Administrator::create([
            'username' => 'admin3',
            'password' => Hash::make('hellouniverse3!'),
        ]);

        Administrator::create([
            'username' => 'admin4',
            'password' => Hash::make('hellouniverse4!'),
        ]);
        Administrator::create([
            'username' => 'admin5',
            'password' => Hash::make('hellouniverse5!'),
        ]);
        Administrator::create([
            'username' => 'admin6',
            'password' => Hash::make('hellouniverse6!'),
        ]);
    }
}
