<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComponentStoreRequest;
use App\Http\Requests\ComponentUpdateRequest;
use App\Models\Component;
use Illuminate\Http\JsonResponse;

/**
 * Class ComponentController
 *
 * @package App\Http\Controllers
 * @group Component
 */
class ComponentController extends Controller
{
    /**
     * List components
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        /**
         * List all components?
         * List all components of a SB?
         */

        $components = Component::all();

        return response()->json([
            'components' => $components,
        ]);
    }

    /**
     * Create a new component
     *
     * @param \App\Http\Requests\ComponentStoreRequest $request
     *
     * @return JsonResponse
     */
    public function store(ComponentStoreRequest $request): JsonResponse
    {
        $component = Component::create($request->all());

        return response()->json([
            'success' => $component instanceof Component,
        ]);
    }

    /**
     * Show a component details
     *
     * @param \App\Models\Component $component
     *
     * @return JsonResponse
     */
    public function show(Component $component): JsonResponse
    {
        return response()->json([
            'component' => $component,
        ]);
    }

    /**
     * Update a component
     *
     * @param \App\Http\Requests\ComponentUpdateRequest $request
     * @param \App\Models\Component                     $component
     *
     * @return JsonResponse
     */
    public function update(ComponentUpdateRequest $request, Component $component): JsonResponse
    {
        $updated = $component->update($request->all());

        return response()->json([
            'success' => $updated,
        ]);
    }

    /**
     * Delete a component
     *
     * @param \App\Models\Component $component
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Component $component): JsonResponse
    {
        $deleted = $component->delete();

        return response()->json([
            'success' => $deleted,
        ]);
    }
}
