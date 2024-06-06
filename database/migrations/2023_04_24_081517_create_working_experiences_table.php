<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkingExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('working_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('place')->nullable();
            $table->string('job_title')->nullable();
            $table->string('supervisor_name')->nullable();
            $table->string('supervisor_phone')->nullable();
            $table->string('supervisor_email')->nullable();
            $table->string('institute_address')->nullable();
            $table->text('duties_responsibility')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
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
        Schema::dropIfExists('working_experiences');
    }
}
