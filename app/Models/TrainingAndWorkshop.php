<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingAndWorkshop extends Model
{
    use HasFactory;

    protected $fillable = [
        'training_name',
        'institute_name',
        'training_discription',
        'start_date',
        'end_date',
        'created_at',
        'updated_at',
    ];
}
