<?php

namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes, ModelTree, AdminBuilder;

    public function getCategoryUrlAttribute()
    {
        return route('home.posts.index', $this);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
