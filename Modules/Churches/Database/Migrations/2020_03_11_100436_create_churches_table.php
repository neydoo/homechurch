<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChurchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('churches', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('country_id')->nullable();
            $table->bigInteger('region_id')->nullable();
            $table->bigInteger('state_id')->nullable();
            $table->bigInteger('district_id')->nullable();
            $table->bigInteger('zone_id')->nullable();
            $table->bigInteger('area_id'); 
            $table->string('code')->nullable();
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
        Schema::dropIfExists('churches');
    }
}
