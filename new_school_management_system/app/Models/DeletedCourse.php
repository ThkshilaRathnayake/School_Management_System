<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeletedCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'courseID',
        'courseName',
        'courseCode',
        'description',
    ];
}
