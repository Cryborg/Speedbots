<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipWeaponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ship_weapon', function (Blueprint $table) {
            $table->foreignId('ship_id');
            $table->foreignId('weapon_id');

            $table->integer('ammo')
                ->comment('Ammo left after last race');

            $table->integer('damage')
                ->comment('The potentially upgraded damage');
            $table->integer('accuracy')
                ->comment('The potentially upgraded accuracy');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ship_weapon');
    }
}
