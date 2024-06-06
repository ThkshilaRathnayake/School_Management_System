<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcceptedAdmin extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullName',
        'DOB',
        'gender',
        'NICnumber',
        'employeeID',
        'experience',
        'qualifications',
    ];
}
