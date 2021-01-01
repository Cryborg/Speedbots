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
     */
    public function store(ShipStoreRequest $request)
    {
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\ShipStoreRequest $request
     * @param int                                 $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(ShipStoreRequest $request, int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        //
    }
}
