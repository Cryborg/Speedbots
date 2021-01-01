<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShipStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'class'   => 'required',
            'health'  => '',
        ];
    }
}
