<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalaxyStoreRequest;
use App\Http\Requests\GalaxyUpdateRequest;
use App\Models\Galaxy;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class GalaxyController
 *
 * @package App\Http\Controllers
 * @group Galaxy
 */
class GalaxyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $galaxies = Galaxy::all();

        return response()->json([
            'galaxies' => $galaxies,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\GalaxyStoreRequest $request
     *
     * @return JsonResponse
     */
    public function store(GalaxyStoreRequest $request): JsonResponse
    {
        $galaxy = Galaxy::create($request->all());

        return response()->json([
            'success'   => $galaxy instanceof Galaxy,
            'galaxy_id' => $galaxy->id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Galaxy $galaxy
     *
     * @return JsonResponse
     */
    public function show(Galaxy $galaxy): JsonResponse
    {
        return response()->json([
            'galaxy' => $galaxy,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\GalaxyUpdateRequest $request
     * @param \App\Models\Galaxy                     $galaxy
     *
     * @return JsonResponse
     */
    public function update(GalaxyUpdateRequest $request, Galaxy $galaxy): JsonResponse
    {
        $updated = $galaxy->update($request->all());

        return response()->json([
            'success' => $updated,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Galaxy $galaxy
     *
     * @return JsonResponse
     * @throws \Exception
     */
    public function destroy(Galaxy $galaxy): JsonResponse
    {
        $deleted = $galaxy->delete();

        return response()->json([
            'success' => $deleted,
        ]);
    }
}
