<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->text("description")->nullable();
            $table->double("price");
            $table->integer("showPrice")->default(1);
            $table->integer("roomsNumber")->nullable();
            $table->integer("bedroomsNumber");
            $table->integer("accepted")->default(0);
            $table->foreignId('userId')->constrained('users');
            $table->bigInteger('categoryId');
            $table->string("locationDescription")->nullable();
            $table->bigInteger('countryId')->nullable();
            $table->bigInteger('stateId')->nullable();
            $table->bigInteger('cityId')->nullable();
            $table->string("contactInfo")->nullable();
            $table->timestamps();
            $table->double('longitude')->nullable();
            $table->double('latitude')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
