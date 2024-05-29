<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // User->View Registration Form
    public function RegistrationForm(){
        return view('registration.register');
    }

    //store registration form details & redirect to personal details forms
    public function PersonalDetails(Request $request){
        $request->validate([
            'userName' => 'required|string|max:255',
            'userEmail' => 'required|string|email|max:255|unique:registers',
            'userPassword' => 'required|string|min:8',
            'role' => 'required|string|in:Admin,Teacher,Student',
        ]);

        $user = new Register();
        $user->userName = $request->userName;
        $user->userEmail = $request->userEmail;
        $user->userPassword = Hash::make($request->userPassword);
        $user->role = $request->role;
        $user->save();

        // Redirect based on the role
        switch ($user->role) {
            case 'Admin':
                return redirect()->route('admin.form');
            case 'Teacher':
                return redirect()->route('teacher.form');
            case 'Student':
                return redirect()->route('student.form');
            default:
                return redirect()->route('user.registration')->with('error', 'Invalid role.');
        }
    }
}
