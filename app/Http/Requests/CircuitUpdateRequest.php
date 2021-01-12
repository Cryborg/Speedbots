<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CircuitUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'string',
            'length' => 'integer',
            'gravity' => 'integer',
            'gain_kill' => 'integer',
            'gain_victory' => 'integer',
        ];
    }
}
