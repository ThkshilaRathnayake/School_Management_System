<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CourseTable;
use App\Models\DeletedCourse;

class CourseTableController extends Controller
{
    // Admin->View Course List 
    public function CourseList(){
        $courses = CourseTable::latest()->get();
        return view('admin.content.course.courseList', compact('courses'));
    }

//////////////////////////////////////////////////////////////////////////////////////////

    // Admin->View Course Create Form 
    public function CourseCreate(){
        return view('admin.content.course.courseCreate');
    }

///////////////////////////////////////////////////////////////////////////////////////////

    // Admin->Store Course Data 
    public function CourseStoreData(Request $request){
        // validation
        $request->validate([
            'courseID' => 'required',
            'courseName' => 'required',
            'courseCode' => 'required|unique:course_tables',
            'description' => 'nullable',
        ]);

        // Store the course data in the Course List table
        CourseTable::create([
            'courseID' => $request->courseID,
            'courseName' => $request->courseName,
            'courseCode' => $request->courseCode,
            'description' => $request->description,
        ]);

        // Redirect to the course create page
        return redirect()->route('admin.courseList');
    }

///////////////////////////////////////////////////////////////////////////////////////////
    
    // Admin->View Update Course Form 
    public function UpdateDetail($id){
        // Find the course by ID
        $courses = CourseTable::findOrFail($id);

        // Redirect to the Course Update page
        return view('admin.content.course.courseUpdate', compact('courses'));
    }

/////////////////////////////////////////////////////////////////////////////////////////////////    

    // Admin->Update Course Data 
    public function CourseUpdate(Request $request, $id){
        // Validation
        $request->validate([
            'courseID' => 'required',
            'courseName' => 'required',
            'courseCode' => 'required',
            'description' => 'nullable',
        ]);

        // Find the course by ID
        $courses = CourseTable::findOrFail($id);
        
        // Update the course record
        $courses->update($request->all());

        // Redirect to the course list page
        return redirect()->route('admin.courseList');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////

    // Admin->Delete Course Data 
    public function CourseDelete($id)
    {
        // Find the course by ID
        $courses = CourseTable::findOrFail($id);

        // Store the course data in the Deleted Course table
        DeletedCourse::create([
            'courseID' => $courses->courseID,
            'courseName' => $courses->courseName,
            'courseCode' => $courses->courseCode,
            'description' => $courses->description,
        ]);

        // Delete the course from the original table
        $courses->delete();

        // Redirect back to the course list.
        return redirect()->route('admin.courseList');
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////

    // Admin->View Delete Course Data
    public function DeletedCourse()
    {
        //Retrieve records from the Deleted Course Table
        $deletedCourse = DeletedCourse::latest()->get();

        //View Delered Course List
        return view('admin.content.history.deletedCourse', compact('deletedCourse'));
    }


}

