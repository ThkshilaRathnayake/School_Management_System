<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AdminController;

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

    //Admin Login Dashboard
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])
    ->name('admin.dashboard');

    //Admin Logout
    //Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])
    //->name('admin.logout');

    //Admin->User Account->Create
    Route::get('/admin/accountCreate', [AdminController::class, 'AccountCreate'])
    ->name('admin.content.account.create');

    //Admin->User Account->Update
    Route::get('/admin/accountUpdate', [AdminController::class, 'AccountUpdate'])
    ->name('admin.content.account.update');

    //Admin->User Account->Delete
    Route::get('/admin/accountDelete', [AdminController::class, 'AccountDelete'])
    ->name('admin.content.account.delete');

    //Admin->Role
    Route::get('/admin/role', [AdminController::class, 'Role'])
    ->name('admin.content.role');

    //Admin->Course->Create
    Route::get('/admin/courseCreate', [AdminController::class, 'CourseCreate'])
    ->name('admin.content.course.create');

    //Admin->Course->Update
    Route::get('/admin/courseUpdate', [AdminController::class, 'CourseUpdate'])
    ->name('admin.content.course.update');

    //Admin->Course->Delete
    Route::get('/admin/courseDelete', [AdminController::class, 'CourseDelete'])
    ->name('admin.content.course.delete');

    //Admin->Teachers
    Route::get('/admin/teachers', [AdminController::class, 'Teachers'])
    ->name('admin.content.teacher');

    //Admin->Students
    Route::get('/admin/students', [AdminController::class, 'Students'])
    ->name('admin.content.student');
    
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


