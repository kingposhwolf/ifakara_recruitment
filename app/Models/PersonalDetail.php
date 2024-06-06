<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'gender',
        'country_of_residence',
        'date_of_birth',
        'place_of_birth',
        'originality',
        'mobile',
        'morital_status',
        'disability',
        'current_residence_region',
        'current_residence_district',
        'user_id'
    ];
}
