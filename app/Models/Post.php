<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'application_date',
        'end_date',
        'summary',
        'vacant_category',
        'age_range',
        'gender',
        'year_experience',
        'institution_id',
        'vacant_id',
        'education_level_id',
        'education_category_id',
        'education_name_id',
    ];
    public function institution(){
        return $this->belongsTo(Institution::class);
    }

    public function educationLevel()
    {
        return $this->belongsTo(Education_Level::class);
    }

    public function educationCategory()
    {
        return $this->belongsTo(Education_Category::class);
    }

    public function educationName()
    {
        return $this->belongsTo(Education_Name::class);
    }
    public function vacant()
    {
        return $this->belongsTo(Vacant::class);
    }
}
