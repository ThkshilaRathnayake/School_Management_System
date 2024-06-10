<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AcceptedStudent;
use App\Models\DeletedStudent;

class StudentTableController extends Controller
{
    // Admin->View Student List 
    public function StudentList(){
        $students = AcceptedStudent::latest()->get();
        return view('admin.content.student.studentList', compact('students'));
    }

    // Admin->Delete Student Data 
    public function StudentDelete($id)
    {
        // Find the Student by ID
        $students = AcceptedStudent::findOrFail($id);

        // Store the Student data in the Deleted Student table
        DeletedStudent::create([
            'fullName' => $students->fullName,
            'DOB' => $students->DOB,
            'gender' => $students->gender,
            'grade' => $students->grade,
            'studentID' => $students->studentID,
            'activities' => $students->activities,
        ]);

        // Delete the Student from the original table
        $students->delete();

        // Redirect back to the Student list.
        return redirect()->route('admin.studentList');
    }

    // Admin->View Student Data
    public function DeletedStudent()
    {
        //Retrieve records from the Deleted Student Table
        $deletedStudent = DeletedStudent::latest()->get();

        //View Delered Student List
        return view('admin.content.history.deletedStudents', compact('deletedStudent'));
    }

    // Admin->View Student Profile Form 
    public function StudentProfile($id)
    {
        // Find the Student by ID
        $students = AcceptedStudent::findOrFail($id);

        // Redirect to the Student Update page
        return view('admin.content.student.studentProfile', compact('students'));
    }

    public function DeletedStudentProfile($id)
    {
        // Find the Student by ID
        $students = DeletedStudent::findOrFail($id);

        // Redirect to the Student Update page
        return view('admin.content.student.studentProfile', compact('students'));
    }

    // Admin->View Update Student Form 
    public function EditStudentProfile($id){
        // Find the Student by ID
        $students = AcceptedStudent::findOrFail($id);

        // Redirect to the Student Update page
        return view('admin.content.student.studentProfileEdit', compact('students'));
    }

    public function UpdateStudentProfile(Request $request, $id){
        // Validation
        $request->validate([
            'grade' => 'required',
            'activities' => 'required',
            'note' => 'required',
        ]);

        // Find the Student by ID
        $students = AcceptedStudent::findOrFail($id);
        
        // Update the Student record
        $students->update($request->only(['grade', 'activities', 'note']));

        // Redirect to the Student list page
        return redirect()->route('admin.studentList');
    }

    public function SearchDeletedStudents(Request $request)
    {
        $search = $request->input('search');
        
        $deletedStudent = DeletedStudent::when($search, function ($query, $search) {
            return $query->where('fullName', 'like', "%{$search}%")
                         ->orWhere('studentID', 'like', "%{$search}%")
                         ->orWhere('grade', 'like', "%{$search}%");
        })->get();

        return view('admin.content.history.deletedStudents', compact('deletedStudent'));
    }

    public function SearchStudentList(Request $request)
    {
        $search = $request->input('search');
        
        $students = AcceptedStudent::when($search, function ($query, $search) {
            return $query->where('fullName', 'like', "%{$search}%")
                         ->orWhere('studentID', 'like', "%{$search}%")
                         ->orWhere('grade', 'like', "%{$search}%");
        })->get();

        return view('admin.content.student.studentList', compact('students'));
    }

    

}
