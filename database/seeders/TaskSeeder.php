<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  
use Illuminate\Support\Str;         

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('task')->insert([  
            'title' => 'Basis data',
            'description' => Str::random(20),
            'deadline' => now()->addDays(7),
            'status' => 'pending',
        ]);
    }
}