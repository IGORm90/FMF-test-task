<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = "cars";

    protected $fillable = [
        'id',
        'brand',
        'model',
        'VIN',
        'engine_size',
        'engine_power',
        'KPP_type',
        'release_year',
        'date_of_sale',
        'dealer'
    ];
}
