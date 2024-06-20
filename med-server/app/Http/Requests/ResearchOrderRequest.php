<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResearchOrderRequest extends FormRequest
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
			'patient_id' => 'required|integer|exists:patients,id',
            'researches' => 'required|string',
//			'bar_code' => 'required|string',
			'is_cito' => 'required|boolean',
            'doctor_id' => 'required|integer|exists:doctors,id'
        ];
    }
}
