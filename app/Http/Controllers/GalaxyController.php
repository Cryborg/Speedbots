<?php

namespace App\Http\Controllers;

use App\Bases\ControllerBase;
use App\Models\Galaxy;
use App\Traits\CrudTrait;
use Illuminate\Http\Request;

/**
 * Class GalaxyController
 *
 * @package App\Http\Controllers
 * @group Galaxy
 */
class GalaxyController extends ControllerBase
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

    public function show(Request $request, Galaxy $galaxy)
    {
        if ($request->get('<include_systems>', null) !== null) {
            return response()->json([
                $galaxy,
                $galaxy->stellarSystems
            ]);
        }

        return response()->json([
            $galaxy,
        ]);
    }
}
