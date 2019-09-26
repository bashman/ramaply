<?php

namespace App\Admin\Controllers;

use App\Models\Categories;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class CategoryController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Categories);

        $grid->id('ID');
        $grid->name('Name');
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Categories::findOrFail($id));

        $show->id('ID');
        $show->name('Name');

        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Categories);

        $form->text('name','Name')->rules('required');
        $form->text('slug','Slug')->rules('required');
        $form->image('image','Image');
        //$form->image('image2','Image for detail page');
        $form->summernote('description','Description');
        //$form->display('id','ID');
        
        $category_options = Categories::all()->where('status','=','1')->pluck('name', 'id')->toArray();
        $category_options = array(0 => 'None') + $category_options;
        $form->select('parent_id','Parent Category')->options($category_options);
        $form->select('status','Status')->options([1 => 'Active', 0 => 'Inactive']);
        $form->text('metatitle','Meta Title');
        $form->text('metadescription','Meta Description');
        $form->text('keyword','Keywords');
        $form->display('created_at','Created at');
        $form->display('updated_at','Updated at');

        return $form;
    }
}
