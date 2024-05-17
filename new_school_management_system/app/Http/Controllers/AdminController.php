<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Admin Login Function
    public function AdminDashboard(){
        return view('admin.index');
    }

    //Admin->User Account Function
    public function UserAccount(){
        return view('admin.content.account');
    }

    //Admin->Assign Role Function
    public function RoleAssign(){
        return view('admin.content.role');
    }

    //Admin->Courses Function
    public function CourseList(){
        return view('admin.content.course.courseList');
    }

    //Admin->Course Create Function
    public function CourseCreate(){
        return view('admin.content.course.courseCreate');
    }

    //Admin->Administrators Function
    public function AdministratorList(){
        return view('admin.content.Administrator');
    }

    //Admin->Teachers Function
    public function TeacherList(){
        return view('admin.content.teacher');
    }

    //Admin->Students Function
    public function StudentList(){
        return view('admin.content.student');
    }

    //Admin->Deleted Administrators Function
    public function DeletedAdministrator(){
        return view('admin.content.history.deletedAdministrator');
    }

    //Admin->Deleted Teachers Function
    public function DeletedTeacher(){
        return view('admin.content.history.deletedTeacher');
    }

    //Admin->Deleted Students Function
    public function DeletedStudent(){
        return view('admin.content.history.deletedStudent');
    }

    //Admin->Deleted Courses Function
    public function DeletedCourse(){
        return view('admin.content.history.deletedCourse');
    }

}
