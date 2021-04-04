<?php

namespace App\Http\Controllers\Api;

use App\Bases\ControllerBase;
use App\Models\Race;
use App\Traits\CrudTrait;
use Illuminate\Http\JsonResponse;

class RaceController extends ControllerBase
{
    use CrudTrait;

    public function model(): string
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
}