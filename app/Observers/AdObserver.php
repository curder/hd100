<?php

namespace App\Observers;
use App\Models\Link;
use Illuminate\Database\Eloquent\Model;

class AdObserver
{
    public function saved($model)
    {
        \Cache::forget('ads:list');
    }

    public function deleted()
    {
        \Cache::forget('ads:list');
    }
}
