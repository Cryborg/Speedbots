<?php

namespace App\Http\Controllers;

use App\Bases\ControllerBase;
use App\Http\Requests\ShipStoreRequest;
use App\Models\Ship;

/**
 * Class ShipController
 *
 * @package App\Http\Controllers
 * @group Ship
 */
class ShipController extends ControllerBase
{
    /**
     * Show ships
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $ships = $this->authUser->ships;

        return response()->json($ships);
    }

    /**
     * Create a new ship
     *
     * @param \App\Http\Requests\ShipStoreRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ShipStoreRequest $request)
    {
        $this->authUser->can('create');

        $ship = Ship::create([
            'user_id' => $request->get('user_id'),
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Ship $ship)
    {
        return response()->json($ship);
    }

    /**
     * Update a ship
     *
     * @param \App\Http\Requests\ShipStoreRequest $request
     * @param \App\Models\Ship                    $ship
     *
     * @return \Illuminate\Http\Response
     */
    public function update(ShipStoreRequest $request, Ship $ship)
    {
        //
    }

    /**
     * Delete a ship
     *
     * @param \App\Models\Ship $ship
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ship $ship)
    {
        //
    }
}
