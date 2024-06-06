<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_details', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('country_of_residence')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('originality')->nullable();
            $table->string('mobile')->nullable();
            $table->string('morital_status')->nullable();
            $table->string('disability')->nullable();
            $table->string('current_residence_region')->nullable();
            $table->string('current_residence_district')->nullable();
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
        Schema::dropIfExists('personal_details');
    }
}
