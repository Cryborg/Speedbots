<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComponentUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'               => 'string',
            'health'             => 'integer',
            'price'              => 'integer',
            'weight'             => 'integer',
            'energy_consumption' => 'integer',
            'power'              => 'integer',
            'slots'              => 'integer',
        ];
    }
}
