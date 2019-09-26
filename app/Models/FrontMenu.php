<?php

namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;

use Encore\Admin\Traits\ModelTree;

use Illuminate\Database\Eloquent\Model;

class FrontMenu extends Model
{
    protected $table='frontmenus';
    use ModelTree, AdminBuilder;
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setParentColumn('parent_id');
        $this->setOrderColumn('orderby');
        $this->setTitleColumn('name');
    }

    public function frontmenuchild($id){
        return FrontMenu::where('parent_id','=',$id)->orderby('orderby','asc')->where('status','=','1')->get();
    }

    public function frontmenuchildcount($id){
        return FrontMenu::where('parent_id','=',$id)->where('status','=','1')->count();
    }
}
