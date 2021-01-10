<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaceLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('race_logs', function (Blueprint $table) {
            $table->id();

            $table->string('race_id');

            $table->string('comments');

            $table->json('shooter_state')->nullable();
            $table->json('target_state')->nullable();

            // Millisecond precision
            $table->timestamps(6);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('race_logs');
    }
}
