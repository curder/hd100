<?php

namespace App\Admin\Controllers;

use App\Models\Tag;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Support\Facades\Lang;
use Illuminate\Validation\Rule;

class TagsController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {
            $content->header('所有标签');
            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('Tags');
            $content->description('Edit tags');
            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {
            $content->header('Tags');
            $content->description('Create tags');
            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Tag::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->column('title', '标签名')->editable();
            $grid->column('slug', '标签别名')->editable();

            $grid->column('updated_at', trans('admin.updated_at'));

            $grid->filter(function ($filter) {
                $filter->between('updated_at', trans('admin.updated_at'))->datetime();
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Tag::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->text('title', '标签名')
                ->help('请输入中文作为标签名')
                ->rules('required')
                ->rules(function ($form) {
                    if (!$id = $form->model()->id) {
                        return 'unique:tags,title';
                    }
                });
            $form->text('slug', '标签别名')->help('请输入英文作为标签别名，如果不能自动生成请手动输入这个别名');

            $form->display('created_at', trans('admin.created_at'));
            $form->display('updated_at', trans('admin.updated_at'));
        });
    }
}
