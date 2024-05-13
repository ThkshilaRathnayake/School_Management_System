<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    //Teacher Login Function
    public function TeacherDashboard(){
        return view('teacher.teacherdashboard');
    }
}
