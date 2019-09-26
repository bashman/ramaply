<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    protected $table='pagecontents';
    protected $fillable = [
        'pageid',
        'title',
        'description',
        'orderby',
        'status',
        'image',
        'type',
        'created_at',
        'updated_at'
    ];



}


