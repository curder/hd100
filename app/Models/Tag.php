<?php

namespace App\Models;

use App\Observers\SlugObserver;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use SlugObserver;

    protected $fillable = [
        'title', 'slug',
    ];
}
