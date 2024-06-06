<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name',
        'year_of_completion',
        'institute_name',
        'training_discription',
        'start_date',
        'end_date',
        'created_at',
        'updated_at',
    ];
}
