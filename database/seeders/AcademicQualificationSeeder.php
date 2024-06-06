<?php

namespace Database\Seeders;

use App\Models\Education_category;
use App\Models\Education_level;
use App\Models\Education_name;
use Illuminate\Database\Seeder;

class AcademicQualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $education_level = Education_level::create(['name' => 'PHd']);
        $education_category = Education_category::create(['level_id' => $education_level->id, 'name' => 'Accounting and Auditing']);
        Education_name::create(['category_id' => $education_category->id, 'name' => 'Doctor of Philosophy (PhD) in Accountancy']);
        Education_name::create(['category_id' => $education_category->id, 'name' => 'PhD in Accounting']);
        Education_name::create(['category_id' => $education_category->id, 'name' => 'Phd in Business Administration (Accounting and Finance)']);

        $education_level = Education_level::create(['name' => 'Master Degree']);
        $education_category = Education_category::create(['level_id' => $education_level->id, 'name' => 'Accounting and Auditing']);
        Education_name::create(['category_id' => $education_category->id, 'name' => 'Master Degree in Accounting']);
        Education_name::create(['category_id' => $education_category->id, 'name' => 'Master Degree in Accounting and Finance']);
        Education_name::create(['category_id' => $education_category->id, 'name' => 'Master degree in Business Administration (Accounting and Finance)']);


        // $education_level = Education_level::create(['name' => 'Degree']);
        // $education_level = Education_level::create(['name' => 'Post Graduate Diploma']);
        // $education_level = Education_level::create(['name' => 'Advanced Diploma']);
        // $education_level = Education_level::create(['name' => 'Diploma / FTC']);
        // $education_level = Education_level::create(['name' => 'Diploma in Technical Education (DSEE)']);
        // $education_level = Education_level::create(['name' => 'Diploma in Technical Education (DTEE)']);
        // $education_level = Education_level::create(['name' => 'Full Technician Certificate (FTC)']);
        // $education_level = Education_level::create(['name' => 'Higher Diploma']);
        // $education_level = Education_level::create(['name' => 'Basic Technician Certificate']);
        // $education_level = Education_level::create(['name' => 'Certificate']);
        // $education_level = Education_level::create(['name' => 'Grade A Teachers Certificate  (GATCE)']);
        // $education_level = Education_level::create(['name' => 'Grade A Teachers Special Course (GATSCEE)']);
        // $education_level = Education_level::create(['name' => 'Technician Certificate']);
        // $education_level = Education_level::create(['name' => 'Ordinary Level (CSE)']);
        // $education_level = Education_level::create(['name' => 'Advanced Level (ACSE)']);
    }
}
