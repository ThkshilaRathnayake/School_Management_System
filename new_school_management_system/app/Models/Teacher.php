<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
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

    public function register()
    {
        return $this->belongsTo(Register::class);
    }
}
