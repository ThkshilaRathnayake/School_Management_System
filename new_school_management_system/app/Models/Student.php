<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'register_id',
        'fullName',
        'DOB',
        'gender',
        'grade',
        'studentID',
        'activities',
    ];

    public function register()
    {
        return $this->belongsTo(Register::class);
    }
}
