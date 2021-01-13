<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalaxyStoreRequest;
use App\Http\Requests\GalaxyUpdateRequest;
use App\Models\Galaxy;
use App\Traits\CrudTrait;

/**
 * Class GalaxyController
 *
 * @package App\Http\Controllers
 * @group Galaxy
 */
class GalaxyController extends Controller
{
    use CrudTrait;

    function model()
    {
        return Galaxy::class;
    }

    protected function storeRules(): array
    {
        return [
            'name'        => 'required',
            'description' => 'required',
        ];
    }

    protected function updateRules(): array
    {
        return [
            'name'        => 'string',
            'description' => 'string',
        ];
    }
}
