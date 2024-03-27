<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploymentDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'current_job',
        'current_company',
        'salary',
        'experiance',
        'current_location',
        'skills',
        'industry',
        'role',
        'user_id'
    ];
}
