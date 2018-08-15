<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <title>@yield('page_title') {{ '-' . config('domain_title') }}</title>
    <meta name="keywords" content="@yield('page_keywords', config('page_keywords'))">
    <meta name="description" content="@yield('page_description', config('page_description'))">
    <meta name="format-detection" content="telephone=no"/>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body>
    <div id="app">
        @section('header')@include('home.layouts.header')@show
        @yield('banner')
        @yield('content')
        @section('footer')@include('home.layouts.footer')@show
        @include('home.widgets.baidu_statistics_code')
    </div>
</body>
</html>
