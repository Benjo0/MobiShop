<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = [
        'brand',
        'model',
        'price',
        'screen',
        'memory',
        'osystem',
        'condition',
        'description',
    ];
}
