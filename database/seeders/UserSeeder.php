<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Manager
        User::create([
            'name' => 'Manager User',
            'email' => 'manager@example.com',
            'password' => Hash::make('password'),
            'role' => 'manager',
        ]);

        // Anggota 1
        User::create([
            'name' => 'Anggota 1',
            'email' => 'anggota1@example.com',
            'password' => Hash::make('password'),
            'role' => 'anggota',
        ]);

    }
}