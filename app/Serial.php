<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serial extends Model
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
        'thriller',
        'seasons'
    ];
}
