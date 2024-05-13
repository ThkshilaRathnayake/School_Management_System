<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Admin Login Function
    public function AdminDashboard(){
        return view('admin.adminDashboard');
        //return view('admin.index');
    }
}
