<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    //Student Login Function
    public function StudentDashboard(){
        return view('student.index');
    }

    //Student->Course->Materials Function
    public function CourseMaterials(){
        return view('student.course.material');
    }

    //Student->Course->Assignments Function
    public function Assignments(){
        return view('student.course.assignment');
    }
}
