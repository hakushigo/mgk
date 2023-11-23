<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $table = 'experience';
    protected $fillable = [
        'user_id',
        'experiece_title',
        'experience_organization',
        'experience_start_date',
        'experience_end_date',
        'experience_description',
    ];
}
