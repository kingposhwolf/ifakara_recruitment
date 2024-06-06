<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_qualifications', function (Blueprint $table) {
            $table->id();
            $table->string('education_level')->nullable();
            $table->string('institute_name')->nullable();
            $table->string('country')->nullable();
            $table->string('program_category')->nullable();
            $table->string('program_name')->nullable();
            $table->string('certificate')->nullable();
            $table->string('transcript')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('gpa')->nullable();
            $table->string('out_of_gpa')->nullable();
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
        Schema::dropIfExists('academic_qualifications');
    }
}
