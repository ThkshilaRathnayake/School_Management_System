<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'userEmail' => 'required|email',
            'userPassword' => 'required|string|min:8',
        ];
    }

    public function authenticate()
    {
        $credentials = $this->only('userEmail', 'userPassword');
        
        if (!Auth::guard('web')->attempt(['userEmail' => $credentials['userEmail'], 'password' => $credentials['userPassword']])) {
            throw ValidationException::withMessages([
                'userEmail' => __('auth.failed'),
            ]);
        }
        
    }
}
