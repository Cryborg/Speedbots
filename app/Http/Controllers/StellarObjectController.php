<?php

namespace App\Http\Controllers;

use App\Http\Requests\StellarObjectStoreRequest;
use App\Models\StellarObject;
use App\Models\StellarSystem;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class StellarObjectController
 *
 * @package App\Http\Controllers
 * @group StellarObject
 */
class StellarObjectController extends Controller
{
    /**
     * List stellar objects of a given stellar system
     *
     * @param \App\Models\StellarSystem $stellarSystem Stellar system
     *
     * @return JsonResponse
     */
    public function index(StellarSystem $stellarSystem): JsonResponse
    {
        return response()->json([
            'stellar_objects' => $stellarSystem->stellarObjects,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StellarObjectStoreRequest $request
     * @param \App\Models\StellarSystem                    $stellarSystem Stellar system
     *
     * @return JsonResponse
     */
    public function store(StellarObjectStoreRequest $request, StellarSystem $stellarSystem): JsonResponse
    {
        $stellarObject = $stellarSystem->stellarObjects()->create($request->all());

        return response()->json([
            'success'           => $stellarObject instanceof StellarObject,
            'stellar_object_id' => $stellarObject->id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\StellarObject $stellarObject Stellar Object to show
     *
     * @return JsonResponse
     */
    public function show(StellarObject $stellarObject): JsonResponse
    {
        return response()->json([
            'stellar_object' => $stellarObject
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request  $request
     * @param \App\Models\StellarObject $stellarObject
     *
     * @return JsonResponse
     */
    public function update(Request $request, StellarObject $stellarObject): JsonResponse
    {
        $updated = $stellarObject->update($request->all());

        return response()->json([
            'success' => $updated,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\StellarObject $stellarObject
     *
     * @return JsonResponse
     * @throws \Exception
     */
    public function destroy(StellarObject $stellarObject): JsonResponse
    {
        $deleted = $stellarObject->delete();

        return response()->json([
            'success' => $deleted,
        ]);
    }
}
