<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';

    public function productsliders(){
        return $this->hasMany('App\Models\ProductSlider','productid','id');
    }

    public function productfeatures(){
        return $this->hasMany('App\Models\ProductFeature','productid','id');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Categories','category_id'); 
    }
}


