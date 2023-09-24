<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScrapingStatus extends Model
{
    protected $fillable = [
        'id', 
        'updated',
        'url',
        'status'
    ];

    protected $table = 'scraping_status';

}