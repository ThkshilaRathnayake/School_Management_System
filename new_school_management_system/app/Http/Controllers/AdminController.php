<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Admin Login Function
    public function AdminDashboard(){
        ///return view('admin.adminDashboard');
        return view('admin.index');
    }

    //Admin->User Account->Create Function
    public function AccountCreate(){
        return view('admin.content.account.create');
    }

    //Admin->User Account->Update Function
    public function AccountUpdate(){
        return view('admin.content.account.update');
    }

    //Admin->User Account->Delete Function
    public function AccountDelete(){
        return view('admin.content.account.delete');
    }

    //Admin->Role Function
    public function Role(){
        return view('admin.content.role');
    }

    //Admin->Course->Create Function
    public function CourseCreate(){
        return view('admin.content.course.create');
    }

    //Admin->Course->Update Function
    public function CourseUpdate(){
        return view('admin.content.course.update');
    }

    //Admin->Course->Delete Function
    public function CourseDelete(){
        return view('admin.content.course.delete');
    }

    //Admin->Teachers
    public function Teachers(){
        return view('admin.content.teacher');
    }

    //Admin->Students
    public function Students(){
        return view('admin.content.student');
    }

}
