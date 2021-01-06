<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStellarSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stellar_systems', function (Blueprint $table) {
            $table->id();

            $table->foreignId('galaxy_id');

            $table->string('name')
                ->comment('Name of the stellar system');
            $table->string('description')
                ->comment('Description of the stellar system');

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
        Schema::dropIfExists('stellar_systems');
    }
}
