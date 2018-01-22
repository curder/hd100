<?php

namespace App\Admin\Extensions\Forms;

use Encore\Admin\Form\Field;

class CKEditor extends Field
{
    protected $view = 'vendor.admin.form.ckeditor';
    public static $js = [
        '/vendor/laravel-admin/ckeditor/ckeditor.js',
        '/vendor/laravel-admin/ckeditor/adapters/jquery.js',
    ];


    public function render()
    {
        $this->script = "$('textarea.{$this->id}').ckeditor();";

        return parent::render();
    }
}
