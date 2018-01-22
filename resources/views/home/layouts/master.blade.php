<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <title>Hd100.net Index</title>
    <meta name="keywords" content="Hd100">
    <meta name="description" content="Hd100">
    <meta name="format-detection" content="telephone=no"/>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{--<link rel="stylesheet" href="./assets/css/cui.css"/>--}}
    {{--<link rel="stylesheet" href="./assets/css/lib.css"/>--}}
    {{--<link rel="stylesheet" href="./assets/css/style.css"/>--}}
    {{--<link rel="stylesheet" href="./assets/css/less.css">--}}
    {{--<link rel="stylesheet" href="./assets/css/animate.min.css">--}}
    {{--<link rel="stylesheet" href="./assets/css/slick.css">--}}

    {{--<script type="text/javascript" src="./assets/js/jquery.js"></script>--}}
    {{--<script type="text/javascript" src="./assets/js/lib.js"></script>--}}
    <script src="{{ mix('js/app.js') }}"></script>

</head>
<body>
<div id="app">
@section('header')@include('home.layouts.header')@show

@yield('banner')


@yield('content')


@section('footer')@include('home.layouts.footer')@show

<!-- 手机导航 end -->
    <!-- 返回引导页 -->
    <!--<div class="btnbox-index">-->
    <!--<a href="##">QQ<br>聊天</a>-->
    <!--<a href="/index.html">商业<br>公司</a>-->
    <!--<a href="/index.php">工程<br>公司</a>-->
    <!--</div>-->
    <!-- 返回引导页 end -->
    {{--<script src="./assets/js/slick.min.js"></script>--}}
    {{--<script src="./assets/js/headroom.min.js"></script>--}}
    {{--<script src="./assets/js/jQuery.headroom.js"></script>--}}
    {{--<script src="./assets/js/wow.min.js"></script>--}}

    <script>
        $(function () {
            $("#toptop").hover(function () {
                $("#hd").removeClass("slideUp").addClass('slideDown')
            })
        })
    </script>
    <script>
        $(function () {
            // 头部
            $('#hd').headroom({
                offset: 205,
                tolerance: 5,
                classes: {
                    initial: 'ani',
                    pinned: 'slideDown',
                    unpinned: 'slideUp'
                }
            });

            // banner
            $('#banner').slick({
                dots: true,
                autoplay: true,
                customPaging: function () {
                    return '';
                },
                prevArrow: '<a href="javascript:;" class="btn btn-prev"></a>',
                nextArrow: '<a href="javascript:;" class="btn btn-next"></a>'
            });
        })
    </script>
</div>
