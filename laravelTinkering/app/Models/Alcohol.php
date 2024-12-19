<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alcohol extends Model
{
    protected $fillable = [
        'name',
        'type',
        'percentage',
    ];
}
