<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //Teacher Personal Details Form Function
    public function TeacherForm(){
        return view('registration.teacherForm');
    }
}
