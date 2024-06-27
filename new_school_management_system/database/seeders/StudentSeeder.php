<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $studentRegisterId = DB::table('registers')->where('userEmail', 'student@gmail.com')->first()->id;

        DB::table('students')->insert([
            [
                'register_id' => $studentRegisterId,
                'fullName' => 'Student User',
                'DOB' => '1999-01-01',
                'gender' => 'Male',
                'grade' => '13',
                'studentID' => 'A003',
                'activities' => json_encode(['Sports']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
