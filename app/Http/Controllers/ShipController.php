<?php

namespace App\Http\Controllers;

use App\Bases\ControllerBase;
use App\Http\Requests\ShipStoreRequest;
use App\Models\Ship;

class ShipController extends ControllerBase
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $ships = $this->authUser->ships;

        return response()->json($ships);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\ShipStoreRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
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
     * Display the specified resource.
     *
     * @param \App\Models\Ship $ship
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Ship $ship)
    {
        return response()->json($ship);
    }

    /**
     * Update the specified resource in storage.
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
     * Remove the specified resource from storage.
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
