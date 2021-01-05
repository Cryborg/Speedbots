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
     * List circuits
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Create a circuit
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
     * Show a circuit details
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update a circuit
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
     * Delete a circuit
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
