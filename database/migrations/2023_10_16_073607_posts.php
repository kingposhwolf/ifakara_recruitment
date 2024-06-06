<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->date('application_date');
            $table->date('end_date');
            $table->string('summary');
            $table->string('age_range');
            $table->string('gender');
            $table->string('year_experience');
            $table->foreignId('institution_id')->constrained('institutions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('vacant_id')->constrained('vacants')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('education_level_id')->constrained('education_levels')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('education_category_id')->constrained('education_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('education_name_id')->constrained('education_names')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('posts');
    }
}
