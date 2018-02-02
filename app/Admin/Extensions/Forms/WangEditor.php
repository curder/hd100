<?php

namespace App\Admin\Extensions\Forms;

use Encore\Admin\Form\Field;

class WangEditor extends Field
{
    protected $view = 'vendor.admin.form.wang-editor';

    protected static $css = [
        '/vendor/laravel-admin/wangEditor-3.0.10/release/wangEditor.css',
    ];

    protected static $js = [
        '/vendor/laravel-admin/wangEditor-3.0.10/release/wangEditor.js',
    ];

    public function render()
    {
        $name = $this->formatName($this->column);

        $this->script = <<<EOT

var E = window.wangEditor
var editor = new E('#{$this->id}');
editor.customConfig.uploadImgParams = {
    _token:  document.head.querySelector('meta[name="csrf-token"]').content  // 属性值会自动进行 encode ，此处无需 encode
}
editor.customConfig.uploadFileName = 'editor_image'
editor.customConfig.zIndex = 0
editor.customConfig.uploadImgShowBase64 = false
editor.customConfig.uploadImgServer = '/admin/posts/upload'
editor.customConfig.onchange = function (html) {
    $('input[name=$name]').val(html);
}
editor.create()

EOT;
        return parent::render();
    }
}
