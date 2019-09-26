<?php

namespace App\Admin\Controllers;

use App\Models\Page;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Encore\Admin\Facades\Admin;

class PageController extends Controller
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
        $grid = new Grid(new Page);

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
        $show = new Show(Page::findOrFail($id));

        $show->id('ID');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form($id = null)
    {
        return Admin::form(Page::class, function (Form $form) use ($id) {
            $form->tab('Page', function ($form) {
                $arrParameters = request()->route()->parameters();
                $idCheck       = (int) end($arrParameters);
                $arrFields = array();
                $form->text('metatitle','Title');
                $form->text('metakeyword','Meta Keyword');
                $form->text('metadescription','Meta Description');
                $form->text('name','Name');
                $form->text('slug','Slug');
                $form->image('banner','Page Banner')->move('pagebanner');
                $form->select('status','Status')->options([1 => 'Active', 0 => 'Inactive']);
            })->tab('Content Description', function ($form) {
                 $form->hasMany('pagecontents', ' ', function (Form\NestedForm $form) {
                 $form->text('title','Title');
                 $form->textarea('description', 'Description');
                 $form->image('image', 'image')->removable()->uniqueName()->move('pageimage');
                 $form->number('orderby','Order')->default('1');
                 $form->select('type','Type')->options([1 => 'Left Content Right Image', 2 => 'Right Content Left Image',3 => 'Full Content']);
                 $form->select('status','Status')->options([1 => 'Active', 0 => 'Inactive']);
                });
            })->tab('Page Css', function ($form) {
                $form->hasMany('pagecss', ' ', function (Form\NestedForm $form) {
                    $form->textarea('pagecss', 'Css');
                });
            });
        });

        $form->disableViewCheck();
        $form->disableEditingCheck();
        $form->tools(function (Form\Tools $tools) {
            $tools->disableView();
        });
    }
}
