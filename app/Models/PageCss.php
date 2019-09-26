<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageCss extends Model
{
    protected $table='pagecss';
    protected $fillable = [
        'pageid',
        'pagecss',
        'created_at',
        'updated_at'
    ];



}


