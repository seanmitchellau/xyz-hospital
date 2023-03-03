<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewPatient extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|min:3|max:255',
            'last_name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:patients|max:255',
            'address' => 'required|min:10|max:255',
            'phone_number' => 'required|min:6|max:16',
            'date_of_birth' => 'required|date',
            'past_history' => 'required|max:1024',
            'agree' => 'accepted',
        ];
    }
}
