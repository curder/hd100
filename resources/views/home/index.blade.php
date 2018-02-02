@extends('home.layouts.master')
@section('page_title', '首页')
@section('page_keywords', '关键字')
@section('page_description', '描述')
@section('banner')
    <div id="banner">
        @foreach($index_banners as $banner)
            <a href="{{ $banner['url'] }}">
                <div class="item" style="background-image: url({{$banner['image_url']}});">
                {{--<div class="txt">--}}
                <!--<p class="p1">打造中国一流的工程代建综合服务商 </p>-->
                    <!--<p class="p2">To build China's first-class agent management services integrated service providers </p>-->
                    {{--<a href="#" class="more"></a>--}}
                    {{--</div>--}}
                </div>
            </a>
        @endforeach
    </div>
@stop
@section('content')
    <div class="bd">
        <div class="section-index-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
            <h2 class="g-tit-1">
                <p class="p1">行业资讯</p>
                <p class="p2">news</p>
            </h2>
            <div class="wp">
                <div class="list">
                    @include('home.widgets.posts', ['category' => $first_post_list])
                    @include('home.widgets.posts', ['category' => $second_post_list])
                    @include('home.widgets.posts', ['category' => $third_post_list])
                </div>
            </div>
        </div>
    </div>

    <div class="wp page relative service content ofh fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
        <div class="indexTitle absolute">
            <div class="content">
                <h2>our Services</h2>
                <h3>我们的服务</h3>
            </div>
        </div>
        <div class="serviceSlid relative">
            <ul class="ofh w100">
                @foreach($case_banners as $case)
                    <li style="display: none;">
                        <img class="show" src="{{ $case['image_url'] }}" alt="{{ $banner['title'] }}">
                        <div class="txtBox">
                            <div class="content">
                                <h3></h3>
                                <h2></h2>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="serviceList absolute w100">
            <div class="content relative ofh">
                <ul class="ofh">
                    @foreach($case_banners as $key => $case)
                        <li class="@if($key === 0) cur @endif">
                            <div class="box">
                                <h2 class="mb-10"><i class="icon consulting"></i>{{ $case['title'] }}</h2>
                                <div class="txtBox">{{ $case['description'] }}</div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div id="honor_list">
        <div class="wp honor_show"><strong class="zh_cn">资质荣誉</strong>&nbsp;<span class="en">Honors</span></div>
        <div class="wp picMarquee-left">
            <div class="hd">
                <a class="next"></a>
                <a class="prev"></a>
            </div>
            <div class="bd">
                <ul class="picList">
                    @foreach($honor_banners as $honor)
                        <li>
                            <div class="pic"><img src="{{$honor->image_url}}"></div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @include('home.widgets.links')
@endsection
