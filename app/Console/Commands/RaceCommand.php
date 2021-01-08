<?php

namespace App\Console\Commands;

use App\Models\Circuit;
use App\Models\RaceLog;
use App\Models\Ship;
use App\Models\User;
use App\Models\Weapon;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class RaceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'race:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start a new race';

    public $authUser;

    public Collection $attackLogs;

    public int $speedbotsRacing;

    public int $nbSpeedbots;

    public string $raceId;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        Auth::login(User::find(1), true);

        $this->attackLogs = collect();

        $this->authUser = Auth::user();

        $this->nbSpeedbots = 50;

        $this->raceId = Str::random(10);
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        ini_set('max_execution_time', -1);
        $startTime = now();

        // Take first circuit in DB
        $circuit = Circuit::firstOrFail();

        // Pick some random SB
        $opponents = Ship::inRandomOrder()->limit($this->nbSpeedbots)->get();

        $this->speedbotsRacing = $opponents->count();

        $track = [];

        $opponents->each(static function(Ship $opponent) use ($circuit, &$track) {
            $lPosition = mt_rand(1, $circuit->length);
            $wPosition = mt_rand(1, $circuit->width);

            $track[$lPosition][$wPosition][] = [
                'direction' => mt_rand(1, 2) === 1 ? '+' : '-',
                'speedbot' => $opponent,
            ];
        });

        // Now that all SB are on the track,
        // we can move them and make them fight
        $turn = 0;
        while ($this->speedbotsRacing > 3) {
            $end = [];
            ++$turn;

            // Move every SB
            foreach ($track as $lengthPosition => $pos) {
                foreach ($pos as $widthPosition => $data) {
                    foreach ($data as $speedbotData) {
                        // Check if the SB is still ok to race
                        if ($this->isSpeedbotStillRacing($speedbotData['speedbot'])) {
                            $newLengthPosition = $this->getNewLengthPosition($circuit, $lengthPosition, $speedbotData['direction']);

                            // Every 100 moves, there is one chance out of 4 that the SB changes direction,
                            // so that every SB can have a chance to fight every other SB
                            if (($turn % 100 === 0) && mt_rand(1, 4) === 1) {
                                $speedbotData['direction'] = $speedbotData['direction'] === '+' ? '-' : '+';
                            }

                            $end[$newLengthPosition][$widthPosition][] = [
                                'direction' => $speedbotData['direction'],
                                'speedbot'  => $speedbotData['speedbot'],
                            ];
                        }
                    }
                }
            }

            $track = $end;

            // Fight!
            foreach ($track as $lengthPosition => $pos) {
                foreach ($pos as $widthPosition => $speedbotsData) {
                    foreach ($speedbotsData as $speedbotData) {
                        $this->attackEnemy($circuit, $track, $speedbotData, $lengthPosition, $widthPosition);
                    }
                }
            }
        }

        $diff = now()->getTimestamp() - $startTime->getTimestamp();

        $this->info('Ended in ' . $diff . ' seconds for ' . $this->nbSpeedbots . ' speedbots.');
    }

    /**
     * Try to find an enemy in range, and attack it
     *
     * @param \App\Models\Circuit $circuit
     * @param array               $track
     * @param array               $data
     * @param int                 $length
     * @param int                 $width
     */
    private function attackEnemy(Circuit $circuit, array $track, array $data, int $length, int $width)
    {
        $speedbot = $data['speedbot'];
        $direction = $data['direction'];
        $attacks = collect();

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

        // Fire with all weapons
        foreach ($attacks as $attack) {
            $this->attack($speedbot, $attack['target'], $attack['weapon']);
        }
    }

    /**
     * @param $shooter
     * @param $target
     * @param $weapon
     */
    private function attack($shooter, $target, $weapon): void
    {
        // Number of projectiles that hit the target
        $hits = ($weapon->accuracy * $weapon->salvo) / 100;

        $totalDamage = $hits * $weapon->damage;

        // Plus or minus 3
        $totalDamage += mt_rand(-3, 3);

        // Check if the target has a protection
        $hull = $target->hull();

        if ($hull->count() > 0) {
            $hull->pivot->health -= $totalDamage;

            if ($hull->pivot->health < 0) {
                $hull->pivot->health = 0;
            }

            $hull->pivot->save();

            $message = trans('race.component_damage', [
                'shooter'   => $shooter->user->name,
                'component' => 'hull',
                'damage'    => $totalDamage
            ]);

            $this->writeLog($message);
        }
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
        if ($direction === '+') {
            if (++$lengthPosition > $circuit->length) {
                $lengthPosition -= $circuit->length;
            }
        } else {

            if (--$lengthPosition < 1) {
                $lengthPosition = $circuit->length - $lengthPosition;
            }
        }

        return $lengthPosition;
    }

    private function isSpeedbotStillRacing($speedbot)
    {
        if ($speedbot->hull()->pivot->health > 0) {
            return true;
        }

        $message = $this->speedbotsRacing-- . ' - ' . $speedbot->user->name . ' has lost a SB!';

        $this->writeLog($message);

        return false;
    }

    private function writeLog($message)
    {
        RaceLog::create([
            'race_id'    => $this->raceId,
            'comments'   => $message,
        ]);
    }

}
