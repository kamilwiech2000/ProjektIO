<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::upsert(
            [[
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456')

        ],
        [
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('123456')

        ],],
        'name'

        );

    }
}
