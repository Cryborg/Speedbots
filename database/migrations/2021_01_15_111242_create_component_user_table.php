<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * This is where we have all components awned by a user.
         * When one is upgraded, every SB that is equipped by it
         * will benefit from this upgrade.
         */
        Schema::create('component_user', function (Blueprint $table) {
            $table->foreignId('component_id');
            $table->foreignId('user_id');

            $table->unsignedInteger('level')->default(1)
                ->comment('Upgraded level of the component owned by the user.');

            $table->float('health')
                  ->comment('Component life points remaining after a race.');

            $table->unsignedBigInteger('equipped_on')->nullable()
                  ->comment('Ship on which it is equipped.');
            $table->foreign('equipped_on')->on('ships')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('component_user');
    }
}
