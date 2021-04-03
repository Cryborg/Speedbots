<?php

namespace App\Http\Controllers;

use App\Bases\ControllerBase;
use App\Http\Requests\CircuitStoreRequest;
use App\Http\Requests\CircuitUpdateRequest;
use App\Models\Circuit;
use App\Traits\CrudTrait;
use Illuminate\Http\JsonResponse;

/**
 * Class CircuitController
 *
 * @package App\Http\Controllers
 * @group Circuit
 */
class CircuitController extends ControllerBase
{
    use CrudTrait;

    public function model()
    {
        return Circuit::class;
    }

    protected function storeRules(): array
    {
        return [
            'name' => 'required|string',
            'length' => 'required|integer',
            'gravity' => 'integer',
            'gain_kill' => 'required|integer',
            'gain_victory' => 'required|integer',
        ];
    }

    protected function updateRules(): array
    {
        return [
            'name' => 'string',
            'length' => 'integer',
            'gravity' => 'integer',
            'gain_kill' => 'integer',
            'gain_victory' => 'integer',
        ];
    }

    /**
     * List circuits
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        /**
         * Determine how we filter this:
         * - by stellar system
         * - by planet
         * - by creator
         * - ...
         */

        // For the moment, show all
        return response()->json([
            'circuits' => Circuit::all(),
        ]);
    }
}
