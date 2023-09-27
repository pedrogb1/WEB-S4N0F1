<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RemediesMatch extends Model
{
    protected $fillable = [
        'id', 
        'active_ingredients',
        'match'
       
    ];

    protected $table = 'active_ingredients_similarities';
}