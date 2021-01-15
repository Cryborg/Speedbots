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
        Schema::create('component_ship', function (Blueprint $table) {
            $table->foreignId('ship_id');
            $table->foreignId('component_id');

            $table->float('health')
                ->comment('Health updated during a race.');

            $table->unsignedInteger('level')->default(1)
                ->comment('Upgraded level of the component.');

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
