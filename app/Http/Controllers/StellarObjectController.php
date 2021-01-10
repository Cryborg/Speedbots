<?php

namespace App\Http\Controllers;

use App\Http\Requests\StellarObjectStoreRequest;
use App\Models\StellarObject;
use App\Models\StellarSystem;
use Illuminate\Http\Request;

/**
 * Class StellarObjectController
 *
 * @package App\Http\Controllers
 * @group StellarObject
 */
class StellarObjectController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @param  int  $stellarSystem Identifiant of stellar system
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $objects = StellarSystem::find($id)->stellarObjects;

        return response()->json($objects);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StellarObjectStoreRequest $request
     * @param  int  $stellarSystem Identifiant of stellar system
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StellarObjectStoreRequest $request, $stellarSystem)
    {
        $stellarObject = StellarSystem::find($stellarSystem)->stellarObjects()->create($request->all());

        return response()->json([
            'success'           => $stellarObject instanceof StellarObject,
            'stellar_object_id' => $stellarObject->id
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
        $stellarObject = StellarObject::find($id);

        return response()->json([
            'success'        => $stellarObject instanceof StellarObject,
            'stellar_object' => $stellarObject
        ]);
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
