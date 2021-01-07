<?php

namespace App\Http\Controllers;

use App\Bases\ControllerBase;
use App\Models\Circuit;
use App\Models\Ship;
use App\Models\Weapon;
use Illuminate\Support\Facades\Response;

/**
 * Class RaceController
 *
 * @package App\Http\Controllers
 * @group   Race
 */
class RaceController extends ControllerBase
{
    /**
     * Test de course grandeur nature ! :D
     *
     * @throws \Exception
     */
    public function start()
    {
        $attackLogs = collect();

        // Take first circuit in DB
        $circuit = Circuit::firstOrFail();

        // Pick some random SB
        $opponents = Ship::inRandomOrder()->limit(15)->get();

        $track = [];

        $opponents->each(static function(Ship $opponent) use ($circuit, &$track) {
            $lPosition = random_int(1, $circuit->length);
            $wPosition = random_int(1, $circuit->width);

            $track[$lPosition][$wPosition][] = [
                'direction' => random_int(1, 2) === 1 ? '+' : '-',
                'speedbot' => $opponent,
            ];
        });

        $start = $track;

        // Now that all SB are on the track,
        // we can move them and make them fight
        for ($i = 1; $i <= 700; $i++) {
            $end = [];

            // Move every SB
            foreach ($track as $lengthPosition => $pos) {
                foreach ($pos as $widthPosition => $data) {
                    foreach ($data as $speedbotData) {
                        $newLengthPosition = $this->getNewLengthPosition($circuit, $lengthPosition, $speedbotData['direction']);

                        // Every 100 moves, there is one chance out of 4 that the SB changes direction,
                        // so that every SB can have a chance to fight every other SB
                        if (($i % 100 === 0) && random_int(1, 4) === 1) {
                            $speedbotData['direction'] = $speedbotData['direction'] === '+' ? '-' : '+';
                        }

                        $end[$newLengthPosition][$widthPosition][] = [
                            'direction' => $speedbotData['direction'],
                            'speedbot'  => $speedbotData['speedbot'],
                        ];
                    }
                }
            }

            $track = $end;

            // Fight!
            foreach ($track as $lengthPosition => $pos) {
                foreach ($pos as $widthPosition => $speedbotsData) {
                    foreach ($speedbotsData as $speedbotData) {
                        $enemyAttackResult = $this->attackEnemy($circuit, $track, $speedbotData, $lengthPosition, $widthPosition);

                        if ($enemyAttackResult !== null && $enemyAttackResult->isNotEmpty()) {
                            $attackLogs->push($enemyAttackResult);
                        }
                    }
                }
            }
        }

        return Response::view('race.start', [
            'circuit' => $circuit,
            'track_start' => $start,
            'track_end' => $end,
            'logs' => $attackLogs,
        ]);
    }

    /**
     * Try to find an enemy in range, and attack it
     *
     * @param \App\Models\Circuit $circuit
     * @param array               $track
     * @param array               $data
     * @param int                 $length
     * @param int                 $width
     *
     * @return \Illuminate\Support\Collection|null
     */
    private function attackEnemy(Circuit $circuit, array $track, array $data, int $length, int $width)
    {
        $speedbot = $data['speedbot'];
        $direction = $data['direction'];
        $attacks = collect();
        $attackLog = collect();

        // Don't attack friendly SB!
        if ($speedbot->user->id === $this->authUser->id) {
            return null;
        }

        // Loop through all SB weapons
        $speedbot->weapons->each(static function(Weapon $weapon) use ($circuit, $track, $length, &$attacks) {
            $range = $weapon->range;

            // TODO: take $direction into account
            for ($l = $length - $range; $l <= $length + $range; $l++) {
                $pos = $l;

                // It may be out of track bounds
                if ($l < 1) {
                    $pos = $circuit->length - $l;
                }

                if ($l > $circuit->length) {
                    $pos = $l - $circuit->length;
                }

                // If a SB is in length range
                if (array_key_exists($pos, $track)) {
                    // TODO: Check if the SB is in width range
                    foreach ($track[$pos] as $w => $data) {
                        foreach ($data as $speedbotData) {
                            $attacks->push([
                                'target' => $speedbotData['speedbot'],
                                'weapon' => $weapon
                            ]);
                        }
                    }
                }
            }
        });

        $attacks->each(static function($attack) use (&$attackLog, $speedbot) {
            $attackLog->push((new static)->attack($speedbot, $attack['target'], $attack['weapon']));
        });

        return $attackLog;
    }

    private function attack($shooter, $target, $weapon)
    {
        return trans('race.attack', [
            'shooter' => $shooter->user->name,
            'target' => $target->user->name,
            'weapon' => $weapon->name,
        ]);
    }

    /**
     * @param \App\Models\Circuit $circuit
     * @param                     $lengthPosition
     * @param                     $direction
     *
     * @return int|mixed
     */
    private function getNewLengthPosition(Circuit $circuit, int $lengthPosition, string $direction): int
    {
//        echo ('From ' . $lengthPosition);

        if ($direction === '+') {
            if (++$lengthPosition > $circuit->length) {
                $lengthPosition -= $circuit->length;
            }

//            echo (' to ' . $lengthPosition . ' +<br>');
        } else {

            if (--$lengthPosition < 1) {
                $lengthPosition = $circuit->length - $lengthPosition;
            }

//            echo(' to ' . $lengthPosition . ' -<br>');
        }

        return $lengthPosition;
    }
}
