@extends('home.layouts.master')
@section('page_title', '专家团队')
@section('content')
    <div class="banner-inner" style="background-image: url({{ config( 'app.url' ) . config('page_default_cover') }});">
        {{--<div class="txt">--}}
        {{--<p class="p1">专家团队</p>--}}
        {{--<p class="p2">expert team</p>--}}
        {{--</div>--}}
    </div>

    <div id="bd">
        <div class="wp">
            <div class="box-team cont-inner">
                <h2 class="g-tit-1 tit-inner">
                    <p class="p1">专家团队</p>
                    <p class="p2">expert team</p>
                </h2>
                <ul class="list">
                    @foreach($experts as $expert)
                        <li class="ani wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                            <a href="{{ $expert->expert_url }}">
                                <div class="img">
                                    <div class="cont">
                                        <img src="{{ $expert->cover }}" alt="">
                                    </div>
                                </div>
                                <div class="txt">
                                    <h2 class="tit">{{ $expert->name }}</h2>
                                    <p class="type">{{ $expert->position }}</p>
                                    <div class="info">{!! nl2br($expert->description) !!}</div>
                                    <span class="more"></span>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>

                @include('home.widgets.page',['model' => $experts])
            </div>
        </div>
    </div>
@stop
