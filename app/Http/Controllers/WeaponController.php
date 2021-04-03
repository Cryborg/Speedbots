<?php

namespace App\Http\Controllers;

use App\Bases\ControllerBase;
use App\Models\Weapon;
use App\Traits\CrudTrait;

/**
 * Class WeaponController
 *
 * @package App\Http\Controllers
 * @group Weapon
 */
class WeaponController extends ControllerBase
{
    use CrudTrait;

    function model()
    {
        return Weapon::class;
    }

    protected function storeRules(): array
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

    protected function updateRules(): array
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
