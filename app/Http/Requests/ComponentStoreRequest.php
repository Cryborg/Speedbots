<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComponentStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'               => 'required|string',
            'health'             => 'required|integer',
            'price'              => 'required|integer',
            'weight'             => 'required|integer',
            'energy_consumption' => 'integer',
            'power'              => 'integer',
            'slots'              => 'integer',
        ];
    }
}
