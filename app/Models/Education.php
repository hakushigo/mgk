<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'education';
    protected $fillable = [
        'user_id',
        'degree_title',
        'institute',
        'edu_start_date',
        'edu_end_date',
        'education_description',
    ];
}
