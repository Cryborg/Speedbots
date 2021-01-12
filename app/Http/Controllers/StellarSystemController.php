<?php

namespace App\Http\Controllers;

use App\Http\Requests\StellarSystemStoreRequest;
use App\Models\StellarSystem;
use App\Models\Galaxy;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class StellarSystemController
 *
 * @package App\Http\Controllers
 * @group StellarSystem
 */
class StellarSystemController extends Controller
{
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

    /**
     * Show a stellar system
     *
     * @param \App\Models\StellarSystem $stellarSystem
     *
     * @return JsonResponse
     */
    public function show(StellarSystem $stellarSystem): JsonResponse
    {
        return response()->json($stellarSystem);
    }

    /**
     * Update a stellar system
     *
     * @param \Illuminate\Http\Request  $request
     * @param \App\Models\StellarSystem $stellarSystem
     *
     * @return JsonResponse
     */
    public function update(Request $request, StellarSystem $stellarSystem): JsonResponse
    {
        $updated = $stellarSystem->update($request->all());

        return response()->json([
            'success' => $updated,
        ]);
    }

    /**
     * Delete a stellar system
     *
     * @param \App\Models\StellarSystem $stellarSystem
     *
     * @return JsonResponse
     * @throws \Exception
     */
    public function destroy(StellarSystem $stellarSystem): JsonResponse
    {
        $deleted = $stellarSystem->delete();

        return response()->json([
            'success' => $deleted,
        ]);
    }
}
