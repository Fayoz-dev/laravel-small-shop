<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

            'name' => 'admin',
             'role_id'=>User::ROLE_ADMIN,
            'email' => 'admin@admin.com',
            'phone' => '+998991234567',
            'password' => Hash::make('secret123'),

        ]);

        User::create([

            'name' => 'operator',
            'role_id'=>User::ROLE_OPERATOR,
            'email' => 'managern@admin.com',
            'phone' => '+998991234568',
            'password' => Hash::make('secret123'),

        ]);


        User::create([

            'name' => 'user',
             'role_id' => User::ROLE_USER,
            'email' => 'user@admin.com',
            'phone' => '+998991234569',
            'password' => Hash::make('secret123'),

        ]);


    }
}
