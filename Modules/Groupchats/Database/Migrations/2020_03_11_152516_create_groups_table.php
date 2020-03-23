<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupchats', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('country_id');
            $table->bigInteger('region_id');
            $table->bigInteger('state_id');
            $table->bigInteger('district_id');
            $table->bigInteger('zone_id');
            $table->bigInteger('area_id'); 
            $table->bigInteger('church_id');
            $table->string('name');
            $table->string('code')->nullable();
            $table->text('description');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('groupchats');
    }
}
