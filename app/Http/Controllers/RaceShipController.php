<?php

namespace App\Http\Controllers;

use App\Models\Race;
use App\Models\Ship;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RaceShipController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Models\Race $race
     * @param \App\Models\Ship $ship
     *
     * @return JsonResponse
     */
    public function update(Race $race, Ship $ship): JsonResponse
    {
        if (!$ship->isSpeedbot()) {
            return response()->json([
                'success' => false,
                'message' => trans('race.not_a_speedbot'),
            ]);
        }

        try {
            $race->ships()->attach($ship);
        } catch (QueryException $e) {
            $message = $e->getMessage();

            // FIXME: complete this when we encounter other errors
            switch ($e->getCode()) {
                case 23000:
                    $message = 'This ship is already on the starting block';
                    break;
            }

            return response()->json([
                'success' => false,
                'code' => $e->getCode(),        // FIXME: remove this once we have all errors we need
                'message' => $message,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }

        return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Race $race
     * @param \App\Models\Ship $ship
     *
     * @return JsonResponse
     */
    public function destroy(Race $race, Ship $ship): JsonResponse
    {
        $race->ships()->detach($ship);

        return response()->json([
            'success' => true,
        ]);
    }
}
