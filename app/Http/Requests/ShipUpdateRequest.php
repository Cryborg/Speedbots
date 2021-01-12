<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShipUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'exists:users,id',
            'name'    => '',
            'class'   => '',
            'health'  => '',
        ];
    }
}
