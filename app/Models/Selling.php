<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selling extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = [
        'date',
        'phone',
        'customer',
    ];
}
