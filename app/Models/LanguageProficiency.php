<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LanguageProficiency extends Model
{
    use HasFactory;

    protected $fillable = [
        'language',
        'status',
        'created_at',
        'updated_at',
    ];
}
