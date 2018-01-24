<?php

namespace App\Models;

use App\Observers\LinkObserver;
use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;

class Link extends Model
{
    use SoftDeletes, ModelTree, AdminBuilder;


    public static function boot()
    {
        parent::boot();
        static::observe(new LinkObserver);
    }

    public function getAllLinks()
    {
        return Cache::remember('links:list', 24 * 60, function () {
            return Link::all()->toArray();
        });
    }
}
