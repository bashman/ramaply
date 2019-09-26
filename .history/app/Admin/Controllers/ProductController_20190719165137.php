<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use App\Models\Categories;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Encore\Admin\Facades\Admin;

class ProductController extends Controller
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
            ->description('Product')
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
            ->description('Product')
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
            ->description('Product')
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
            ->description('Product')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product);

        $grid->id('ID');
        $grid->name('Name');
        $grid->slug('Slug');
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
        $show = new Show(Product::findOrFail($id));

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
        return Admin::form(Product::class, function (Form $form) use ($id) {
            $form->tab('Product', function ($form) {
                $arrParameters = request()->route()->parameters();
                $idCheck       = (int) end($arrParameters);
                $arrFields = array();
                $form->text('title', trans('Title'));

                $form->text('specifications', trans('Specifications'));
                $form->text('grade', trans('Grade'));
                $form->text('application', trans('Application'));
                $form->text('usp', trans('USP'));
                $form->text('available_thickness', trans('Available Thickness'));
                $form->text('title', trans('Title'));

                $form->textarea('title','Page Title');
                $form->textarea('metakeyword','Meta Keywords');
                $form->textarea('metadescription','Meta Description');
                $form->text('name','Name');
                $form->text('slug','Slug');
                $category_options = Categories::all()->where('status','=','1')->pluck('name', 'id')->toArray();
                $category_options = array(0 => 'None') + $category_options;
                $form->select('category_id','Category')->options($category_options);
                $form->summernote('shortdescription','Short Description');
                $form->summernote('description','Description');
               // $form->summernote('specifications','Specification');
                $form->summernote('technicalspecifications','Technical Specification');
                $form->image('thumb','Thumbnail')->move('productimage');
                $form->image('banner','Product Banner')->move('productimage');
                $form->file('brochure','Product Brochure')->move('procuctbrochure');
                $form->select('status','Status')->options([1 => 'Active', 0 => 'Inactive']);
            })->tab('Product Slider', function ($form) {
                 $form->hasMany('productsliders', ' ', function (Form\NestedForm $form) {
                    $form->image('image', 'Image')->removable()->uniqueName()->move('productimage');
                    $form->text('name', 'Title');
                    $form->number('orderby','Order')->default('1');
                     $form->select('status','Status')->options([1 => 'Active', 0 => 'Inactive']);
                });
            })->tab('Product Features ', function ($form) {
                $form->hasMany('productfeatures', ' ', function (Form\NestedForm $form) {
                    $form->image('image', 'image')->removable()->uniqueName()->move('productimage');
                    $form->text('name', 'name');
                    $form->textarea('description','Description');
                    $form->text('orderby','order')->default('1');
                    $form->select('status','Status')->options([1 => 'Active', 0 => 'Inactive']);
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
