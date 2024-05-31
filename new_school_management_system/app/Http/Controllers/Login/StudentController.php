<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    //Student Login Function
    public function StudentDashboard(){
        return view('student.index');
    }

    //Student Personal Details Form View Function
    public function StudentForm(){
        return view('registration.studentForm');
    }

    //Student Personal Details Store Function
    public function PersonalDetailsStore(Request $request){
        $request->validate([
            'fullName' => 'required|string|max:255',
            'DOB' => 'required|date',
            'gender' => 'required|string|in:Male,Female,Other',
            'grade' => 'required|string',
            'studentID' => 'required|string|max:255|unique:students',
            'activities' => 'required|array',
            'activities.*' => 'string'
        ]);

        $student = new Student();
        $student->fullName = $request->fullName;
        $student->DOB = $request->DOB;
        $student->gender = $request->gender;
        $student->grade = $request->grade;
        $student->studentID = $request->studentID;
        $student->activities = json_encode($request->activities);
        $student->save();

        return redirect()->route('welcome');

    }
}
