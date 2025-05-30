<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Enums\Role;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'     => 'Hala Hasan',
            'email'    => 'hala.hasan.hh399@gmail.com',
            'password' => Hash::make('password123'),
            'role'     => Role::ADMIN
        ]);

        User::create([
            'name'     => 'Eminem',
            'email'    => 'eminem@gmail.com',
            'password' => Hash::make('12345678'),
            'role'     => Role::USER
        ]);

        User::create([
            'name'     => 'Luca Modric',
            'email'    => 'luca.modric@gmail.com',
            'password' => Hash::make('password123'),
            'role'     => Role::USER
        ]);

        User::create([
            'name'     => 'Sergio Ramos',
            'email'    => 'sergio.ramos@gmail.com',
            'password' => Hash::make('password123'),
            'role'     => Role::USER
        ]);

        User::create([
            'name'     => 'Messi',
            'email'    => 'messi@gmail.com',
            'password' => Hash::make('password123'),
            'role'     => Role::USER
        ]);
    }
}
