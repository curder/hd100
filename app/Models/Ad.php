<?php

namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ad extends Model
{
    use SoftDeletes, AdminBuilder;

    public static $types = ['首页Banner', '成功案例', '资质荣誉'];

    protected $fillable = [
        'title', 'order', 'type', 'url', 'description', 'image'
    ];
}
