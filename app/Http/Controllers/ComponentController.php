<?php

namespace App\Http\Controllers;

use App\Bases\ControllerBase;
use App\Models\Component;
use App\Traits\CrudTrait;

/**
 * Class ComponentController
 *
 * @package App\Http\Controllers
 * @group Component
 */
class ComponentController extends ControllerBase
{
    use CrudTrait;

    function model()
    {
        return Component::class;
    }

    protected function storeRules(): array
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

    protected function updateRules(): array
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
