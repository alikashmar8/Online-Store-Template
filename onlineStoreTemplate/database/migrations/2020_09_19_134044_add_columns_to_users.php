<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phoneNumber');
            $table->bigInteger('countryId')->nullable();
            $table->bigInteger('stateId')->nullable();
            $table->bigInteger('cityId')->nullable();
            $table->string('profileImg')->nullable();
            $table->string('bio')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("phoneNumber");
            $table->dropColumn("countryId");
            $table->dropColumn("stateId");
            $table->dropColumn("cityId");
            $table->dropColumn("profileImg");
            $table->dropColumn("bio");
        });
    }
}
