<?php

namespace App\Http\Controllers;

use App\Http\Requests\StellarSystemStoreRequest;
use App\Models\StellarSystem;
use App\Models\Galaxy;
use Illuminate\Http\Request;

/**
 * Class StellarSystemController
 *
 * @package App\Http\Controllers
 * @group StellarSystem
 */
class StellarSystemController extends Controller
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
     * @param \App\Http\Requests\StellarSystemStoreRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StellarSystemStoreRequest $request)
    {
        $stellarSystem = StellarSystem::create($request->all());

        return response()->json([
            'success'   => $stellarSystem instanceof StellarSystem,
            'stellar_system_id' => $stellarSystem->id
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
