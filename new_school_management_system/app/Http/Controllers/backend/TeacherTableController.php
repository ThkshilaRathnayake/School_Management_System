<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeacherTable;
use Illuminate\Support\Facades\Auth;

class TeacherTableController extends Controller
{
    public function TeacherDetail(){
        $teachers = TeacherTable::latest()->get();
        return view('admin.content.teacher', compact('teachers'));
    }

    public function AddTeacher(){
        return view('admin.content.role.addTeacher');
    }

    public function StoreTeacher(Request $request){
        $request->validate([
            'employee_ID' => 'required|unique:teacher_tables',
            'teacher_name' => 'required',
            'qualifications' => 'required',
            'experience' => 'required',
        ]);

        TeacherTable::insert([
            'employee_ID' => $request->employee_ID,
            'teacher_name' => $request->teacher_name,
            'qualifications' => $request->qualifications,
            'experience' => $request->experience,
        ]);

        return redirect()->route('admin.content.role.addTeacher');
    }
}
