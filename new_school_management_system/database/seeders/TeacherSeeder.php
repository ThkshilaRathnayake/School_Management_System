<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teacherRegisterId = DB::table('registers')->where('userEmail', 'teacher@gmail.com')->first()->id;

        DB::table('teachers')->insert([
            [
                'register_id' => $teacherRegisterId,
                'fullName' => 'Teacher User',
                'DOB' => '1981-01-01',
                'gender' => 'Male',
                'subject' => 'Mathematics',
                'NICnumber' => '987456321V',
                'employeeID' => 'A002',
                'experience' => '20-30',
                'qualifications' => 'MBA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
