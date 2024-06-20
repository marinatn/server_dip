<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReferenceRequest extends FormRequest
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
            'name' => 'required|string',
            'min' => 'required|numeric|between:0,999.99',
            'max' => 'required|numeric|between:0,999.99',
            'risks' => 'required|string',
            'sex' => 'required|string',
            'unit' => 'required|string',
        ];
    }
}
