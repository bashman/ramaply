<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductFeature extends Model
{
    protected $fillable = [
        'productid',
        'name',
        'image',
        'description',
        'orderby',
        'status',
        'created_at',
        'updated_at'
    ];
    protected $table='productfeatures';


}


