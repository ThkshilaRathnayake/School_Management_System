<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRegisterId = DB::table('registers')->where('userEmail', 'admin@gmail.com')->first()->id;

        DB::table('admins')->insert([
            [
                'register_id' => $adminRegisterId,
                'fullName' => 'Admin User',
                'DOB' => '1980-01-01',
                'gender' => 'Male',
                'NICnumber' => '123456789V',
                'employeeID' => 'A001',
                'experience' => '20-30',
                'qualifications' => 'MBA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
