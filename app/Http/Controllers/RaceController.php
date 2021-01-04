<?php

namespace App\Http\Controllers;

use App\Bases\ControllerBase;
use App\Models\Circuit;
use App\Models\Ship;
use App\Models\User;
use Illuminate\Support\Facades\Response;

class RaceController extends ControllerBase
{
    /**
     * Test de course grandeur nature ! :D
     */
    public function start()
    {
        // Take first circuit in DB
        $circuit = Circuit::first();

        // Pick some random SB
        $opponents = Ship::inRandomOrder()->limit(15)->get();

        $track = [];

        $opponents->each(static function(Ship $opponent) use ($circuit, &$track) {
            $lPosition = random_int(1, $circuit->length);
            $wPosition = random_int(1, $circuit->width);

            $track[$lPosition] = [
                $wPosition => [
                    'direction' => random_int(1, 2) === 1 ? '+' : '-',
                    'opponent' => $opponent,
                ]
            ];
        });

        $start = $track;

        // Now that all SB are on the track, let's move them!
        for ($i = 1; $i <= 10; $i++) {
            $end = [];

            foreach ($track as $length => $pos) {
                foreach ($pos as $width => $data) {
                    if ($data['direction'] === '+') {
                        $length++;
                    } else {
                        $length--;
                    }

                    $end[$length] = [
                        $width => [
                            'direction' => $data['direction'],
                            'opponent' => $data['opponent'],
                        ]
                    ];
                }
            }

            $track = $end;
        }

        return Response::view('race.start', [
            'circuit' => $circuit,
            'track_start' => $start,
            'track_end' => $end,
        ]);
    }
}
