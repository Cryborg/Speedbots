<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStellarObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stellar_objects', function (Blueprint $table) {
            $table->id();

            $table->foreignId('stellar_system_id');

            $table->string('name')
                ->comment('Name of stellar object');
            $table->string('description')
                ->comment('Description of stellar object');
            $table->string('type')
                ->comment('Type of stellar object. [planet|star|shipwreck|circuit|asteroid|satellite|portal]');
            $table->dateTime('disappear_at')->nullable()
                ->comment('If stellar object have end time of appearance');
            
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
        Schema::dropIfExists('stellar_objects');
    }
}
