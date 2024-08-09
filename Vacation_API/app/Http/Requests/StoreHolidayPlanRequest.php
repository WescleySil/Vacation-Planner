<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHolidayPlanRequest extends FormRequest
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
            'plan.title'=> ['required','string','min:5'],
            'plan.description'=> ['required','string','max:255','min:5'],
            'plan.date'=> ['required','date'],
            'plan.location'=> ['required','string','min:5'],
            'plan.participants'=> ['nullable','integer','max:255'],
        ];
    }
}
