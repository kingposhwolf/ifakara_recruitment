<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'place',
        'job_title',
        'supervisor_name',
        'supervisor_phone',
        'supervisor_email',
        'institute_address',
        'duties_responsibility',
        'start_date',
        'end_date'
    ];
}
