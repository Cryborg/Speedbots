<?php

namespace App\Http\Controllers;

use App\Http\Requests\RaceStoreRequest;
use App\Http\Requests\RaceUpdateRequest;
use App\Models\Race;
use App\Models\Ship;
use App\Traits\CrudTrait;
use Illuminate\Http\JsonResponse;

class RaceController extends Controller
{
    use CrudTrait;

    function model()
    {
        return Race::class;
    }

    protected function storeRules(): array
    {
        return [
            'circuit_id'   => 'required|exists:circuits,id',
            'nb_opponents' => 'required|integer',
            'start_at'     => 'datetime',
            'ended_at'     => 'datetime',
        ];
    }

    protected function updateRules(): array
    {
        return [
            'circuit_id'   => 'exists:circuits,id',
            'nb_opponents' => 'integer',
            'start_at'     => 'datetime',
            'ended_at'     => 'datetime',
        ];
    }

    /**
     * List of ended races
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $finishedRaces = Race::where('ended_at')->get();

        return response()->json($finishedRaces);
    }

    /**
     * Register a speedbot on a race
     *
     * @param \App\Models\Race $race
     * @param \App\Models\Ship $ship
     *
     * @return JsonResponse
     */
    public function registerSpeedbot(Race $race, Ship $ship): JsonResponse
    {
        if (!$ship->isSpeedbot()) {
            return response()->json([
                'success' => false,
                'message' => trans('race.not_a_speedbot'),
            ]);
        }

        try {
            $race->ships()->attach($ship);
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

    // Retirer un SB d'une course
    // Infos sur une course : pas encore lancée, en cours, terminée
}
