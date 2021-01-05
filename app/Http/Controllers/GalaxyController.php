<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalaxyStoreRequest;
use App\Models\Galaxy;
use Illuminate\Http\Request;

class GalaxyController extends Controller
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
     * @param \App\Http\Requests\GalaxyStoreRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(GalaxyStoreRequest $request)
    {
        $galaxy = Galaxy::create($request->all());

        return response()->json([
            'success'   => $galaxy instanceof Galaxy,
            'galaxy_id' => $galaxy->id
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
