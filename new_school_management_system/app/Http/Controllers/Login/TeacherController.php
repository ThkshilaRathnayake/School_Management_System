<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    //Teacher Login Function
    public function TeacherDashboard(){
        return view('teacher.index');
    }

    //Teacher Personal Details Form Function
    public function TeacherForm(){
        return view('registration.teacherForm');
    }

    //Teacher Personal Details Store Function
    public function PersonalDetailsStore(Request $request){
        $request->validate([
            'fullName' => 'required|string|max:255',
            'DOB' => 'required|date',
            'gender' => 'required|string|in:Male,Female,Other',
            'NICnumber' => 'required|string|max:255|unique:teachers',
            'employeeID' => 'required|string|max:255|unique:teachers',
            'experience' => 'required|string',
            'qualifications' => 'required|string',
        ]);

        $teacher = new Teacher();
        $teacher->fullName = $request->fullName;
        $teacher->DOB = $request->DOB;
        $teacher->gender = $request->gender;
        $teacher->NICnumber = $request->NICnumber;
        $teacher->employeeID = $request->employeeID;
        $teacher->experience = $request->experience;
        $teacher->qualifications = $request->qualifications;
        $teacher->save();

        return redirect()->route('welcome');
    }

}
