<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WeaponUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'      => 'string',
            'type'      => 'string',
            'damage'    => 'numeric',
            'ammo'      => 'integer',
            'salvo'     => 'integer',
            'range'     => 'integer',
            'accuracy'  => 'integer',
            'direction' => 'integer',
            'quality'   => 'integer',
            'rarity'    => 'integer',
        ];
    }
}
