<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    // User->View Login Form
    public function LoginForm(){
        return view('registration.login');
    }

    public function LoginInterface(LoginRequest $request): RedirectResponse{
        $request->authenticate();

        $request->session()->regenerate();

        $role = $request->user()->role;  // Accessing the authenticated user's role

        $url = '';
        if ($role === 'Admin') {
            $url = 'admin/dashboard';
        } elseif ($role === 'Teacher') {
            $url = 'teacher/dashboard';
        } elseif ($role === 'Student') {
            $url = 'student/dashboard';
        } else {
            // If role is not matched, return a 403 error
            abort(403, 'This action is unauthorized.');
        }

        return redirect()->intended($url);
       // return redirect()->intended(route('dashboard', absolute: false));
    }
}
