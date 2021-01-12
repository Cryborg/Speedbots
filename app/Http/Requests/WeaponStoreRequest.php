<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WeaponStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'      => 'required|string',
            'type'      => 'required|string',
            'damage'    => 'required|numeric',
            'ammo'      => 'required|integer',
            'salvo'     => 'required|integer',
            'range'     => 'required|integer',
            'accuracy'  => 'required|integer',
            'direction' => 'integer',
            'quality'   => 'integer',
            'rarity'    => 'integer',
        ];
    }
}
