<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailFormValidation extends FormRequest
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
            'email'   => 'required|email',
            'subject' => 'required|min:2|max:150',
            'message' => 'required|min:0|max:12333'
        ];
    }

    public function messages()
    {
        $messages =  [
            'email.required'   => 'Hey!! You forgot to add email!',
            'email.email'   => 'Doesn\'t quite look like an email',
            'subject.min'   => 'You gotta be joking!',
            'message' => 'required'
        ];

        return $messages;
    }

}
