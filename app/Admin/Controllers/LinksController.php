<?php

namespace App\Admin\Controllers;

use App\Models\Link;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Tree;
use Illuminate\Support\Facades\Lang;

class LinksController extends Controller
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

            $content->header('文字连接管理');
            $content->description('管理网站的所有文字连接，比如导航、友情链接或者底部链接');

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

            $content->header('编辑文字链');

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

            $content->header('新增文字接');

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
        return Admin::grid(Link::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->created_at();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Link::form(function (Form $form) {

            $form->display('id', 'ID');

            $form->select('parent_id','上级文字链')->options(Link::selectOptions());

            $form->text('title','标题')->rules('required');
            $form->text('url','文章链接地址');
            $form->textarea('description','描述');
            $form->image('logo','文字链关联图片')->help('如果文字链存在图片请于此上传，否则为空');

            $form->display('created_at', Lang::get('admin.created_at'));
            $form->display('updated_at', Lang::get('admin.updated_at'));
        });
    }

    /**
     * Make a grid builder.
     */
    protected function tree()
    {
        return Link::tree(function (Tree $tree) {
            $tree->branch(function ($branch) {

                $src = config('admin.upload.host') . '/' . $branch['logo'] ;

                $logo = is_file($src) ? "<img src='$src' style='max-width:30px;max-height:30px' class='img'/>" : '';

                return "{$branch['id']} - {$branch['title']} $logo";

            });

        });
    }
}
