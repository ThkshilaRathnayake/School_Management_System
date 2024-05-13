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

Route::middleware(['auth', 'role:Admin'])->group(function(){
    //Admin Login Dashboard
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])
    ->name('admin.adminDashboard');

    //Admin Logout
    //Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])
    //->name('admin.logout');
});

Route::middleware(['auth', 'role:Student'])->group(function(){
   //Student Login Dashboard
    Route::get('/student/dashboard', [StudentController::class, 'StudentDashboard'])
    ->name('student.studentDashboard');

    //Student Logout
    //Route::get('/student/logout', [StudentController::class, 'StudentLogout'])
    //->name('student.logout');

});

Route::middleware(['auth', 'role:Teacher'])->group(function(){
    //Teacher Login Dashboard
    Route::get('/teacher/dashboard', [TeacherController::class, 'TeacherDashboard'])
    ->name('teacher.teacherDashboard');

    //Teacher Logout
   // Route::get('/teacher/logout', [TeacherController::class, 'TeacherLogout'])
   // ->name('teacher.logout');
});


