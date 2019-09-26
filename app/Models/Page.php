<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table='pages';
    public function pagecontents(){
        return $this->hasMany('App\Models\PageContent','pageid','id');
    }
    public function pagecss(){
        return $this->hasMany('App\Models\PageCss','pageid','id');
    }

    public function forntpagecontent(){
        return $this->hasMany('App\Models\PageContent','pageid','id')->orderby('orderby','asc');
    }
}
