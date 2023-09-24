<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Remedies extends Model
{
    protected $fillable = [
        'id', 
        'updated',
        'url',
        'complement',
        'dosage',
        'format',
        'active_ingredients'
    ];
}