<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\institution;
use App\Models\Vacant;

class Staff extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'lname',
        'mname',
        'gender',
        'email',
        'phone',
        'staff_contract',
        'end_date',
        'basic_salary',
        'allounce_salary',
        'institution_id',
        'vacant_id',
    ];

    public function institution()
    {
        return $this->belongsTo(institution::class);
    }

    public function vacant()
    {
        return $this->belongsTo(Vacant::class);
    }
}
