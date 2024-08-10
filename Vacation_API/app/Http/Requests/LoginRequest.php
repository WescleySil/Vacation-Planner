<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required','email'],
            'password' => ['required', 'string']
        ];
    }

    public function messages()
    {
        return [
            'email' => 'This email is not valid, try another one',
            'password.required' => 'The password is required, please fill it in',
            'email.required' => 'The email is required, please fill it in'
        ];
    }
}
