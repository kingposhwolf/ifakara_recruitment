<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referees extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'place',
        'phone',
        'title',
        'email',
        'addres',
        'created_at',
        'updated_at',
    ];
}
