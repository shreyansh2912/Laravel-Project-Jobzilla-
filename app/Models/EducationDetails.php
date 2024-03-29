<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationDetails extends Model
{
    use HasFactory;

    protected $Fillable = [
        'highest_qualification',
        'course',
        'specialization',
        'university',
        'education'
    ];
}
