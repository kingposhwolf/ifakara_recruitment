<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File_Uploads extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'file',
        'created_at',
        'updated_at',
    ];
}
