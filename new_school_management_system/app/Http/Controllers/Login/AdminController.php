<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Admin Login Function
    public function AdminDashboard(){
        return view('admin.index');
    }

    //Admin Personal Details Form Function
    public function AdminForm(){
        return view('registration.adminForm');
    }
}
