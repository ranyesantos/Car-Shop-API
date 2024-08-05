<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Mongodb\Laravel\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'brand',
        'model',
        'value',
        'license',
        'color'
    ];
}
