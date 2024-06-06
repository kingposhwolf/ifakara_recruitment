<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Vacant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'description',
        'location',
        'job_file',
        'position_name',
        'position_file',
        'position_description',
    ];
    public function vacant()
    {
        return $this->hasOne(Post::class);
    }
}
