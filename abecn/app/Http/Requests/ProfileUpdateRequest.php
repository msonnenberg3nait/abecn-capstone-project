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
            'display_name' => ['string', 'min:2', 'max:30', Rule::unique(User::class)->ignore($this->user()->id)],
            'email' => ['string', 'email', 'max:40', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }
}
