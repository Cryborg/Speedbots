<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacesQueuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('races_queues', function (Blueprint $table) {
            $table->foreignId('race_id');

            $table->foreignId('ship_id');

            $table->boolean('confirmed')->default(false)
                ->comment('Has the user confirmed its participation?');

            $table->timestamp('ended_at', 6)->nullable()
                ->comment('Date & time the SB ended the race');

            $table->timestamps();

            $table->unique(['race_id', 'ship_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('races_queues');
    }
}
