<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\institution;

class HeadInstitute extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname', 
        'mname',
        'lname',
        'contact',
        'institute_id'
    ];

    public function institution()
    {
        return $this->belongsTo(institution::class,'institute_id');
    }
}
