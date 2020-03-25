<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomechurchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homechurches', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('country_id')->nullable();
            $table->bigInteger('region_id')->nullable();
            $table->bigInteger('state_id')->nullable();
            $table->bigInteger('district_id')->nullable();
            $table->bigInteger('zone_id')->nullable();
            $table->bigInteger('area_id')->nullable(); 
            $table->bigInteger('church_id')->nullable();
            $table->string('name');
            $table->string('type')->nullable();
            $table->string('code')->nullable();
            $table->text('description');
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
        Schema::dropIfExists('homechurches');
    }
}
