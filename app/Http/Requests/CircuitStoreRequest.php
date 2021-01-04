<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CircuitStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'length' => 'required',
            'width' => 'required',
            'gravity' => '',
            'gain_kill' => 'required',
            'gain_victory' => 'required',
        ];
    }
}
