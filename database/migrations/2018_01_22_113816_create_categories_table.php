<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('分类名')->nullable();
            $table->string('uri')->comment('分类路径')->nullable();
            $table->unsignedInteger('parent_id')->comment('上级分类id')->default(0);
            $table->string('description')->comment('描述')->nullable();
            $table->string('cover')->comment('封面')->nullable();
            $table->unsignedInteger('order')->nullable()->default(0);
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
        Schema::dropIfExists('categories');
    }
}
