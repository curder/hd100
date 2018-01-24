@extends('home.layouts.master')
@section('banner')
    <div class="banner-inner" style="background-image: url(images/services.png);">
        {{--<div class="txt">--}}
        {{--<p class="p1">专家团队</p>--}}
        {{--<p class="p2">expert team</p>--}}
        {{--</div>--}}
    </div>
@stop
@section('content')
    <div id="bd">
        <div class="wp">
            <div class="box-team-info cont-inner">
                <div class="img">
                    <img src="{{ $expert->cover }}" alt="{{ $expert->name }}">
                </div>
                <div class="txt">
                    <h1 class="tit">{{ $expert->name }}</h1>
                    <p class="type">{{ $expert->position }}</p>
                    <div class="info">
                        <p class="nr_text_zw" style="text-align: justify;">{!! nl2br($expert->description) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
