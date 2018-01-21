<?php

namespace App\Observers;

trait SlugObserver
{
    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            // 生成标签名称
            if (!$model->slug) {
                $slug = app('translug')->translug($model->title);
                if ($count = self::where('slug', $slug)->count()) {
                    if ($count) $slug = "$slug-$count";
                }
                $model->slug = $slug;
            }
        });
    }
}
