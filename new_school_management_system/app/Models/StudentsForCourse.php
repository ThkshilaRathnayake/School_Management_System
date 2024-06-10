<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsForCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'courseID',
        'courseName',
        'courseCode',
        'fullName',
        'grade',
        'studentID',
    
    ];
}
