<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Osystems extends Model
{

    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
        'name',
        'version',
    ];

}
