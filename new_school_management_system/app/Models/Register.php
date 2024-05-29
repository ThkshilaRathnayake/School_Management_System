<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Register extends Model implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;

    protected $table = 'registers';

    protected $fillable = [
        'userName', 'userEmail', 'userPassword', 'role',
    ];

    protected $hidden = [
        'userPassword',
    ];

    // If you need to rename the default password field
    public function getAuthPassword()
    {
        return $this->userPassword;
    }
}
