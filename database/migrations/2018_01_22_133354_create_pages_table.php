<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'pages', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->unsignedInteger( 'parent_id' )->comment( '父级' );
			$table->string( 'title' )->comment( '页面标题' )->nullable();
			$table->string( 'author' )->nullable()->default( '' )->comment( '文章作者' );
			$table->string( 'slug' )->comment( '页面别名' )->nullable();
			$table->string( 'url' )->comment( '外链URL' )->nullable();
			$table->string( 'cover' )->comment( '页面封面' )->nullable();
			$table->text( 'body' )->comment( '页面内容' )->nullable();
			$table->string( 'seo_title' )->comment( 'SEO标题' )->nullable();
			$table->string( 'seo_keywords' )->comment( 'SEO关键字' )->nullable();
			$table->string( 'seo_description' )->comment( 'SEO描述' )->nullable();
			$table->text( 'css' )->comment( '页面CSS' )->nullable();
			$table->text( 'js' )->comment( '页面JS' )->nullable();
			$table->unsignedInteger( 'order' )->comment( '排序' )->default( 0 );
			$table->string( 'customize_template', 100 )->nullable()->default( '' )->comment( '自定义模板' );
			$table->softDeletes();
			$table->timestamps();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'pages' );
	}
}
