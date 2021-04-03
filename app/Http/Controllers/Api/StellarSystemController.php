<?php

namespace App\Http\Controllers\Api;

use App\Bases\ControllerBase;
use App\Models\StellarSystem;
use App\Models\Galaxy;
use App\Traits\CrudTrait;
use Illuminate\Http\JsonResponse;

/**
 * Class StellarSystemController
 *
 * @package App\Http\Controllers
 * @group StellarSystem
 */
class StellarSystemController extends ControllerBase
{
    use CrudTrait;

    function model()
    {
        return StellarSystem::class;
    }

    /**
     * @return array
     */
    protected function storeRules(): array
    {
        return [
            'name'        => 'required',
            'description' => 'required',
            'coord_x'     => 'required',
            'coord_y'     => 'required',
            'color'       => 'required'
        ];
    }

    /**
     * @return array
     */
    protected function updateRules(): array
    {
        return [
            'name'        => 'string',
            'description' => 'text',
            'coord_x'     => 'int',
            'coord_y'     => 'int',
            'color'       => 'int'
        ];
    }

    /**
     * List all stellar systems of a given galaxy
     *
     * @param \App\Models\Galaxy $galaxy
     *
     * @return JsonResponse
     */
    public function index(Galaxy $galaxy): JsonResponse
    {
        $stellarSystems = $galaxy->stellarSystems;

        return response()->json($stellarSystems);
    }
}
