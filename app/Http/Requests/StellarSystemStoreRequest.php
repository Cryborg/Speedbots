<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StellarSystemStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'galaxy_id'   => 'required|exists:galaxies,id',
            'name'        => 'required',
            'description' => 'required',
        ];
    }
}
