<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'name',
        'duration',
        'description',
        'genre',
        'country',
        'rating',
        'year',
        'likes',
        'dislikes',
        'thriller'
    ];
}

