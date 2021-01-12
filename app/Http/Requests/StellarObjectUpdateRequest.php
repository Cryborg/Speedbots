<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StellarObjectUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'stellar_system_id' => 'exists:stellar_systems,id',
            'name'              => '',
            'description'       => '',
            'type'              => '',
            'disappear_at'      => ''
        ];
    }
}
