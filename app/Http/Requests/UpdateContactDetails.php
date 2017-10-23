<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactDetails extends FormRequest
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
            'phone_number' => 'required',
            'contact_address' => 'required'
        ];
    }

    /**
     * Overriding the inherited message function, to enable us custom the error
     * messages received when validation fails.
     */
    public function messages()
    {
        return [
            'phone_number.required' => 'We need your number, so we can contact you',
            'contact_address.required' => 'Without an address we cannot deliver fruits to you'
        ];
    }
}
