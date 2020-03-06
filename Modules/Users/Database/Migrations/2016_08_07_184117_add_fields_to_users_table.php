<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table)
        {
			$table->string('phone')->nullable();
			$table->text('address')->nullable();
            $table->string('avatar')->nullable();
            $table->string('qualification',100)->nullable();
            $table->string('specialty', 250)->nullable();
            $table->string('prof_title', 250)->nullable();
            $table->float('balance')->default(0);
            $table->string('birthday')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->string('gender')->nullable();
            $table->string('timezone')->nullable();
            $table->string('language', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table)
        {
			$table->dropColumn('phone')->nullable();
			$table->dropColumn('address')->nullable();
            $table->dropColumn('avatar')->nullable();
            $table->dropColumn('qualification',100);
            $table->dropColumn('specialty', 250);
            $table->dropColumn('prof_title', 250);
            $table->dropColumn('balance')->default(0);
            $table->dropColumn('birthday');
            $table->dropColumn('state_id')->nullable();
            $table->dropColumn('city_id')->nullable();
            $table->dropColumn('country_id')->nullable();
            $table->dropColumn('gender');
            $table->dropColumn('timezone');
            $table->dropColumn('language', 15)->nullable();

        });
    }

}
