<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'area_id',
        'name',
        'location',
        'price'
    ];
}
