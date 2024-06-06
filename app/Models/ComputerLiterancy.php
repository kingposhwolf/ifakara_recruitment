<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComputerLiterancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'computer_skill',
        'certificate',
        'status',
        'created_at',
        'updated_at',
    ];
}
