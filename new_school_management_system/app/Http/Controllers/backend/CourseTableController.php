<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseTable;
use Illuminate\Support\Facades\Auth;

class CourseTableController extends Controller
{
    public function CourseList(){
        $courses = CourseTable::latest()->get();
        return view('admin.content.course.courseList', compact('courses'));
    }

    public function CreateCourse(){
        return view('admin.content.course.courseCreate');
    }

    public function StoreCourseData(Request $request){
        $request->validate([
            'courseID' => 'required',
            'courseName' => 'required',
            'courseCode' => 'required|unique:course_tables',
            'description' => 'nullable',
        ]);

        CourseTable::insert([
            'courseID' => $request->courseID,
            'courseName' => $request->courseName,
            'courseCode' => $request->courseCode,
            'description' => $request->description,
        ]);

        CourseTable::create($request->all());
        return redirect()->route('admin.courseCreate');
    }

    public function UpdateDetail($id){
        $courses = CourseTable::findOrFail($id);
        return view('admin.content.course.courseUpdate', compact('courses'));
    }

    public function CourseUpdate(Request $request, $id)
    {
        $request->validate([
            'courseID' => 'required',
            'courseName' => 'required',
            'courseCode' => 'required',
            'description' => 'nullable',
        ]);

        $course = CourseTable::findOrFail($id);
        $course->update($request->all());
        return redirect()->route('admin.courseList');
    }
}

