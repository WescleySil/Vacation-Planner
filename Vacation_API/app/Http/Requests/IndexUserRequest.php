<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndexUserRequest extends FormRequest
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
            'filters.id' => ['nullable','integer'],
            'filters.name' => ['nullable', 'string'],
            'filters.email' => ['nullable','email']
        ];
    }

    public function messages()
    {
        return[
            'filters.id.integer' => "This ID is not a number, please put a number",
            'filters.email.email' => "This email is not valid, please put another one"
        ];
    }
}
