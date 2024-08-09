<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHolidayPlanRequest extends FormRequest
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
            'plan.title'=> ['nullable','string','min:5'],
            'plan.description'=> ['nullable','string','max:255','min:5'],
            'plan.date'=> ['nullable','date'],
            'plan.location'=> ['nullable','string','min:5'],
            'plan.participants'=> ['nullable','integer','max:255'],
        ];
    }
}
