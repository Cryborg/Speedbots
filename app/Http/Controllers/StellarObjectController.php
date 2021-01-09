<?php

namespace App\Http\Controllers;

use App\Http\Requests\StellarObjectStoreRequest;
use App\Models\StellarObject;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(StellarObject::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StellarObjectStoreRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StellarObjectStoreRequest $request)
    {
        $stellarObject = StellarObject::create($request->all());

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
