<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTable extends Model
{
    use HasFactory;

    protected $fillable = [
        'courseID',
        'courseName',
        'courseCode',
        'description',
    ];

    public function teacherForCourses()
    {
        return $this->hasMany(TeachersForCourse::class);
    }
    
}
