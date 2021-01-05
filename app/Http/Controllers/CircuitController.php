<?php

namespace App\Http\Controllers;

use App\Http\Requests\CircuitStoreRequest;
use App\Models\Circuit;
use Illuminate\Http\Request;

/**
 * Class CircuitController
 *
 * @package App\Http\Controllers
 * @group Circuit
 */
class CircuitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\CircuitStoreRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CircuitStoreRequest $request)
    {
        $circuit = Circuit::create($request->all());

        return response()->json([
            'success' => $circuit instanceof Circuit,
            'circuit_id' => $circuit->id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
