<?php

namespace App\Console\Commands\Race;

use App\Models\Circuit;
use App\Models\Race;
use App\Models\RaceLog;
use App\Models\Ship;
use App\Models\User;
use App\Models\Weapon;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class StartCommand extends Command
{
    public            $authUser;

    public Collection $attackLogs;

    public Collection $speedbotsRacing;

    public int        $nbSpeedbotsAtStart;

    public Race       $race;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'race:start
                            {--r|race=  : ID of the race to start}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start a new race';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        //Auth::login(User::find(1), true);

        // Logs all attacks
        $this->attackLogs = collect();

        $this->authUser = Auth::user();
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

        $raceId = $this->option('race');

        if ($raceId && is_numeric($raceId)) {
            $race = Race::where('id', $raceId)->first();

            if ($race === null) {
                $this->error('The race ID#' . $raceId . ' does not exist');
                return 0;
            }

            if ($race->ended_at !== null) {
                $this->info('This race has already ended');
                return 0;
            }

            $nbSpeedbotsReady = $race->ships->count();
            if ($nbSpeedbotsReady < $race->nb_opponents) {
                $this->info('Waiting for some SB to join in! (' . $nbSpeedbotsReady . '/' . $race->nb_opponents . ')'
                    . "\n\n" . '(DEV) Run \'php artisan race:queue -r ' . $race->id . '\' first');
                return 0;
            }

            $this->nbSpeedbotsAtStart = $race->nb_opponents;
            $this->race = $race;
        } else {
            $this->info('┌─────────────────────────────────────────────────────┐');
            $this->info('│   You must specify a race ID with the -r argument   │');
            $this->info('├─────────────────────────────────────────────────────┤');
            $this->info('│   Example:                                          │');
            $this->info('│      php artisan race:start -r 42                   │');
            $this->info('└─────────────────────────────────────────────────────┘');
            return 1;
        }

        // Take first circuit in DB
        $circuit = Circuit::firstOrFail();

        // Get the list of participants
        $this->speedbotsRacing = $this->race->ships;

        $track = [];

        $this->speedbotsRacing->each(static function (Ship $opponent) use ($circuit, &$track) {
            $lPosition = mt_rand(1, $circuit->length);

            $track[$lPosition][] = [
                'direction' => mt_rand(1, 2) === 1 ? '+' : '-',
                'speedbot'  => $opponent,
            ];
        });

        // Now that all SB are on the track,
        // we can move them and make them fight
        $turn = 0;
        while ($this->speedbotsRacing->count() > 3) {
            $end = [];
            ++$turn;

            // Move every SB
            foreach ($track as $lengthPosition => $data) {
                foreach ($data as $speedbotData) {
                    // Check if the SB is still ok to race
                    if ($this->isSpeedbotStillRacing($speedbotData['speedbot'])) {
                        $newLengthPosition = $this->getNewLengthPosition($circuit, $lengthPosition, $speedbotData['direction']);

                        // Every 100 moves, there is one chance out of 4 that the SB changes direction,
                        // so that every SB can have a chance to fight every other SB
                        if (($turn % 100 === 0) && mt_rand(1, 4) === 1) {
                            $speedbotData['direction'] = $speedbotData['direction'] === '+' ? '-' : '+';
                        }

                        $end[$newLengthPosition][] = [
                            'direction' => $speedbotData['direction'],
                            'speedbot'  => $speedbotData['speedbot'],
                        ];
                    } else {
                        $this->race->ships()
                           ->updateExistingPivot($speedbotData['speedbot']->id, ['ended_at' => now()]);
                    }
                }
            }

            $track = $end;

            // Fight!
            foreach ($track as $lengthPosition => $speedbotsData) {
                foreach ($speedbotsData as $speedbotData) {
                    $this->attackEnemy($circuit, $track, $speedbotData, $lengthPosition);
                }
            }
        }

        $diff = now()->getTimestamp() - $startTime->getTimestamp();

        $this->race->update([
            'ended_at' => now(),
        ]);

        $this->info('> Ended in ' . $diff . ' seconds for ' . $this->nbSpeedbotsAtStart . ' speedbots.');
    }

    /**
     * @param $speedbot
     *
     * @return bool
     */
    private function isSpeedbotStillRacing($speedbot): bool
    {
        // The hull must still have some health left
        if ($speedbot->hull()->pivot->health <= 0) {
            return false;
        }

        // At least one weapon must have some ammo left
        $totalAmmoLeft = 0;
        foreach ($speedbot->weapons as $weapon) {
            $totalAmmoLeft += $weapon->pivot->ammo;
        }

        if ($totalAmmoLeft <= 0) {
            $message = $this->speedbotsRacing->count() . ' - ' . trans('race.speedbot_destroyed', [
                    'speedbot'   => $speedbot->name,
                    'belongs_to' => $speedbot->user->username,
                ]);

            $this->speedbotsRacing = $this->speedbotsRacing->filter(function ($sb) use ($speedbot) {
                return $sb->id !== $speedbot->id;
            });

            $this->writeLog($message, null, $speedbot);

            return false;
        }

        return true;
    }

    /**
     * @param                         $message
     * @param \App\Models\Weapon|null $weapon
     * @param \App\Models\Ship|null   $target
     */
    private function writeLog($message, Weapon $weapon = null, Ship $target = null): void
    {
        // FIXME: only for debug
        $this->info($message);

        if ($weapon !== null) {
            $shooterState = [
                'ammo' => $weapon->pivot->ammo,
            ];
        }

        if ($target !== null) {
            $targetState = [
                'hull_health' => $target->hull()->pivot->health,
            ];
        }

        RaceLog::create([
                            'race_id'       => $this->race->id,
                            'comments'      => $message,
                            'shooter_state' => $shooterState ?? null,
                            'target_state'  => $targetState ?? null,
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

    /**
     * Try to find an enemy in range, and attack it
     *
     * @param \App\Models\Circuit $circuit
     * @param array               $track
     * @param array               $data
     * @param int                 $length
     */
    private function attackEnemy(Circuit $circuit, array $track, array $data, int $length)
    {
        $speedbot  = $data['speedbot'];
        $direction = $data['direction'];
        $attacks   = collect();

        // Don't attack friendly SB!
        if ($speedbot->user()->is($this->authUser)) {
            return null;
        }

        // Loop through all SB weapons
        $speedbot->weapons->each(static function (Weapon $weapon) use ($circuit, $track, $length, &$attacks) {
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
                    foreach ($track[$pos] as $speedbotData) {
                        $attacks->push([
                                           'target' => $speedbotData['speedbot'],
                                           'weapon' => $weapon,
                                       ]);
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
     * @param \App\Models\Ship   $shooterSB
     * @param \App\Models\Ship   $targetSB
     * @param \App\Models\Weapon $weapon
     */
    private function attack(Ship $shooterSB, Ship $targetSB, Weapon $weapon): void
    {
        if (($shooterSB !== $targetSB) && $weapon->pivot->ammo > 0) {
            // Number of projectiles that hit the target
            // Add a random -3 to +3 bonus/malus
            $hits = (($weapon->accuracy + (mt_rand(-3, 3))) * $weapon->salvo) / 100;

            $totalDamage = $hits * $weapon->updated_damage;

            // Deal damage to all components
            $this->dealDamageToComponents($shooterSB, $targetSB, $weapon, $totalDamage);

            // Remove the fired ammo
            $weapon->pivot->ammo -= $weapon->salvo;

            if ($weapon->pivot->ammo <= 0) {
                $weapon->pivot->ammo = 0;

                $this->writeLog(trans('race.no_more_ammo', [
                    'shooter' => $shooterSB->user->username,
                    'weapon'  => $weapon->name,
                ]), $weapon);
            }

            $weapon->pivot->save();
        }
    }

    private function dealDamageToComponents(Ship $shooterSB, Ship $targetSB, Weapon $weapon, float $totalDamage)
    {
        // Check if the target has a hull
        $hull = $targetSB->hull();
        if ($hull->count() > 0) {
            $hull->pivot->health -= $totalDamage;

            if ($hull->pivot->health < 0) {
                $otherDamage = $hull->pivot->health;

                $hull->pivot->health = 0;
            }

            $hull->pivot->save();

            $message = trans('race.component_damage', [
                'component'    => 'hull',
                'damage'       => $totalDamage,
                'shooter'      => $shooterSB->name,
                    'shooter_user' => $shooterSB->user->username,
                'target'       => $targetSB->name,
                    'target_user'  => $targetSB->user->username,
                'weapon'       => $weapon->name . ' (' . $weapon->rarityText . ', ' . $weapon->qualityText . ')',
            ]);

            $this->writeLog($message, null, $targetSB);
        }
    }

}
