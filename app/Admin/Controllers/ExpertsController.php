<?php

namespace App\Admin\Controllers;

use App\Admin\Extensions\Tools\RestoreAd;
use App\Admin\Extensions\Tools\RestoreExport;
use App\Admin\Extensions\Tools\Trashed;
use App\Models\Expert;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Http\Request;

class ExpertsController extends Controller
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
            $trashed = request('trashed') ? '回收站' : '';

            $content->header($trashed . '专家团队管理');
            $content->description('站点' . $trashed . '专家团队管理');

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

            $content->header(trans('admin.edit'));

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

            $content->header(trans('admin.create'));

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
        return Admin::grid(Expert::class, function (Grid $grid) {
            if (request('trashed') == 1) {
                $grid->model()->onlyTrashed();
            }

            $grid->id('ID')->sortable();
            $grid->column('name', '名字');
            $grid->cover('头像')->image();
            $grid->order(trans('admin.order'))->editable()->sortable();
            $grid->created_at(trans('admin.created_at'));
            $grid->updated_at(trans('admin.updated_at'));


            // 左侧工具
            $grid->tools(function ($tools) {
                $tools->append(new Trashed());

                $tools->batch(function (Grid\Tools\BatchActions $batch) {
                    $batch->add('恢复', new RestoreExport());
                });
            });
            // 表格操作
            $grid->actions(function ($actions) {
                if ($this->row->trashed()) {
                    $actions->disableDelete();
                } else {
                    // 添加一个查看按钮
                    $actions->prepend(sprintf('<a href="%s" target="_blank" title="%s"><i class="fa fa-eye"></i></a>', route('home.experts.show', $this->row), trans('admin.show')));
                }
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
        return Admin::form(Expert::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->text('name', '名字')->rules('required')->help('请上传专家名字');
            $form->text('position', '职位')->rules('required')->help('请填写专家职位');
            $form->image('cover', '头像')->help('请上传专家头像，头像尺寸为428x682');
            $form->text('order', '排序')->default(0)->help('排序值越小，越靠前');
            $form->textarea('description', '描述')->help('填写专家描述');

            $form->display('created_at', trans('admin.created_at'));
            $form->display('updated_at', trans('admin.updated_at'));
        });
    }

    /**
     * 恢复回收站中的专家
     * @param Request $request
     * @return mixed
     */
    public function restore(Request $request)
    {
        if (is_null($request->get('ids'))) return;

        return Expert::onlyTrashed()->find($request->get('ids'))->each->restore();
    }
}
