<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SponsorUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'company_name' => ['required', 'string', 'max:60'],
            'company_contact' => ['required', 'string', 'max:60'],
            'primary_address' => ['required', 'string', 'min:3', 'max:60'],
            'city' => ['required', 'string', 'min:3', 'max:40'],
            'postal' => ['required', 'regex:/^([a-zA-Z]\d[a-zA-Z])\ {0,1}(\d[a-zA-Z]\d)$/', 'max:6'],
            'phone' => ['required', 'digits:10', 'integer', 'numeric'],
            'email' => ['required', 'string', 'email', 'max:40'],
            'bio' => ['required', 'min:8', 'max:400']
        ];
    }
}
