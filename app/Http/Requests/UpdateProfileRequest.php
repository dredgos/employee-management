<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "date_of_birth" => ['required', 'date'],
            "telephone" => ['required', 'string'],
            "address_1" => ['required', 'string'],
            "address_2" => ['nullable', 'string'],
            "town" => ['required', 'string'],
            "postcode" => ['required', 'string'],
        ];
    }
}
