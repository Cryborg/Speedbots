<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('components', function (Blueprint $table) {
            $table->id();

            $table->string('stub', 20)
                ->comment('Once translated it will give the component name.');
            $table->integer('health')->comment('Health points');
            $table->integer('price');
            $table->integer('weight')->nullable();

            $table->integer('energy_consumption')->nullable()
                ->comment('How much energy does it consume?');
            $table->integer('power')->nullable()
                ->comment('How much energy can it store?');

            $table->integer('slots')->nullable()
                ->comment('Available slots on the frame.');

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
        Schema::dropIfExists('components');
    }
}
