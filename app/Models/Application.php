<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
       'firstName',
       'secondName',
       'email',
       'phone',
       'cv',
       'coverLetter',

    ];

   
    public function vacant()
    {
        return $this->belongsTo(Vacant::class);
    }
}
