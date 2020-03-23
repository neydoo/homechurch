<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offering', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id');
            $table->double('amount')->nullable();
            $table->double('cash')->nullable();
            $table->double('pos')->nullable();
            $table->double('cheques')->nullable();
            $table->bigInteger('homechurch_id')->nullable();
            $table->bigInteger('groupchat_id')->nullable();
            $table->string('type')->nullable();
            $table->timestamp('date');
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
        Schema::dropIfExists('offering');
    }
}
