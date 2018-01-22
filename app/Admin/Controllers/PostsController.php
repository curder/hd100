<?php

namespace App\Admin\Controllers;

use App\Admin\Extensions\ExcelExporter;
use App\Admin\Extensions\Tools\RestorePost;
use App\Admin\Extensions\Tools\Trashed;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class PostsController extends Controller
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

            $content->header($trashed . '文章列表');
            $content->description('站点' . $trashed . '所有文章管理');

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
        return Admin::grid(Post::class, function (Grid $grid) {

            if (request('trashed') == 1) {
                $grid->model()->onlyTrashed();
            }

            $grid->column('id', 'ID')->sortable();
            $grid->column('title', '文章标题')->editable();
            $grid->column('category.title','所属分类')->label('primary');

            $states = [
                'on' => ['text' => trans('admin.yes')],
                'off' => ['text' => trans('admin.no')],
            ];
            $grid->column('index_recommend', '文章属性')->switchGroup([
                'index_recommend' => Lang::get('admin.index_recommend')
            ], $states);


            $grid->column('order', '排序')->editable()->sortable();
            $grid->tags('所属标签')->pluck('title')->label();
//            $grid->column('created_at', Lang::get('admin.created_at'));
            $grid->column('updated_at', Lang::get('admin.updated_at'))->sortable();


            // 左侧工具
            $grid->tools(function ($tools) {
                $tools->append(new Trashed());

                $tools->batch(function (Grid\Tools\BatchActions $batch) {
                    $batch->add('恢复', new RestorePost());
                });
            });

            $grid->exporter(new ExcelExporter());


            // 右侧搜索
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('category_id', '所属分类')->select(Category::selectOptions());
                $filter->like('title', '文章标题');
                $filter->between('updated_at', Lang::get('admin.updated_at'))->datetime();
                $filter->where(function ($query) {
                    $input = $this->input;
                    $query->whereHas('tags', function ($query) use ($input) {
                        $query->where('title', $input);
                    });

                }, '包含标签', 'tag');


            });

            // 表格操作
            $grid->actions(function ($actions) {
                if ($this->row->trashed()) {
                    $actions->disableDelete();
                } else {
                    // 添加一个查看按钮
                    $actions->prepend(sprintf('<a href="%s" target="_blank" title="%s"><i class="fa fa-eye"></i></a>', '#', trans('admin.show')));
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
        return Admin::form(Post::class, function (Form $form) {
            $form->tab('基础数据', function (Form $form) {
//                $form->display('id', 'ID');
                $form->select('category_id', '所属分类')->options(Category::all()->pluck('title', 'id'));
                $form->text('title', '标题')
                    ->rules('required');
                $form->text('slug')->help('请输入文章别名，将作为检索文章url的一部分');
                $form->textarea('description', '描述');
                $form->editor('body', '内容');

            })->tab('SEO设置', function (Form $form) {
                $form->textarea('seo_title', 'SEO标题');
                $form->textarea('seo_keywords', 'SEO关键字');
                $form->textarea('seo_description', 'SEO描述');
            })->tab('其他设置', function (Form $form) {
                $form->multipleSelect('tags', '文章标签')
                    ->help('标签请在标签管理中新增，然后在这里进行选择')
                    ->placeholder('请选择标签')
                    ->options(Tag::all()->pluck('title', 'id'));

                $form->image('cover', '封面')->help('请上传文章封面');
                $form->number('order', '排序')
                    ->default(0)->help(Lang::get('admin.order_string'));

                $form->switch('index_recommend', Lang::get('admin.index_recommend'));
                $form->php('css', 'CSS');
                $form->php('js', 'JS');
            });

            $form->display('created_at', Lang::get('admin.created_at'));
            $form->display('updated_at', Lang::get('admin.updated_at'));
        });
    }

    /**
     * 恢复回收站中的文章
     * @param Request $request
     * @return mixed
     */
    public function restore(Request $request)
    {
        if (is_null($request->get('ids'))) return;

        return Post::onlyTrashed()->find($request->get('ids'))->each->restore();
    }
}
