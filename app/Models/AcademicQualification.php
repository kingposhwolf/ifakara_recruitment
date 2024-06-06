<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicQualification extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name',
        'institute_name',
        'country',
        'certificate',
        'start_date',
        'end_date',
        'created_at',
        'updated_at',
    ];
}
