<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('广告名称')->nullable();
            $table->string('type')->comment('广告类型');
            $table->string('url')->comment('跳转链接')->nullable();
            $table->string('image')->comment('图片地址')->nullable();
            $table->string('description')->comment('描述')->nullable();
            $table->integer('order')->comment('排序值')->nullable()->default(0);
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
        Schema::dropIfExists('ads');
    }
}
