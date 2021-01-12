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
            'name' => 'required|string',
            'length' => 'required|integer',
            'gravity' => 'integer',
            'gain_kill' => 'required|integer',
            'gain_victory' => 'required|integer',
        ];
    }
}
