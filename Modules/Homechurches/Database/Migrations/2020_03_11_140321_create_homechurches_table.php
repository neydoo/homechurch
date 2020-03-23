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
            $table->bigInteger('country_id');
            $table->bigInteger('region_id');
            $table->bigInteger('state_id');
            $table->bigInteger('district_id');
            $table->bigInteger('zone_id');
            $table->bigInteger('area_id'); 
            $table->bigInteger('church_id');
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
