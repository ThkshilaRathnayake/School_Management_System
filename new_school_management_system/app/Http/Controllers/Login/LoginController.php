<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Show login form
    public function showLoginForm() {
        return view('registration.login');
    }

    // Handle login request
    public function login(Request $request) {
        $request->validate([
            'userEmail' => 'required|string|email',
            'userPassword' => 'required|string',
        ]);

        $user = Register::where('userEmail', $request->userEmail)->first();

        if ($user && Hash::check($request->userPassword, $user->userPassword)) {
            Auth::login($user);

           // Redirect based on the user's role
           return $this->redirectBasedOnRole($user->role);
        }

        return back()->withErrors('Invalid email or password.');
    }

    // Logout user
    public function logout() {
        Auth::logout();
        return redirect()->route('login.user');
    }

    // Redirect user based on role
    protected function redirectBasedOnRole($role) {
        switch ($role) {
            case 'Admin':
                return redirect()->route('admin.dashboard');
            case 'Teacher':
                return redirect()->route('teacher.dashboard');
            case 'Student':
                return redirect()->route('student.dashboard');
            default:
                Auth::logout();
                return redirect()->route('login.form')->withErrors('Invalid role.');
        }
    }
}
