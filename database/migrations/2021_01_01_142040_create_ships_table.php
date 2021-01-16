<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ships', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id');

            $table->string('name', 20);

            $table->string('class', 20);

            $table->float('health');

            $table->timestamp('in_orbit_at')->nullable();

            $table->unsignedBigInteger('in_orbit_of')->nullable();
            $table->foreign('in_orbit_of')->on('stellar_objects')->references('id');

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
        Schema::dropIfExists('ships');
    }
}
