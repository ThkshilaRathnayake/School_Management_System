<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseTable;
use Illuminate\Support\Facades\Auth;

class CourseTableController extends Controller
{
    public function CourseDetail(){
        $courses = CourseTable::latest()->get();
        return view('admin.content.course.courseList', compact('courses'));
    }

    public function AddCourse(){
        return view('admin.content.course.courseCreate');
    }

    public function StoreCourse(Request $request){
        $request->validate([
            'courseID' => 'required',
            'courseName' => 'required',
            'courseCode' => 'required|unique:course_tables',
        ]);

        CourseTable::insert([
            'courseID' => $request->courseID,
            'courseName' => $request->courseName,
            'courseCode' => $request->courseCode,
            
        ]);

        return redirect()->route('admin.courseCreate');
    }

    public function CourseUpdate($id){
        $courses = CourseTable::findOrFail($id);
        return view('admin.content.course.courseUpdate', compact('courses'));
    }

}
