<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id')->comment('所属分类')->default(0);
            $table->string('title')->comment('标题')->nullable();
            $table->string('slug')->comment('别名')->nullable();
            $table->string('url')->nullable()->comment('URL跳转');
            $table->string('description')->comment('描述')->nullable();
            $table->integer('order')->default(0)->comment('排序，数值越小数据越靠前');
            $table->string('cover')->nullable()->comment('文章封面');
            $table->text('body')->nullable()->comment('文章内容');
            $table->tinyInteger('index_recommend')->default(0)->comment('是否首页推荐');
            $table->string('seo_title', 80)->nullable()->comment('SEO标题');
            $table->string('seo_keywords', 120)->nullable()->comment('SEO关键字');
            $table->string('seo_description', 200)->nullable()->comment('SEO描述');
            $table->text('css')->nullable()->commnet('页面CSS');
            $table->text('js')->nullable()->comment('页面JS');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
