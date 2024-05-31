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
}
