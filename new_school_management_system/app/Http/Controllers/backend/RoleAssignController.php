<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AcceptedTeacher;
use App\Models\AcceptedStudent;
use App\Models\CourseTable;
use App\Models\TeachersForCourse;
use App\Models\StudentsForCourse;

class RoleAssignController extends Controller
{
    public function AddTeachersForCourse()
    {
        $courses = CourseTable::latest()->get();
        return view('admin.content.role.addTeachers', compact('courses'));
    }

    public function AddStudentsForCourse()
    {
        $courses = CourseTable::latest()->get();
        return view('admin.content.role.addStudents', compact('courses'));
    }

    public function AddCoursesForTeacher()
    {
        $teachers = AcceptedTeacher::latest()->get();
        return view('admin.content.role.addCoursesForTeacher', compact('teachers'));
    }

    public function AddCoursesForStudent()
    {
        $students = AcceptedStudent::latest()->get();
        return view('admin.content.role.addCoursesForStudent', compact('students'));
    }

    public function TeacherListForCourses($courseId)
    {
        $course = CourseTable::where('courseId', $courseId)->firstOrFail();
        $teachers = AcceptedTeacher::latest()->get();
        $selectedTeachers = TeachersForCourse::where('courseID', $courseId)->get();
        return view('admin.content.role.teacherList', compact('teachers', 'course', 'selectedTeachers'));
    }

    public function TeacherStoreForCourses(Request $request)
    {
        // validation
        $request->validate([
            'fullName' => 'required',
            'employeeID' => 'required',
            'subject' => 'required',
            'courseID' => 'required',
            'courseName' => 'required',
            'courseCode' => 'required',
        ]);

        // Store the course data in the Course List table
        TeachersForCourse::create([
            'fullName' => $request->fullName,
            'employeeID' => $request->employeeID,
            'subject' => $request->subject,
            'courseID' => $request->courseID,
            'courseName' => $request->courseName,
            'courseCode' => $request->courseCode,
        ]);

        // Redirect to the course create page
        return redirect()->route('admin.teacherListForCourses', ['courseId' => $request->courseID]);
    }


    public function StudentListForCourses($courseId)
    {
        $course = CourseTable::where('courseId', $courseId)->firstOrFail();
        $students = AcceptedStudent::latest()->get();
        $selectedStudents = StudentsForCourse::where('courseID', $courseId)->get();
        return view('admin.content.role.studentList', compact('students', 'course', 'selectedStudents'));
    }

    public function StudentStoreForCourses(Request $request)
    {
        // validation
        $request->validate([
            'fullName' => 'required',
            'studentID' => 'required',
            'grade' => 'required',
            'courseID' => 'required',
            'courseName' => 'required',
            'courseCode' => 'required',
        ]);

        // Store the course data in the Course List table
        StudentsForCourse::create([
            'fullName' => $request->fullName,
            'studentID' => $request->studentID,
            'grade' => $request->grade,
            'courseID' => $request->courseID,
            'courseName' => $request->courseName,
            'courseCode' => $request->courseCode,
        ]);

        // Redirect to the course create page
        return redirect()->route('admin.studentListForCourses', ['courseId' => $request->courseID]);
    }

    public function CoursesListForTeacher($employeeID)
    {
        $teacher = AcceptedTeacher::where('employeeID', $employeeID)->firstOrFail();
        $courses = CourseTable::latest()->get();
        $selectedCourses = TeachersForCourse::where('employeeID', $employeeID)->get();
        return view('admin.content.role.teacherCourseList', compact('courses','teacher', 'selectedCourses'));
    }

    public function CourseStoreForTeachers(Request $request)
    {
        // validation
        $request->validate([
            'fullName' => 'required',
            'employeeID' => 'required',
            'subject' => 'required',
            'courseID' => 'required',
            'courseName' => 'required',
            'courseCode' => 'required',
        ]);

        // Store the course data in the Course List table
        TeachersForCourse::create([
            'fullName' => $request->fullName,
            'employeeID' => $request->employeeID,
            'subject' => $request->subject,
            'courseID' => $request->courseID,
            'courseName' => $request->courseName,
            'courseCode' => $request->courseCode,
        ]);

        // Redirect to the course create page
        return redirect()->route('admin.coursesListForTeacher', ['employeeID' => $request->employeeID]);
    }

    public function CoursesListForStudent($studentID)
    {
        $student = AcceptedStudent::where('studentID', $studentID)->firstOrFail();
        $courses = CourseTable::latest()->get();
        $selectedCourses = StudentsForCourse::where('studentID', $studentID)->get();
        return view('admin.content.role.studentCourseList', compact('courses', 'student', 'selectedCourses'));
    }

    public function CourseStoreForStudents(Request $request)
    {
        \Log::info('CourseStoreForStudents called with data:', $request->all());

        // validation
        $request->validate([
            'fullName' => 'required',
            'studentID' => 'required',
            'grade' => 'required',
            'courseID' => 'required',
            'courseName' => 'required',
            'courseCode' => 'required',
        ]);

        // Store the course data in the Course List table
        StudentsForCourse::create([
            'fullName' => $request->fullName,
            'studentID' => $request->studentID,
            'grade' => $request->grade,
            'courseID' => $request->courseID,
            'courseName' => $request->courseName,
            'courseCode' => $request->courseCode,
        ]);

        // Redirect to the course create page
        return redirect()->route('admin.coursesListForStudent', ['studentID' => $request->studentID]);
    }



}
