<?php

namespace App\Admin\Controllers;

use App\Models\Page;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Tree;

class PagesController extends Controller
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

            $content->header('页面');

            $content->body($this->tree());
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
            $content->header('编辑页面');

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
            $content->header('新增页面');
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
        return Admin::grid(Page::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
            $grid->title('页面名称');

//            $grid->created_at(trans('admin.created_at'));
            $grid->updated_at(trans('admin.updated_at'));
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Page::class, function (Form $form) {

            $form->tab('基础数据', function (Form $form) {
//                $form->display('id', 'ID');

                $form->select('parent_id', '父级')->options(Page::selectOptions());
                $form->text('title', '标题')
                    ->rules('required');
                $form->text('slug', '别名')->help('请输入页面的别名，将作为检索页面url的一部分');
                $form->text('url')->rules('sometimes');
                $form->editor('body', '内容');

            })->tab('SEO设置', function (Form $form) {
                $form->textarea('seo_title', 'SEO标题');
                $form->textarea('seo_keywords', 'SEO关键字');
                $form->textarea('seo_description', 'SEO描述');
            })->tab('其他设置', function (Form $form) {

                $form->image('cover', '封面')->help('请上传文章封面');
                $form->number('order', '排序')
                    ->default(0)->help(trans('admin.order_string'));

                $form->php('css', 'CSS');
                $form->php('js', 'JS');
            });

            $form->display('created_at', trans('admin.created_at'));
            $form->display('updated_at', trans('admin.updated_at'));
        });
    }

    /**
     * Make a grid builder.
     */
    protected function tree()
    {
        return Page::tree(function (Tree $tree) {
            $tree->branch(function ($branch) {

//                $src = config('admin.upload.host') . '/' . $branch['cover'];

//                $cover = is_file($src) ? "<img src='$src' style='max-width:30px;max-height:30px' class='img'/>" : '';

                return "<strong>{$branch['id']}</strong> - {$branch['title']}";

            });

        });
    }
}
