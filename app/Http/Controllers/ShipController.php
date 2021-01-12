<?php

namespace App\Http\Controllers;

use App\Bases\ControllerBase;
use App\Http\Requests\ShipStoreRequest;
use App\Http\Requests\ShipUpdateRequest;
use App\Models\Ship;
use App\Models\User;
use Illuminate\Http\JsonResponse;

/**
 * Class ShipController
 *
 * @package App\Http\Controllers
 * @group Ship
 */
class ShipController extends ControllerBase
{
    /**
     * List ships of a given user
     *
     * @param \App\Models\User $user
     *
     * @return JsonResponse
     */
    public function index(User $user): JsonResponse
    {
        $ships = $user->ships;

        return response()->json($ships);
    }

    /**
     * Create a new ship
     *
     * @param \App\Http\Requests\ShipStoreRequest $request
     *
     * @return JsonResponse
     */
    public function store(ShipStoreRequest $request): JsonResponse
    {
        $this->authUser->can('create');

        $ship = Ship::create([
            'user_id' => $request->get('user_id'),
            'name' => $request->get('name'),
            'class' => $request->get('class'),
            'health' => $request->get('health', 10),
        ]);

        return response()->json([
            'status' => 'success',
            'ship_id' => $ship->id
        ]);
    }

    /**
     * Show a ship details
     *
     * @param \App\Models\Ship $ship
     *
     * @return JsonResponse
     */
    public function show(Ship $ship): JsonResponse
    {
        return response()->json($ship);
    }

    /**
     * Update a ship
     *
     * @param \App\Http\Requests\ShipUpdateRequest $request
     * @param \App\Models\Ship                     $ship
     *
     * @return JsonResponse
     */
    public function update(ShipUpdateRequest $request, Ship $ship): JsonResponse
    {
        $updated = $ship->update($request->all());

        return response()->json([
            'success' => $updated,
        ]);
    }

    /**
     * Delete a ship
     *
     * @param \App\Models\Ship $ship
     *
     * @return JsonResponse
     */
    public function destroy(Ship $ship): JsonResponse
    {
        $deleted = $ship->delete();

        return response()->json([
            'success' => $deleted,
        ]);
    }
}
