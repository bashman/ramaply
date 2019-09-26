<?php

namespace App\Admin\Controllers;

use App\Models\Aboutus;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class AboutusController extends Controller
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
        $grid = new Grid(new Aboutus);

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
        $show = new Show(Aboutus::findOrFail($id));

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
        $form = new Form(new Aboutus);
        $form->text('name','Name');
        $form->text('slug','Slug');
        $form->image('banner','Banner')->removable()->uniqueName()->move('aboutusimage');
        $form->text('companyprofiletag','Company Profile Tag');
        $form->image('companyprofileimage','Company Profile Image')->removable()->uniqueName()->move('aboutusimage');
        $form->summernote('companyprofiledescription','Company Profile Description');
        $form->text('visionmissiontag','Vision Maission Tag');
        $form->summernote('missionvisiondescription','Mission Vision Description');
        $form->image('missionvisionimage','Mission Vision Image')->removable()->uniqueName()->move('aboutusimage');
        $form->summernote('ourteamdescription','Our Team Description');
        $form->image('ourteamimage','Our Team Image')->removable()->uniqueName()->move('aboutusimage');
        $form->summernote('aboutushomedescription','Aboutus Home Description');
        $form->image('aboutushomeimage','About Us Home Image')->removable()->uniqueName()->move('aboutusimage'); 

        $form->text('infrastructuretag','About Us Infrastructure Tag');
        $form->summernote('infrastructuredescription','Aboutus Infrastructure Description');
        $form->image('infrastructureimage','About Us Infrastructure Image')->removable()->uniqueName()->move('aboutusimage');
        return $form;
    }
}
