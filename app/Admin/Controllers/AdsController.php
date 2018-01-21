<?php

namespace App\Admin\Controllers;

use App\Models\Ad;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Support\Facades\Lang;

class AdsController extends Controller
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
            $content->header('图片管理');
            $content->description('管理首页Banner图，首页成功案例图片和资质荣誉等');

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
            $content->header('编辑图片');

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

            $content->header('新增广告图');

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
        return Admin::grid(Ad::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->column('title', '名称')->editable();
            $grid->column('type', '图片类型')
                ->editable('select', static::getTypes());
            $grid->column('order', '排序')->editable()->sortable();
            $grid->column('image', '预览图片')->image();
            $grid->column('created_at', Lang::get('admin.updated_at'));

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('type')->select(static::getTypes());
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
        return Admin::form(Ad::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->select('type', '类型')
                ->options(static::getTypes())->rules('required');
            $form->text('title', '名称');
            $form->text('url', '链接地址');
            $form->image('image', '上传图片')->help('请上传合适尺寸的图片');
            $form->textarea('description', '简要描述');
            $form->number('order', '排序')->default(0)->help(Lang::get('admin.order_string'));

            $form->display('created_at', Lang::get('admin.created_at'));
            $form->display('updated_at', Lang::get('admin.updated_at'));
        });
    }

    /**
     * 类型
     * @return array
     */
    protected static function getTypes()
    {
        return array_combine(Ad::$types, Ad::$types);
    }
}
