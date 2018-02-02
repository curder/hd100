<?php

namespace App\Admin\Controllers;

use App\Models\Category;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Row;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Tree;
use Encore\Admin\Widgets\Box;

class CategoriesController extends Controller {
	use ModelForm;

	/**
	 * Index interface.
	 *
	 * @return Content
	 */
	public function index() {
		return Admin::content( function ( Content $content ) {

			$content->header( '文章分类管理' );

			$content->row( function ( Row $row ) {
				$row->column( 6, $this->treeView()->render() );

				$row->column( 6, function ( Column $column ) {
					$form = new \Encore\Admin\Widgets\Form();
					$form->action( admin_base_path( 'categories' ) );

					$form->select( 'parent_id', trans( 'admin.parent_id' ) )->options( Category::selectOptions() );
					$form->text( 'title', '分类名称' )->rules( 'required' );
					$form->text( 'uri', trans( 'admin.slug' ) )->rules( 'required' );
					$form->textarea( 'description', '分类描述' );

					$column->append( ( new Box( trans( 'admin.new' ), $form ) )->style( 'success' ) );
				} );
			} );
		} );
	}

	/**
	 * Edit interface.
	 *
	 * @param $id
	 *
	 * @return Content
	 */
	public function edit( $id ) {
		return Admin::content( function ( Content $content ) use ( $id ) {
			$content->header( '编辑分类管理' );

			$content->body( $this->form()->edit( $id ) );
		} );
	}

	/**
	 * Create interface.
	 *
	 * @return Content
	 */
	public function create() {
		return Admin::content( function ( Content $content ) {
			$content->header( '创建分类管理' );
			$content->body( $this->form() );
		} );
	}

	/**
	 * Make a grid builder.
	 *
	 * @return Grid
	 */
	protected function grid() {
		return Admin::grid( Category::class, function ( Grid $grid ) {

			$grid->id( 'ID' )->sortable();
			$grid->column( 'title', '名称' )->editable();
			$grid->updated_at( trans( 'admin.updated_at' ) );
		} );
	}

	/**
	 * Make a form builder.
	 *
	 * @return Form
	 */
	protected function form() {
		return Admin::form( Category::class, function ( Form $form ) {

			$form->display( 'id', 'ID' );
			$form->select( 'parent_id', '上级文字链' )->options( Category::selectOptions() );
			$form->text( 'title', '分类名称' )->rules( 'required' );
			$form->text( 'uri', '分类别名' )->rules( 'required' );
			$form->image( 'cover', '封面' )
			     ->move( 'images/categories/' . date( 'Y-m-d' ) )
			     ->uniqueName()
			     ->help( '文章封面尺寸为1920x280,请正确上传图片尺寸' );
			$form->display( 'created_at', trans( 'admin.created_at' ) );
			$form->display( 'updated_at', trans( 'admin.updated_at' ) );
		} );
	}

	/**
	 * @return \Encore\Admin\Tree
	 */
	protected function treeView() {
		return Category::tree( function ( Tree $tree ) {
			$tree->disableCreate();

			$tree->branch( function ( $branch ) {
				$payload = "<strong>{$branch['title']}</strong>";

				if ( ! isset( $branch['children'] ) ) {
					$payload .= "&nbsp;&nbsp;&nbsp;";
				}

				return $payload;
			} );
		} );
	}
}
