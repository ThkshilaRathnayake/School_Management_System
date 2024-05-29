<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //Student Personal Details Form Function
    public function StudentForm(){
        return view('registration.studentForm');
    }
}
