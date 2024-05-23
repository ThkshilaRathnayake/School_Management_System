<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //Admin Login Function
    public function AdminDashboard(){
        return view('admin.index');
    }

    //Admin Personal Details Form View Function
    public function AdminForm(){
        return view('registration.adminForm');
    }

    //Admin Personal Details Store Function
    public function PersonalDetailsStore(Request $request){
        $request->validate([
            'fullName' => 'required|string|max:255',
            'DOB' => 'required|date',
            'gender' => 'required|string|in:Male,Female,Other',
            'NICnumber' => 'required|string|max:255|unique:admins',
            'employeeID' => 'required|string|max:255|unique:admins',
            'experience' => 'required|string',
            'qualifications' => 'required|string', 
        ]);

        $admin = new Admin();
        $admin->fullName = $request->fullName;
        $admin->DOB = $request->DOB;
        $admin->gender = $request->gender;
        $admin->NICnumber = $request->NICnumber;
        $admin->employeeID = $request->employeeID;
        $admin->experience = $request->experience;
        $admin->qualifications = $request->qualifications;
        $admin->save();

        return redirect()->route('welcome');
    }

}
