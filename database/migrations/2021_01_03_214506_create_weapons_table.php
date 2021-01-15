<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeaponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weapons', function (Blueprint $table) {
            $table->id();

            $table->string('slug', 20)
                ->comment('Once translated this will give the weapon name.');
            $table->string('type', 20)->default('ballistic')
                ->comment('Ballistic, EMP, laser, plasma,...');
            $table->float('damage')->default(2);
            $table->integer('ammo')->default(10)
                ->comment('Total ammunition');
            $table->integer('salvo')->default(1)
                ->comment('How much ammunition is fired in each burst.');
            $table->integer('range')->default(1);
            $table->integer('accuracy')->default(75);
            $table->integer('direction')->default(1)
                ->comment('In which direction will it shoot?');

            $table->integer('quality')->default(1);
            $table->integer('rarity')->default(1);

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
        Schema::dropIfExists('weapons');
    }
}
