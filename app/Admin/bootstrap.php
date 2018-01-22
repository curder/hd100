<?php

/**
 * Laravel-admin - admin builder based on Laravel.
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 * Encore\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 * Encore\Admin\Form::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

use App\Admin\Extensions\Forms\CKEditor;
use App\Admin\Extensions\Forms\PHPEditor;
use App\Admin\Extensions\Forms\WangEditor;
use Encore\Admin\Form;

Encore\Admin\Form::forget(['map', 'editor']);

Form::extend('editor', WangEditor::class); // 编辑器
//Form::extend('ckeditor', CKEditor::class);

Form::extend('php', PHPEditor::class); // 代码编辑器
