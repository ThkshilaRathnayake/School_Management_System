<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('registers')->insert([
            [
                'userName' => 'Admin User',
                'userEmail' => 'admin@gmail.com',
                'userPassword' => Hash::make('123654789'),
                'role' => 'Admin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'userName' => 'Teacher User',
                'userEmail' => 'teacher@gmail.com',
                'userPassword' => Hash::make('123654789'),
                'role' => 'Teacher',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'userName' => 'Student User',
                'userEmail' => 'student@gmail.com',
                'userPassword' => Hash::make('123654789'),
                'role' => 'Student',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
