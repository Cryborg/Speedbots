<?php

namespace App\Http\Controllers;

use App\Http\Requests\StellarSystemStoreRequest;
use App\Http\Requests\StellarSystemUpdateRequest;
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
class StellarSystemController extends Controller
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

    /**
     * Create a new stellar system to the given galaxy
     *
     * @param \App\Http\Requests\StellarSystemStoreRequest $request
     * @param \App\Models\Galaxy                           $galaxy
     *
     * @return JsonResponse
     */
    public function store(StellarSystemStoreRequest $request, Galaxy $galaxy): JsonResponse
    {
        $stellarSystem = $galaxy->stellarSystems()->create($request->all());

        return response()->json([
            'success'   => $stellarSystem instanceof StellarSystem,
            'stellar_system_id' => $stellarSystem->id
        ]);
    }
}
