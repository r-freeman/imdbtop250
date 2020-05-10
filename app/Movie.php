<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $casts = [
        'rating' => 'float'
    ];
}
