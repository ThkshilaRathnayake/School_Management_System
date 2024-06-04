<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\StudentController;
use App\Http\Controllers\Login\TeacherController;
use App\Http\Controllers\Login\AdminController;
use App\Http\Controllers\backend\TeacherTableController;
use App\Http\Controllers\backend\CourseTableController;
use App\Http\Controllers\Login\RegisterController;
use App\Http\Controllers\Login\LoginController;



Route::get('/', function () {
    return view('welcome');
})->name('welcome');;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//User Registration 
    Route::get('/registration/form', [RegisterController::class, 'RegistrationForm'])
    ->name('registration.form');

    Route::post('/personal/details', [RegisterController::class, 'PersonalDetails'])
    ->name('personal.details');

//User Personal Details Form
    //Admin
    Route::get('/adminForm', [AdminController::class, 'AdminForm'])
    ->name('admin.form');

    //Teacher
    Route::get('/teacherForm', [TeacherController::class, 'TeacherForm'])
    ->name('teacher.form');

    //Student
    Route::get('/studentForm', [StudentController::class, 'StudentForm'])
    ->name('student.form');

//User Personal Details Store
    //Admin
    Route::post('/admin/personalDetailsStore', [AdminController::class, 'PersonalDetailsStore'])
    ->name('admin.personalDetailsStore');

    //Teacher
    Route::post('/teacher/personalDetailsStore', [TeacherController::class, 'PersonalDetailsStore'])
    ->name('teacher.personalDetailsStore');

    //Student
    Route::post('/student/personalDetailsStore', [StudentController::class, 'PersonalDetailsStore'])
    ->name('student.personalDetailsStore');


//User Login

//view login form
    Route::get('/login/form', [LoginController::class, 'LoginForm'])
    ->name('login.form');

// log user interface
    Route::post('/login/interface', [LoginController::class, 'LoginInterface'])
    ->name('login.interface');

//Admin Middleware
Route::middleware(['auth', 'role:Admin'])->group(function(){

    //Admin Side Bar Links
   
        //Admin Login Dashboard
        Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])
        ->name('admin.dashboard');

    
    //Create A Course
 
        Route::get('/admin/courseList', [CourseTableController::class, 'CourseList'])
        ->name('admin.courseList');

        Route::get('/admin/createCourse', [CourseTableController::class, 'CourseCreate'])
        ->name('admin.courseCreate');

        Route::post('/admin/storeCourseData', [CourseTableController::class, 'CourseStoreData'])
        ->name('admin.courseStoreData');

    
    //Update Course Data
   
        Route::get('/admin/updateDetail/{id}', [CourseTableController::class, 'UpdateDetail'])
        ->name('admin.updateDetail');

        Route::PUT('/admin/courseUpdate/{id}', [CourseTableController::class, 'CourseUpdate'])
        ->name('admin.courseUpdate');

    
    //Delete Course Data
    
        Route::get('/admin/courseDelete/{id}', [CourseTableController::class, 'CourseDelete'])
        ->name('admin.courseDelete');
    
    
    //View Deleted Course Data
  
        Route::get('/admin/deletedCourse', [CourseTableController::class, 'DeletedCourse'])
        ->name('admin.deletedCourse');  
        
        
        Route::get('/admin/teacherList', [TeacherTableController::class, 'TeacherList'])
        ->name('admin.teacherList');
 
    //Delete Teacher Data
    
        Route::get('/admin/teacherDelete/{id}', [TeacherTableController::class, 'TeacherDelete'])
        ->name('admin.teacherDelete');
    
    //View Deleted Teacher Data
  
        Route::get('/admin/deletedTeacher', [TeacherTableController::class, 'DeletedTeacher'])
        ->name('admin.deletedTeacher');  
    
        Route::get('/admin/teacherProfile/{id}', [TeacherTableController::class, 'TeacherProfile'])
        ->name('admin.teacherProfile');

        Route::get('/admin/deletedTeacherProfile/{id}', [TeacherTableController::class, 'DeletedTeacherProfile'])
        ->name('admin.deletedTeacherProfile');

        Route::get('/admin/editTeacherProfile/{id}', [TeacherTableController::class, 'EditTeacherProfile'])
        ->name('admin.editTeacherProfile');

        Route::PUT('/admin/updateTeacherProfile/{id}', [TeacherTableController::class, 'UpdateTeacherProfile'])
        ->name('admin.updateTeacherProfile');
});





//Student Middleware



Route::middleware(['auth', 'role:Student'])->group(function(){

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





//Teacher Middleware



Route::middleware(['auth', 'role:Teacher'])->group(function(){
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


