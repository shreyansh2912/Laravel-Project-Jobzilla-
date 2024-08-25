<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationDetails extends Model
{
    use HasFactory;

    protected $table = "eduction";
    protected $Fillable = [
        'highest_qualification',
        'course',
        'specialization',
        'university',
        'education'
    ];

    // public function user(){
    //     return $this->belongsTo(User::class);
    // }
}
