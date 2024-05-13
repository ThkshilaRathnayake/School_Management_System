<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    //Student Login Function
    public function StudentDashboard(){
        return view('student.studentDashboard');
    }
}
