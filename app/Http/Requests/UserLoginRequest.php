<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'    => 'required_without:name|email',
            'name' => 'required_without:email',
            'password' => 'required',
        ];
    }
}
