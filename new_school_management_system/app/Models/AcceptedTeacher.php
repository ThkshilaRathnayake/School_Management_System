<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcceptedTeacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'register_id',
        'fullName',
        'DOB',
        'gender',
        'subject',
        'NICnumber',
        'employeeID',
        'experience',
        'qualifications',
    ];
}
