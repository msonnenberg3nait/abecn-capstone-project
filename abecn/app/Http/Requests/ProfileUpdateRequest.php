<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['string', 'min:1', 'max:30'],
            'last_name' => ['string', 'min:2', 'max:30'],
            'name' => ['string', 'min:2', 'max:80'],
            'display_name' => ['string', 'min:2', 'max:30', Rule::unique(User::class)->ignore($this->user()->id)],
            'organization' => ['nullable', 'string', 'max:60'],
            'specialty' => ['nullable', 'string', 'max:60'],
            'email' => ['string', 'email', 'max:40', Rule::unique(User::class)->ignore($this->user()->id)],
            'phone' => ['nullable', 'digits:10', 'integer', 'numeric'],
            'line1' => ['nullable', 'string', 'min:3', 'max:60'],
            'line2' => ['nullable', 'string', 'min:3', 'max:60'],
            'pcity' => ['nullable', 'string', 'min:3', 'max:20'],
            'state' => ['nullable', 'string', 'min:2', 'max:2'],
            'country' => ['nullable', 'string', 'min:2', 'max:2'],
            'postal_code' => ['nullable', 'regex:/^([a-zA-Z]\d[a-zA-Z])\ {0,1}(\d[a-zA-Z]\d)$/', 'max:6'],
        ];
    }
}
