<?php

namespace App\Admin\Controllers;

use App\Models\FrontMenu;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Tree;

class FrontMenuController extends Controller
{
   // use HasResourceActions;
    use ModelForm;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return Admin::content(function (Content $content) {
            $content->header('Front Menus');
            $content->body(FrontMenu::tree());
        });
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
            ->description('Front Menu')
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
            ->description('Front Menu')
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
            ->description('Front Menu')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new FrontMenu);

        $grid->id('ID');
        $grid->name('Name');
        $grid->slug('Slug')->editable();
        $grid->orderby('Order')->editable();
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
        $show = new Show(FrontMenu::findOrFail($id));

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
    protected function form()
    {
        $form = new Form(new FrontMenu);
        $form->text('title','Title');
        $form->text('metakeyword','Meta Keyword');
        $form->text('metadescription','Meta Description');
        $form->text('name','Name');
        $form->text('slug','Slug');
        $form->image('banner','Banner')->removable()->uniqueName()->move('pageimage');
        $form->select('headerstatus','Header Status')->options([1 => 'Active', 0 => 'Inactive']);
        $form->select('footerstatus','Footer Status')->options([1 => 'Active', 0 => 'Inactive']);
        $form->input('orderby','Order By');
        $form->select('status','Status')->options([1 => 'Active', 0 => 'Inactive']);

        return $form;
    }
}
