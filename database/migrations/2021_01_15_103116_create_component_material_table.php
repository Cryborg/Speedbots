<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('component_material', function (Blueprint $table) {
            $table->foreignId('component_id');
            $table->foreignId('material_id');

            $table->unsignedInteger('amount')
                ->comment('Amount of materials needed to upgrade the component.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('component_material');
    }
}
