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
     * @param  App\Models\StellarSystem $stellarSystem Stellar system
     *
     * @return \Illuminate\Http\Response
     */
    public function index(StellarSystem $stellarSystem)
    {
        return response()->json($stellarSystem->stellarObjects);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StellarObjectStoreRequest $request
     * @param  App\Models\StellarSystem $stellarSystem Stellar system
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StellarObjectStoreRequest $request, StellarSystem $stellarSystem)
    {
        $stellarObject = $stellarSystem->stellarObjects()->create($request->all());

        return response()->json([
            'success'           => $stellarObject instanceof StellarObject,
            'stellar_object_id' => $stellarObject->id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\StellarSystem $stellarObject Stellar Object to show
     * @return \Illuminate\Http\Response
     */
    public function show(StellarObject $stellarObject)
    {
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
