<?php

namespace App\Observers;
use App\Models\Link;
use Illuminate\Database\Eloquent\Model;

class LinkObserver
{
    public function saving(Model $model)
    {
        $parentColumn = $model->getParentColumn();

        if (request()->has($parentColumn) && request()->input($parentColumn) == $model->getKey()) {
            throw new \Exception(trans('admin.parent_select_error'));
        }

        if (request()->has('_order')) {
            $order = request()->input('_order');
            request()->offsetUnset('_order');

            Link::tree()->saveOrder($order);

            return false;
        }
    }

    public function saved($model)
    {
        \Cache::forget('links:list');
    }

    public function deleted()
    {
        \Cache::forget('links:list');
    }
}
