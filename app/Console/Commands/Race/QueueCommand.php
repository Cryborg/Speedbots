<?php

namespace App\Console\Commands\Race;

use App\Models\Race;
use App\Models\Ship;
use Illuminate\Console\Command;

class QueueCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'race:queue
                            {--r|race=  : ID of the race to fill}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Queue random Speedbots on a race';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $raceId = $this->option('race');

        if ($raceId && is_numeric($raceId)) {
            $race = Race::where('id', $raceId)->first();

            if ($race === null) {
                $this->error('The race ID#' . $raceId . ' does not exist');
                return 0;
            }
        } else {
            $this->info('┌─────────────────────────────────────────────────────┐');
            $this->info('│   You must specify a race ID with the -r argument   │');
            $this->info('├─────────────────────────────────────────────────────┤');
            $this->info('│   Example:                                          │');
            $this->info('│      php artisan race:start -r 42                   │');
            $this->info('└─────────────────────────────────────────────────────┘');
            return 1;
        }

        // Pick some random SB...
        $opponents = Ship::inRandomOrder()
                         ->where('class', 'speedbot')
                         ->limit($race->nb_opponents)
                         ->get();

        // ...and add them to the queue
        $opponents->each(static function ($opponent) use ($race) {
            $race->ships()->attach($opponent->id);
        });

        $this->info($opponents->count() . ' SB have been added to race #' . $race->id);

        return 0;
    }
}
