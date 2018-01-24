@extends('home.layouts.master')

@section('content')
    <div class="banner-inner" style="background-image: url(images/services.png);">
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

            {{--<div class="cont">--}}
            {{--<div id="maphk" class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s"></div>--}}
            {{--<div class="txt wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s">--}}
            {{--<h2 class="tit">汇德集团海口分公司（海南汇德咨询）</h2>--}}
            {{--<ul class="info">--}}
            {{--<li>地址：海南省海口市国贸大道A-8小区申亚大厦第18层</li>--}}
            {{--<li>电话：0898－66804684</li>--}}
            {{--<li>18089779360</li>--}}
            {{--<li>邮箱：hd100@hd100.net</li>--}}
            {{--<li>邮编：570125</li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="cont">--}}
            {{--<!--<div id="map_gy" class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s"></div>-->--}}
            {{--<!--<div class="txt wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s">-->--}}
            {{--<!--<h2 class="tit">汇德集团贵阳分公司（贵州汇德咨询）</h2>-->--}}
            {{--<!--<ul class="info">-->--}}
            {{--<!--<li>地址：贵州省铜仁市碧江区国投阳光城22栋商业一层二层 </li>-->--}}
            {{--<!--<li>电话：0851-85211446 </li>-->--}}
            {{--<!--<li>18089779360</li>-->--}}
            {{--<!--<li>邮箱：275337230@qq.com </li>-->--}}
            {{--<!--<li>邮编：554309  </li>-->--}}
            {{--<!--</ul>-->--}}
            {{--<!--</div>-->--}}
            {{--<!--</div>-->--}}

            {{--<!--<div class="cont">-->--}}
            {{--<!--<div id="map_sx" class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s"></div>-->--}}
            {{--<!--<div class="txt wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s">-->--}}
            {{--<!--<h2 class="tit">汇德集团陕西分公司（陕西汇德咨询） </h2>-->--}}
            {{--<!--<ul class="info">-->--}}
            {{--<!--<li>地址：陕西榆林高新区阳光广场西南一一榆商大厦B座27层 </li>-->--}}
            {{--<!--<li>电话：13992280898</li>-->--}}
            {{--<!--<li>18089779360</li>-->--}}
            {{--<!--<li>邮箱：wGTLAwYER@163.com </li>-->--}}
            {{--<!--<li>邮编：719000</li>-->--}}
            {{--<!--</ul>-->--}}
            {{--<!--</div>-->--}}
            {{--</div>--}}

            </div>
        </div>
    </div>
    <script type="text/javascript"
            src="http://api.map.baidu.com/api?v=2.0&ak=vIOCc21ZuaBLNvUxNIqlRRmD2sglhqII"></script>

    <script type="text/javascript">
        // 北京
        var map = new BMap.Map("allmap");
        var point = new BMap.Point({{ $city['longitude'] }}, {{ $city['latitude'] }});
        map.centerAndZoom(point, 13);
        var marker = new BMap.Marker(point);  // 创建标注
        map.addOverlay(marker);               // 将标注添加到地图中
        marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    </script>
@stop
