<?php

namespace App\Http\Controllers;

use App\Models\Component;
use App\Models\Ship;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;

class ShipComponentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Models\Ship      $ship
     * @param \App\Models\Component $component
     *
     * @return JsonResponse
     */
    public function update(Ship $ship, Component $component): JsonResponse
    {
        if (!$ship->isSpeedbot()) {
            return response()->json([
                'success' => false,
                'message' => trans('race.not_a_speedbot'),
            ]);
        }

        try {
            $ship->components()->attach([$component->id => ['health' => $component->health]]);
        } catch (QueryException $e) {
            $message = $e->getMessage();

            // FIXME: complete this when we encounter other errors
            switch ($e->getCode()) {
                case 23000:
                    $message = 'This ship already has this component';
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
                'code' => $e->getCode(),
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
     * @param \App\Models\Ship      $ship
     * @param \App\Models\Component $component
     *
     * @return JsonResponse
     */
    public function destroy(Ship $ship, Component $component): JsonResponse
    {
        $ship->components()->detach($component);

        return response()->json([
            'success' => true,
        ]);
    }
}
