<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
            'user.name' => ['nullable', 'string','min:3', 'max:30'],
            'user.email' => ['nullable','email','unique:users,email'],
            'user.phone' => ['nullable', 'string','max:15'],
            'user.password' => ['nullable', 'string', 'min:8','max:20']
        ];
    }

    public function messages()
    {
        return [
            'user.name.min' => 'The name is too short, 3 mininum characters',
            'user.name.max' => 'The name is too long, please abbreviate it',
            'user.email.email' => 'This email is not valid, try another one',
            'user.email.unique' => 'This email is already associated with a user',
            'user.phone.integer' => 'Enter numbers only please',
            'user.phone.max' => 'This number is not valid',
            'user.password.min' => 'The password minimun length is 8, please try again',
            'user.password.max' => 'The password maximum length is 20, please try again',
        ];
    }
}
