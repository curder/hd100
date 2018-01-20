<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('名称');
            $table->unsignedInteger('parent_id')->comment('父级id')->default(0);
            $table->string('url')->comment('链接地址')->nullable();
            $table->string('description')->comment('描述')->nullable();
            $table->integer('order')->comment('排序值')->default(0);
            $table->string('logo')->nullable()->comment('链接图片');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('links');
    }
}
