<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class institution extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'location',
        'email',
        'category'
    ];

    public function institution()
    {
        return $this->hasOne(HeadInstitute::class);
    }
}
