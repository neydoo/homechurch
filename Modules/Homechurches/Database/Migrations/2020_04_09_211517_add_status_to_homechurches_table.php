<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusToHomechurchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('homechurches', function (Blueprint $table) {
            $table->boolean('status')->default(1);
            $table->unsignedInteger('owner_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('homechurches', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('owner_id');
        });
    }
}
