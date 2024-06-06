<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherAttachiment extends Model
{
    use HasFactory;

    protected $fillable = [
        'attachiment_type',
        'attachiment',
        'created_at',
        'updated_at',
        'user_id'
    ];
}
