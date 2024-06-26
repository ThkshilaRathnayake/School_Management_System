<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeletedNewTeacher extends Model
{
    use HasFactory;

    protected $fillable = [
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
