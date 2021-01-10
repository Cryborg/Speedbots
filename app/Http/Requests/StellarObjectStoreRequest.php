<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StellarObjectStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'stellar_system_id' => 'required|exists:stellar_systems,id',
            'name'              => 'required',
            'description'       => 'required',
            'type'              => 'required',
            'disappear_at'      => 'nullable'
        ];
    }
}
