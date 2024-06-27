<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Register extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'userName',
        'userEmail',
        'userPassword',
        'role',
    ];

    protected $hidden = [
        'userPassword',
    ];

    public function getAuthPassword()
    {
        return $this->userPassword;
    }

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function teacherForCourses()
    {
        return $this->hasMany(TeacherForCourse::class, 'teacher_id');
    }
}
