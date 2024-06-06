<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcceptedStudent extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullName',
        'DOB',
        'gender',
        'grade',
        'studentID',
        'activities',
    ];
}
