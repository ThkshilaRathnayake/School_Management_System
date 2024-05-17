<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\TeacherTableController;
use App\Http\Controllers\backend\CourseTableController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



//#################################################################################################################################################


//Admin Middleware



Route::middleware(['auth', 'role:admin'])->group(function(){

    //@@@@@@ Admin Side Bar Links @@@@@@

    //Admin Login Dashboard
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])
    ->name('admin.dashboard');

    //Admin->User Accounts
    Route::get('/admin/userAccount', [AdminController::class, 'UserAccount'])
    ->name('admin.userAccount');

    //Admin->Assign Roles
    Route::get('/admin/roleAssign', [AdminController::class, 'RoleAssign'])
    ->name('admin.roleAssign');

    //Admin->Courses List
    Route::get('/admin/courseList', [AdminController::class, 'CourseList'])
    ->name('admin.courseList');

    //Admin->Course Create 
    Route::get('/admin/courses', [AdminController::class, 'CourseCreate'])
    ->name('admin.courseCreate');


    //Admin->Administrators 
    Route::get('/admin/administratorList', [AdminController::class, 'AdministratorList'])
    ->name('admin.administratorList');

    //Admin->Teachers
    Route::get('/admin/teacher', [AdminController::class, 'TeacherList'])
    ->name('admin.teacherList');

    //Admin->Students
    Route::get('/admin/student', [AdminController::class, 'StudentList'])
    ->name('admin.studentList');

    //Admin->Deleted Administrators
    Route::get('/admin/deletedAdministrator', [AdminController::class, 'DeletedAdministrator'])
    ->name('admin.deletedAdministrator');

    //Admin->Deleted Teachers
    Route::get('/admin/deletedTeacher', [AdminController::class, 'DeletedTeacher'])
    ->name('admin.deletedTeacher');

    //Admin->Deleted Students
    Route::get('/admin/deletedStudent', [AdminController::class, 'DeletedStudent'])
    ->name('admin.deletedStudent');

    //Admin->Deleted Courses
    Route::get('/admin/deletedCourse', [AdminController::class, 'DeletedCourse'])
    ->name('admin.deletedCourse');

    //@@@@@@@@ Create A Course @@@@@@@@@@@

    Route::get('/admin/courseDetail', [CourseTableController::class, 'CourseDetail'])
    ->name('admin.courseDetail');

    Route::get('/admin/addCourse', [CourseTableController::class, 'AddCourse'])
    ->name('admin.addCourse');

    Route::post('/admin/storeCourse', [CourseTableController::class, 'StoreCourse'])
    ->name('admin.storeCourse');

    Route::get('/admin/courseUpdate/{id}', [CourseTableController::class, 'CourseUpdate'])
    ->name('admin.courseUpdate');

    //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

    //Admin->Role
    Route::get('/admin/addTeacher', [TeacherTableController::class, 'AddTeacher'])
    ->name('admin.content.role.addTeacher');

    Route::post('/admin/storeTeacher', [TeacherTableController::class, 'StoreTeacher'])
    ->name('admin.storeTeacher');

    

    

    Route::get('/admin/teachers', [TeacherTableController::class, 'TeacherDetail'])
    ->name('admin.content.teacher');

    
    
});



//#################################################################################################################################################


//Student Middleware



Route::middleware(['auth', 'role:student'])->group(function(){

    //Student Login Dashboard
    Route::get('/student/dashboard', [StudentController::class, 'StudentDashboard'])
    ->name('student.dashboard');

    //Student Logout
    //Route::get('/student/logout', [StudentController::class, 'StudentLogout'])
   //->name('student.logout');

    //Student->Course->Materials
    Route::get('/student/courseMaterials', [StudentController::class, 'CourseMaterials'])
    ->name('student.course.material');

    //Student->Course->Assignments
    Route::get('/student/assignments', [StudentController::class, 'Assignments'])
    ->name('student.course.assignment');

});



//#################################################################################################################################################


//Teacher Middleware



Route::middleware(['auth', 'role:teacher'])->group(function(){
    //Teacher Login Dashboard
    Route::get('/teacher/dashboard', [TeacherController::class, 'TeacherDashboard'])
    ->name('teacher.dashboard');

    //Teacher Logout
    // Route::get('/teacher/logout', [TeacherController::class, 'TeacherLogout'])
    // ->name('teacher.logout');

    //Teacher->Course->Materials
    Route::get('/teacher/courseMaterials', [TeacherController::class, 'CourseMaterials'])
    ->name('teacher.course.material');

    //Teacher->Course->Assignments
    Route::get('/teacher/assignments', [TeacherController::class, 'Assignments'])
    ->name('teacher.course.assignment');

    //Teacher->Course->Attendance
    Route::get('/teacher/attendance', [TeacherController::class, 'Attendance'])
    ->name('teacher.course.attendance');

});


