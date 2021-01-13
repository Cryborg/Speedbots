<?php

namespace App\Http\Controllers;

use App\Http\Requests\RaceStoreRequest;
use App\Http\Requests\RaceUpdateRequest;
use App\Models\Race;
use App\Models\Ship;
use App\Traits\CrudTrait;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;

class RaceController extends Controller
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
