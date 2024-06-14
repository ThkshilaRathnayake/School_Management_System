<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Register;

class TeacherController extends Controller
{
    //Teacher Login Function
    public function TeacherDashboard(){
        return view('teacher.index');
    }

    //Teacher Personal Details Form Function
    public function TeacherForm($register_id){
        $register = Register::findOrFail($register_id);
        return view('registration.teacherForm', compact('register_id'));
    }

    //Teacher Personal Details Store Function
    public function PersonalDetailsStore(Request $request){
        $request->validate([
            'register_id' => 'required|exists:registers,id',
            'fullName' => 'required|string|max:255',
            'DOB' => 'required|date',
            'gender' => 'required|string|in:Male,Female,Other',
            'subject' => 'required|string',
            'NICnumber' => 'required|string|max:255|unique:teachers',
            'employeeID' => 'required|string|max:255|unique:teachers',
            'experience' => 'required|string',
            'qualifications' => 'required|string',
        ]);

        $teacher = new Teacher();
        $teacher->register_id = $request->register_id;
        $teacher->fullName = $request->fullName;
        $teacher->DOB = $request->DOB;
        $teacher->gender = $request->gender;
        $teacher->subject = $request->subject;
        $teacher->NICnumber = $request->NICnumber;
        $teacher->employeeID = $request->employeeID;
        $teacher->experience = $request->experience;
        $teacher->qualifications = $request->qualifications;
        $teacher->save();

        return redirect()->route('welcome');
    }

}
