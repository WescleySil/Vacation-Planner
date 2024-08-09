<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndexHolidayPlanRequest extends FormRequest
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
            'filters.title'=>['nullable','string'],
            'filters.description'=>['nullable','string'],
            'filters.date'=>['nullable','date'],
            'filters.location'=>['nullable','string'],
            'filters.userId'=>['nullable','integer','exists:users,id']
        ];
    }
}
