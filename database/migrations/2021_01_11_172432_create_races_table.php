<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('races', function (Blueprint $table) {
            $table->id();

            $table->foreignId('circuit_id');

            $table->integer('nb_opponents')->default(10);

            $table->timestamp('start_at')->nullable()
                 ->comment('Date & time of the beginning of the race. If it is null, it starts when the queue is full.');

            $table->timestamp('ended_at')->nullable()
                 ->comment('Date & time of the end of the race.');

            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('races');
    }
}
