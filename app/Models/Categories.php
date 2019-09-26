<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    protected $table = 'categories';

    public function childs()
    {
        return $this->hasMany('App\Models\Categories','parent_id','id')->where('status','=','1')->orderBy('orderby','ASC') ;
    }

    public function products()
    {
        return $this->hasMany('App\Models\Product','category_id','id')->where('status','=','1')->orderBy('orderby','ASC') ;
    }
}
