<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Models\Register;

class AdminController extends Controller
{
    //Admin Login Function
    public function AdminDashboard(){
        return view('admin.index');
    }

    //Admin Personal Details Form View Function
    public function AdminForm($register_id){
        $register = Register::findOrFail($register_id);
        return view('registration.adminForm', compact('register_id'));
    }

    //Admin Personal Details Store Function
    public function PersonalDetailsStore(Request $request){
        $request->validate([
            'register_id' => 'required|exists:registers,id',
            'fullName' => 'required|string|max:255',
            'DOB' => 'required|date',
            'gender' => 'required|string|in:Male,Female,Other',
            'NICnumber' => 'required|string|max:255|unique:admins',
            'employeeID' => 'required|string|max:255|unique:admins',
            'experience' => 'required|string',
            'qualifications' => 'required|string', 
        ]);

        $admin = new Admin();
        $admin->register_id = $request->register_id;
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
