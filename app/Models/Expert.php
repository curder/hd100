<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expert extends Model
{
    use SoftDeletes;


    public function getExpertUrlAttribute()
    {
        return route('home.experts.show', [$this]);
    }
}
