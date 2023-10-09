<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this line to import the DB facade

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com', // Fix the email address typo
                'password' => Hash::make('123'),
                'role' => 'admin',
                'status' => 'active',
            ],

            [
                'name' => 'Agent',
                'username' => 'agent',
                'email' => 'agent@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'agent',
                'status' => 'active',
            ],

            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'user',
                'status' => 'active',
            ],
        ]); // Add a semicolon here
    }
}
