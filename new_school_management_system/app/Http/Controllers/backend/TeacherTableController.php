<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Models\TeacherTable;
use App\Models\AcceptedTeacher;
//use Illuminate\Support\Facades\Auth;
use App\Models\DeletedTeacher;

class TeacherTableController extends Controller
{
    // Admin->View Teacher List 
    public function TeacherList(){
        $teachers = AcceptedTeacher::latest()->get();
        return view('admin.content.teacher.teacherList', compact('teachers'));
    }

    // Admin->Delete Teacher Data 
    public function TeacherDelete($id)
    {
        // Find the Teacher by ID
        $teachers = AcceptedTeacher::findOrFail($id);

        // Store the Teacher data in the Deleted Teacher table
        DeletedTeacher::create([
            'fullName' => $teachers->fullName,
            'DOB' => $teachers->DOB,
            'gender' => $teachers->gender,
            'subject' => $teachers->subject,
            'NICnumber' => $teachers->NICnumber,
            'employeeID' => $teachers->employeeID,
            'experience' => $teachers->experience,
            'qualifications' => $teachers->qualifications,
        ]);

        // Delete the Teacher from the original table
        $teachers->delete();

        // Redirect back to the Teacher list.
        return redirect()->route('admin.teacherList');
    }

    // Admin->View Teacher Data
    public function DeletedTeacher()
    {
        //Retrieve records from the Deleted Teacher Table
        $deletedTeacher = DeletedTeacher::latest()->get();

        //View Delered Teacher List
        return view('admin.content.history.deletedTeachers', compact('deletedTeacher'));
    }

    // Admin->View Teacher Profile Form 
    public function TeacherProfile($id)
    {
        // Find the Teacher by ID
        $teachers = AcceptedTeacher::findOrFail($id);

        // Redirect to the Course Update page
        return view('admin.content.teacher.teacherProfile', compact('teachers'));
    }

    public function DeletedTeacherProfile($id)
    {
        // Find the Teacher by ID
        $teachers = DeletedTeacher::findOrFail($id);

        // Redirect to the Course Update page
        return view('admin.content.teacher.teacherProfile', compact('teachers'));
    }

    // Admin->View Update Teacher Form 
    public function EditTeacherProfile($id){
        // Find the course by ID
        $teachers = AcceptedTeacher::findOrFail($id);

        // Redirect to the Course Update page
        return view('admin.content.teacher.teacherProfileEdit', compact('teachers'));
    }

    public function UpdateTeacherProfile(Request $request, $id){
        // Validation
        $request->validate([
            //'fullName' => 'required',
            //'DOB' => 'required',
            //'gender' => 'required',
            'subject' => 'required',
            //'NICnumber' => 'required',
            //'employeeID' => 'required',
            'experience' => 'required',
            'qualifications' => 'required',
            'note' => 'required',
        ]);

        // Find the course by ID
        $teachers = AcceptedTeacher::findOrFail($id);
        
        // Update the course record
        $teachers->update($request->only(['subject', 'experience', 'qualifications', 'note']));

        // Redirect to the course list page
        return redirect()->route('admin.teacherList');
    }
}
