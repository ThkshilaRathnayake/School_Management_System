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

    public function StudentListForCourses($courseId)
    {
        $course = CourseTable::where('courseId', $courseId)->firstOrFail();
        $students = AcceptedStudent::latest()->get();
        $selectedStudents = StudentsForCourse::where('courseID', $courseId)->get();
        return view('admin.content.role.studentList', compact('students', 'course', 'selectedStudents'));
    }

    public function CoursesListForTeacher($employeeID)
    {
        $teacher = AcceptedTeacher::where('employeeID', $employeeID)->firstOrFail();
        $courses = CourseTable::latest()->get();
        $selectedTeachers = TeachersForCourse::where('employeeID', $employeeID)->get();
        return view('admin.content.role.teacherCourseList', compact('courses','teacher', 'selectedTeachers'));
    }

    public function CoursesListForStudent($studentID)
    {
        $student = AcceptedStudent::where('studentID', $studentID)->firstOrFail();
        $courses = CourseTable::latest()->get();
        $selectedStudents = StudentsForCourse::where('studentID', $studentID)->get();
        return view('admin.content.role.studentCourseList', compact('courses', 'student', 'selectedStudents'));
    }







    public function TeacherStoreForCourses(Request $request)
    {
        $teacherForCourse = new TeachersForCourse();
        $teacherForCourse->courseID = $request->input('courseID');
        $teacherForCourse->courseName = $request->input('courseName');
        $teacherForCourse->courseCode = $request->input('courseCode');
        $teacherForCourse->employeeID = $request->input('employeeID');
        $teacherForCourse->fullName = $request->input('fullName');
        $teacherForCourse->subject = $request->input('subject');
        $teacherForCourse->save();

        // Redirect to the course create page
        return redirect()->route('admin.teacherListForCourses', ['courseId' => $request->input('courseID')]);
    }

    public function StudentStoreForCourses(Request $request)
    {
        $studentForCourse = new StudentsForCourse();
        $studentForCourse->courseID = $request->input('courseID');
        $studentForCourse->courseName = $request->input('courseName');
        $studentForCourse->courseCode = $request->input('courseCode');
        $studentForCourse->studentID = $request->input('studentID');
        $studentForCourse->fullName = $request->input('fullName');
        $studentForCourse->grade = $request->input('grade');
        $studentForCourse->save();

        // Redirect to the course create page
        return redirect()->route('admin.studentListForCourses', ['courseId' => $request->input('courseID')]);
    }

    public function CourseStoreForTeachers(Request $request)
    {
        $courseForTeacher = new TeachersForCourse();
        $courseForTeacher->courseID = $request->input('courseID');
        $courseForTeacher->courseName = $request->input('courseName');
        $courseForTeacher->courseCode = $request->input('courseCode');
        $courseForTeacher->employeeID = $request->input('employeeID');
        $courseForTeacher->fullName = $request->input('fullName');
        $courseForTeacher->subject = $request->input('subject');
        $courseForTeacher->save();

        // Redirect to the course create page
        return redirect()->route('admin.coursesListForTeacher', ['employeeID' => $request->input('employeeID')]);
    }

    public function CourseStoreForStudents(Request $request)
    {
        $courseForStudent = new StudentsForCourse();
        $courseForStudent->courseID = $request->input('courseID');
        $courseForStudent->courseName = $request->input('courseName');
        $courseForStudent->courseCode = $request->input('courseCode');
        $courseForStudent->studentID = $request->input('studentID');
        $courseForStudent->fullName = $request->input('fullName');
        $courseForStudent->grade = $request->input('grade');
        $courseForStudent->save();

        // Redirect to the course create page
        return redirect()->route('admin.coursesListForStudent', ['studentID' => $request->input('studentID')]);
    }









    public function RemoveTeacherFromCourse($id)
    {
        $teacherForCourse = TeachersForCourse::findOrFail($id);
        $courseId = $teacherForCourse->courseID;
        $teacherForCourse->delete();

        return redirect()->route('admin.teacherListForCourses', ['courseId' => $courseId]);
    }

    public function RemoveStudentFromCourse($id)
    {
        $studentForCourse = StudentsForCourse::findOrFail($id);
        $courseId = $studentForCourse->courseID;
        $studentForCourse->delete();

        return redirect()->route('admin.studentListForCourses', ['courseId' => $courseId]);
    }

    public function RemoveCourseFromTeacher($id)
    {
        $courseForTeacher = TeachersForCourse::findOrFail($id);
        $employeeID = $courseForTeacher->employeeID;
        $courseForTeacher->delete();

        return redirect()->route('admin.coursesListForTeacher', ['employeeID' => $employeeID]);
    }

    public function RemoveCourseFromStudent($id)
    {
        $courseForStudent = StudentsForCourse::findOrFail($id);
        $studentID = $courseForStudent->studentID;
        $courseForStudent->delete();

        return redirect()->route('admin.coursesListForStudent', ['studentID' => $studentID]);
    }







    public function SearchCourseForTeacher(Request $request)
    {
        $search = $request->input('search');
        
        $courses = CourseTable::when($search, function ($query, $search) {
            return $query->where('courseID', 'like', "%{$search}%")
                         ->orWhere('courseName', 'like', "%{$search}%")
                         ->orWhere('courseCode', 'like', "%{$search}%");
        })->get();

        return view('admin.content.role.addTeachers', compact('courses'));
    }

    public function SearchCourseForStudent(Request $request)
    {
        $search = $request->input('search');
        
        $courses = CourseTable::when($search, function ($query, $search) {
            return $query->where('courseID', 'like', "%{$search}%")
                         ->orWhere('courseName', 'like', "%{$search}%")
                         ->orWhere('courseCode', 'like', "%{$search}%");
        })->get();

        return view('admin.content.role.addStudents', compact('courses'));
    }

    public function SearchTeacherForCourse(Request $request)
    {
        $search = $request->input('search');
        
        $teachers = AcceptedTeacher::when($search, function ($query, $search) {
            return $query->where('fullName', 'like', "%{$search}%")
                         ->orWhere('employeeID', 'like', "%{$search}%")
                         ->orWhere('subject', 'like', "%{$search}%");
        })->get();

        return view('admin.content.role.addCoursesForTeacher', compact('teachers'));
    }

    public function SearchStudentForCourse(Request $request)
    {
        $search = $request->input('search');
        
        $students = AcceptedStudent::when($search, function ($query, $search) {
            return $query->where('fullName', 'like', "%{$search}%")
                         ->orWhere('studentID', 'like', "%{$search}%")
                         ->orWhere('grade', 'like', "%{$search}%");
        })->get();

        return view('admin.content.role.addCoursesForStudent', compact('students'));
    }

    


    
}
