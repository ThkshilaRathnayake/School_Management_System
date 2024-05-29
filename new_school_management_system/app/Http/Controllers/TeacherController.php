<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    //Teacher Login Function
    public function TeacherDashboard(){
        return view('teacher.index');
    }

    //Teacher->Course->Materials Function
    public function CourseMaterials(){
        return view('teacher.course.material');
    }

    //Teacher->Course->Assignments Function
    public function Assignments(){
        return view('teacher.course.assignment');
    }

    //Teacher->Course->Attendance Function
    public function Attendance(){
        return view('teacher.course.attendance');
    }
}
