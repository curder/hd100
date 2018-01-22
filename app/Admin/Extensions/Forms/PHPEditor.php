<?php

namespace App\Admin\Extensions\Forms;

use Encore\Admin\Form\Field;

class PHPEditor extends Field
{
    protected $view = 'vendor.admin.form.php-editor';

    protected static $css = [
        '/vendor/laravel-admin/codemirror-5.33.0/lib/codemirror.css',
    ];

    protected static $js = [
        '/vendor/laravel-admin/codemirror-5.33.0/lib/codemirror.js',
        '/vendor/laravel-admin/codemirror-5.33.0/addon/edit/matchbrackets.js',
        '/vendor/laravel-admin/codemirror-5.33.0/mode/htmlmixed/htmlmixed.js',
        '/vendor/laravel-admin/codemirror-5.33.0/mode/xml/xml.js',
        '/vendor/laravel-admin/codemirror-5.33.0/mode/javascript/javascript.js',
        '/vendor/laravel-admin/codemirror-5.33.0/mode/css/css.js',
        '/vendor/laravel-admin/codemirror-5.33.0/mode/clike/clike.js',
        '/vendor/laravel-admin/codemirror-5.33.0/mode/php/php.js',
    ];

    public function render()
    {
        $this->script = <<<EOT

CodeMirror.fromTextArea(document.getElementById("{$this->id}"), {
    lineNumbers: true,
    mode: "text/x-php",
    extraKeys: {
        "Tab": function(cm){
            cm.replaceSelection("    " , "end");
        }
     }
});

EOT;
        return parent::render();

    }
}
