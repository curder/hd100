@extends('home.layouts.master')
@section('page_title', $city['title'])
@section('content')
    <div class="banner-inner"
        style="background-image: url({{ $city->cover_url ??  config( 'app.url' ) . config('page_default_cover') }});"></div>
    {{--<div class="txt">--}}
            {{--<p class="p1">联系我们</p>--}}
            {{--<p class="p2">Contact Us</p>--}}
        {{--</div>--}}
    </div>
    <div id="bd">
        <div class="sub-col select">
            <div class="wp">
                @foreach($cities as $curr)
                    <a href="{{ route('home.pages.concat' , ['city'=> $curr['en']]) }}"
                       @if($curr['en'] == request('city', 'beijing')) class="on" @endif>{{ $curr['title'] }}</a>
                @endforeach
            </div>
        </div>
        <div class="wp">
            <div class="box-contact cont-inner">
                <div class="cont">
                    <div id="allmap" class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s"></div>
                    <div class="txt wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
                        <h2 class="tit">{{ $city['title'] }}</h2>
                        <ul class="info">
                            <li>地址：{{ $city['addr'] }}</li>
                            <li>电话：{{ $city['tel'] }}</li>
                            <li>{{ $city['phone'] }}</li>
                            <li>邮箱：{{ $city['email'] }}</li>
                            <li>邮编：{{ $city['zip_code'] }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript"
            src="http://api.map.baidu.com/api?v=2.0&ak=vIOCc21ZuaBLNvUxNIqlRRmD2sglhqII"></script>
    <script type="text/javascript">
        var map = new BMap.Map("allmap");
        var point = new BMap.Point({{ $city['longitude'] }}, {{ $city['latitude'] }});
        map.centerAndZoom(point, 13);
        var marker = new BMap.Marker(point);  // 创建标注
        map.addOverlay(marker);               // 将标注添加到地图中
        marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    </script>
@stop
