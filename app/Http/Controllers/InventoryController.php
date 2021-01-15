<?php

namespace App\Http\Controllers;

use App\Models\Component;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class InventoryController
 *
 * The table used is component_user.
 *
 * @package App\Http\Controllers
 * @group Inventory
 */
class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \App\Models\User $user
     *
     * @return JsonResponse
     */
    public function index(User $user): JsonResponse
    {
        return response()->json($user->components);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User         $user
     *
     * @return JsonResponse
     */
    public function store(Request $request, User $user): JsonResponse
    {
        $component = Component::findOrFail($request->get('component_id'));

        $default = [
            'health' => $component->health,
            'level' => 1,
        ];

        if ($request->get('level', null) !== null) {
            $default['level'] = $request->get('level');
        }

        if ($request->get('health', null) !== null) {
            $default['health'] = $request->get('health');
        }

        $user->components()->attach([
            $component->id => $default
        ]);

        return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * The Component variable is $inventory because of the apiResource route.
     * I didn't want to create a route to fix this. Maybe later... maybe not...
     *
     * @param \App\Models\User      $user
     * @param \App\Models\Component $inventory
     *
     * @return JsonResponse
     */
    public function show(User $user, Component $inventory): JsonResponse
    {
        $userComponent = $user->components->find($inventory->id);

        return response()->json([
            'success' => $userComponent !== null,
            'result' => $userComponent ?: trans('inventory.component_not_found'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User         $user
     * @param \App\Models\Component    $component
     *
     * @return JsonResponse
     */
    public function update(Request $request, User $user, Component $component): JsonResponse
    {
        $updated = $user->components()->update([
            $component->id => $request->all()
        ]);

        return response()->json([
            'success' => $updated,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User      $user
     * @param \App\Models\Component $inventory
     *
     * @return JsonResponse
     */
    public function destroy(User $user, Component $inventory): JsonResponse
    {
        $detached = $user->components()->detach($inventory);

        return response()->json([
            'success' => $detached,
        ]);
    }
}
