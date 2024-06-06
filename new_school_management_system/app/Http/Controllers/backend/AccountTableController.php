<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use App\Models\Teacher;
use App\Models\Student;

use App\Models\AcceptedAdmin;
use App\Models\AcceptedTeacher;
use App\Models\AcceptedStudent;

use App\Models\DeletedNewAdmin;
use App\Models\DeletedNewTeacher;
use App\Models\DeletedNewStudent;

class AccountTableController extends Controller
{
    // Admin->View Admin List 
    public function AccountList(){
        // Fetch administrators excluding those already accepted
        $acceptedAdminIDs = AcceptedAdmin::pluck('employeeID')->toArray();
        $administrators = Admin::whereNotIn('employeeID', $acceptedAdminIDs)->latest()->get();
    
        // Fetch teachers excluding those already accepted
        $acceptedTeacherIDs = AcceptedTeacher::pluck('employeeID')->toArray();
        $teachers = Teacher::whereNotIn('employeeID', $acceptedTeacherIDs)->latest()->get();
    
        // Fetch students excluding those already accepted
        $acceptedStudentIDs = AcceptedStudent::pluck('studentID')->toArray();
        $students = Student::whereNotIn('studentID', $acceptedStudentIDs)->latest()->get();
    
        return view('admin.content.account.userAccount', compact('administrators', 'students', 'teachers'));
    }

    public function AdminStoreData(Request $request){
        // validation
        $request->validate([
            'fullName' => 'required',
            'DOB' => 'required',
            'gender' => 'required',
            'NICnumber' => 'nullable|unique:accepted_admins',
            'employeeID' => 'required|unique:accepted_admins',
            'experience' => 'required',
            'qualifications' => 'required',
        ]);

        // Retrieve the teacher record
        $admin = Admin::where('employeeID', $request->employeeID)->first();

        if ($admin) {
            // Store the course data in the Course List table
            AcceptedAdmin::create([
                'fullName' => $request->fullName,
                'DOB' => $request->DOB,
                'gender' => $request->gender,
                'NICnumber' => $request->NICnumber,
                'employeeID' => $request->employeeID,
                'experience' => $request->experience,
                'qualifications' => $request->qualifications,
            ]);

            // Delete the original record from the Teacher table
            $admin->delete();
        }

        // Redirect to the course create page
        return redirect()->route('admin.accountList');
    }


    public function TeacherStoreData(Request $request) {
        // validation
        $request->validate([
            'fullName' => 'required',
            'DOB' => 'required',
            'gender' => 'required',
            'subject' => 'required',
            'NICnumber' => 'nullable|unique:accepted_teachers',
            'employeeID' => 'required|unique:accepted_teachers',
            'experience' => 'required',
            'qualifications' => 'required',
        ]);
    
        // Retrieve the teacher record
        $teacher = Teacher::where('employeeID', $request->employeeID)->first();
    
        if ($teacher) {
            // Store the data in the AcceptedTeacher table
            AcceptedTeacher::create([
                'fullName' => $teacher->fullName,
                'DOB' => $teacher->DOB,
                'gender' => $teacher->gender,
                'subject' => $teacher->subject,
                'NICnumber' => $teacher->NICnumber,
                'employeeID' => $teacher->employeeID,
                'experience' => $teacher->experience,
                'qualifications' => $teacher->qualifications,
            ]);
    
            // Delete the original record from the Teacher table
            $teacher->delete();
        }
    
        // Redirect to the account list page
        return redirect()->route('admin.accountList');
    }
    

    public function StudentStoreData(Request $request){
        // validation
        $request->validate([
            'fullName' => 'required',
            'DOB' => 'required',
            'gender' => 'required',
            'grade' => 'required',
            'studentID' => 'required|unique:accepted_students',
            'activities' => 'required',
        ]);

        // Retrieve the teacher record
        $student = Student::where('studentID', $request->studentID)->first();

        if ($student) {
            // Store the course data in the Course List table
            AcceptedStudent::create([
                'fullName' => $request->fullName,
                'DOB' => $request->DOB,
                'gender' => $request->gender,
                'grade' => $request->grade,
                'studentID' => $request->studentID,
                'activities' => $request->activities,
            ]);

            // Delete the original record from the Teacher table
            $student->delete();
        }

        // Redirect to the course create page
        return redirect()->route('admin.accountList');
    }

    public function NewAdminDelete($id)
    {
        // Find the course by ID
        $administrators = Admin::findOrFail($id);

        // Store the course data in the Deleted Course table
        DeletedNewAdmin::create([
            'fullName' => $administrators->fullName,
            'DOB' => $administrators->DOB,
            'gender' => $administrators->gender,
            'NICnumber' => $administrators->NICnumber,
            'employeeID' => $administrators->employeeID,
            'experience' => $administrators->experience,
            'qualifications' => $administrators->qualifications,
        ]);

        // Delete the course from the original table
        $administrators->delete();

        // Redirect back to the course list.
        return redirect()->route('admin.accountList');
    }

    public function NewTeacherDelete($id)
    {
        // Find the course by ID
        $teachers = Teacher::findOrFail($id);

        // Store the course data in the Deleted Course table
        DeletedNewTeacher::create([
            'fullName' => $teachers->fullName,
            'DOB' => $teachers->DOB,
            'gender' => $teachers->gender,
            'subject' => $teachers->subject,
            'NICnumber' => $teachers->NICnumber,
            'employeeID' => $teachers->employeeID,
            'experience' => $teachers->experience,
            'qualifications' => $teachers->qualifications,
        ]);

        // Delete the course from the original table
        $teachers->delete();

        // Redirect back to the course list.
        return redirect()->route('admin.accountList');
    }

    public function NewStudentDelete($id)
    {
        // Find the course by ID
        $students = Student::findOrFail($id);

        // Store the course data in the Deleted Course table
        DeletedNewStudent::create([
            'fullName' => $students->fullName,
            'DOB' => $students->DOB,
            'gender' => $students->gender,
            'grade' => $students->grade,
            'studentID' => $students->studentID,
            'activities' => $students->activities,
        ]);

        // Delete the course from the original table
        $students->delete();

        // Redirect back to the course list.
        return redirect()->route('admin.accountList');
    }

}
