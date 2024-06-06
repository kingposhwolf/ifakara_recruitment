<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('mname');
            $table->string('gender');
            $table->string('email');
            $table->string('phone');
            $table->string('staff_contract');
            $table->date('end_date');
            $table->string('basic_salary');
            $table->string('allounce_salary');
            $table->foreignId('institution_id')->constrained('institutions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('vacant_id')->constrained('vacants')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('staff');
    }
}
