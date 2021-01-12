<?php

namespace App\Http\Controllers;

use App\Http\Requests\CircuitStoreRequest;
use App\Http\Requests\CircuitUpdateRequest;
use App\Models\Circuit;
use Illuminate\Http\JsonResponse;

/**
 * Class CircuitController
 *
 * @package App\Http\Controllers
 * @group Circuit
 */
class CircuitController extends Controller
{
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

    /**
     * Create a circuit
     *
     * @param \App\Http\Requests\CircuitStoreRequest $request
     *
     * @return JsonResponse
     */
    public function store(CircuitStoreRequest $request): JsonResponse
    {
        $circuit = Circuit::create($request->all());

        return response()->json([
            'success' => $circuit instanceof Circuit,
            'circuit_id' => $circuit->id
        ]);
    }

    /**
     * Show a circuit details
     *
     * @param \App\Models\Circuit $circuit
     *
     * @return JsonResponse
     */
    public function show(Circuit $circuit): JsonResponse
    {
        return response()->json([
            'circuit' => $circuit
        ]);
    }

    /**
     * Update a circuit
     *
     * @param \App\Http\Requests\CircuitUpdateRequest $request
     * @param \App\Models\Circuit                     $circuit
     *
     * @return JsonResponse
     */
    public function update(CircuitUpdateRequest $request, Circuit $circuit): JsonResponse
    {
        $updated = $circuit->update($request->all());

        return response()->json([
            'success' => $updated,
        ]);
    }

    /**
     * Delete a circuit
     *
     * @param \App\Models\Circuit $circuit
     *
     * @return JsonResponse
     * @throws \Exception
     */
    public function destroy(Circuit $circuit): JsonResponse
    {
        $deleted = $circuit->delete();

        return response()->json([
            'success' => $deleted,
        ]);
    }
}
