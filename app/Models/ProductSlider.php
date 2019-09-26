<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSlider extends Model
{
    protected $fillable = [
        'productid',
        'name',
        'image',
        'orderby',
        'status',
        'created_at',
        'updated_at'
    ];
    protected $table='productsliders';


}


