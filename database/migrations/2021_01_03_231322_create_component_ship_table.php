<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentShipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        /**
         * This links components to a ship.
         * The user must already have the component in order to equip it.
         * This is done by filling the component_user table.
         */
        Schema::create('component_ship', function (Blueprint $table) {
            $table->foreignId('ship_id');
            $table->foreignId('component_id');

            $table->float('health')
                ->comment('Component life points remaining after a race.');

            $table->unique(['ship_id', 'component_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('component_ship');
    }
}
