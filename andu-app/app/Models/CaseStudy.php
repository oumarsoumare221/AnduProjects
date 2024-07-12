<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'details',
        'years_of_experience',
        'users_using_lms',
        'challenge', // Ajouté
    ];
}
