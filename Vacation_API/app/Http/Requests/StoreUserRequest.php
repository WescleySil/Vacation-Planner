<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'user.name' => ['required','max:30','min:3'],
            'user.email' => ['required','email','unique:users,email'],
            'user.phone' => ['nullable', 'string', 'max:15'],
            'user.password' => ['required','min:8','max:20']
        ];
    }

    public function messages()
    {
        return [
            'user.name.min' => 'The name is too short, 3 mininum characters',
            'user.name.max' => 'The name is too long, please abbreviate it',
            'user.name.required' => 'The name is required, please fill it in',
            'user.email.required' => 'The email is required, please fill it in',
            'user.email.email' => 'This email is not valid, try another one',
            'user.email.unique' => 'This email is already associated with a user, try to login with you password',
            'user.phone.integer' => 'Enter numbers only please',
            'user.phone.max' => 'This number is not valid',
            'user.password.required' => 'The password is required, please fill it in',
            'user.password.min' => 'The password minimun length is 8, please try again',
            'user.password.max' => 'The password maximum length is 20, please try again',
        ];
    }
}
