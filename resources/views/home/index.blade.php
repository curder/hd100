@extends('home.layouts.master')

@section('banner')
    <div id="banner">
        @foreach($index_banners as $banner)
            <a href="{{ $banner['url'] }}">
                <div class="item" style="background-image: url({{$banner['image']}});">
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
                <p class="p1">资讯中心</p>
                <p class="p2">news</p>
            </h2>
            <div class="wp">
                <div class="list">
                    <div class="news-list">
                        <h3><span><a href="../../xwdt/hydt/">更多&gt;&gt;</a></span>行业新闻</h3>
                        <ul>
                            <li><a href="/html/17094329.html" target="_blank" title="从2016年建筑业改革看2017年行业发展形势">从2016年建筑业改革看2017年行业发展形势</a>
                            </li>
                            <li><a href="/html/051948137.html" target="_blank"
                                   title="2017年，中国建筑业的十大猜想">2017年，中国建筑业的十大猜想</a>
                            </li>
                            <li><a href="/html/59748311.html" target="_blank" title="营改增后施工企业税负升高，可能是因为这些问题没搞懂！">营改增后施工企业税负升高，可能是因为这些问题没搞懂！</a>
                            </li>
                            <li><a href="/html/402695850.html" target="_blank" title="住房和城乡建设部：北京市建筑业企业资质问答汇总">住房和城乡建设部：北京市建筑业企业资质问答汇总</a>
                            </li>
                            <li><a href="/html/58206380.html" target="_blank"
                                   title="北京市人民政府办公厅关于印发市发展改革委等部门制定的《北京市新增产业的禁止和限制目录(2015年版)》的通知">北京市人民政府办公厅关于印发市发展改革委等部门制定的《北京市新增产业的禁止和限制目录(2015年版)》的通知</a>
                            </li>
                            <li><a href="/html/2871361856.html" target="_blank" title="关于尽快换发建筑业企业新版资质证书的通知">关于尽快换发建筑业企业新版资质证书的通知</a>
                            </li>
                        </ul>
                    </div>
                    <div class="news-list">
                        <h3><span><a href="../../xwdt/hydt/">更多&gt;&gt;</a></span>行业新闻</h3>
                        <ul>
                            <li><a href="/html/17094329.html" target="_blank" title="从2016年建筑业改革看2017年行业发展形势">从2016年建筑业改革看2017年行业发展形势</a>
                            </li>
                            <li><a href="/html/051948137.html" target="_blank"
                                   title="2017年，中国建筑业的十大猜想">2017年，中国建筑业的十大猜想</a>
                            </li>
                            <li><a href="/html/59748311.html" target="_blank" title="营改增后施工企业税负升高，可能是因为这些问题没搞懂！">营改增后施工企业税负升高，可能是因为这些问题没搞懂！</a>
                            </li>
                            <li><a href="/html/402695850.html" target="_blank" title="住房和城乡建设部：北京市建筑业企业资质问答汇总">住房和城乡建设部：北京市建筑业企业资质问答汇总</a>
                            </li>
                            <li><a href="/html/58206380.html" target="_blank"
                                   title="北京市人民政府办公厅关于印发市发展改革委等部门制定的《北京市新增产业的禁止和限制目录(2015年版)》的通知">北京市人民政府办公厅关于印发市发展改革委等部门制定的《北京市新增产业的禁止和限制目录(2015年版)》的通知</a>
                            </li>
                            <li><a href="/html/2871361856.html" target="_blank" title="关于尽快换发建筑业企业新版资质证书的通知">关于尽快换发建筑业企业新版资质证书的通知</a>
                            </li>
                        </ul>
                    </div>
                    <div class="news-list">
                        <h3><span><a href="../../xwdt/hydt/">更多&gt;&gt;</a></span>行业新闻</h3>
                        <ul>
                            <li><a href="/html/17094329.html" target="_blank" title="从2016年建筑业改革看2017年行业发展形势">从2016年建筑业改革看2017年行业发展形势</a>
                            </li>
                            <li><a href="/html/051948137.html" target="_blank"
                                   title="2017年，中国建筑业的十大猜想">2017年，中国建筑业的十大猜想</a>
                            </li>
                            <li><a href="/html/59748311.html" target="_blank" title="营改增后施工企业税负升高，可能是因为这些问题没搞懂！">营改增后施工企业税负升高，可能是因为这些问题没搞懂！</a>
                            </li>
                            <li><a href="/html/402695850.html" target="_blank" title="住房和城乡建设部：北京市建筑业企业资质问答汇总">住房和城乡建设部：北京市建筑业企业资质问答汇总</a>
                            </li>
                            <li><a href="/html/58206380.html" target="_blank"
                                   title="北京市人民政府办公厅关于印发市发展改革委等部门制定的《北京市新增产业的禁止和限制目录(2015年版)》的通知">北京市人民政府办公厅关于印发市发展改革委等部门制定的《北京市新增产业的禁止和限制目录(2015年版)》的通知</a>
                            </li>
                            <li><a href="/html/2871361856.html" target="_blank" title="关于尽快换发建筑业企业新版资质证书的通知">关于尽快换发建筑业企业新版资质证书的通知</a>
                            </li>
                        </ul>
                    </div>
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
                        <img class="show" src="{{ $case['image'] }}" alt="{{ $banner['title'] }}">
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
                            <div class="pic"><img src="{{$honor->image}}"></div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="links">
        <div class="link">
            <div class="title"><strong class="zh_cn">友情链接</strong>&nbsp;<span class="en">Links</span></div>
            <ul>
                @foreach($friend_links as $link)
                    <li>
                        <a href="{{ $link['url'] }}" target="_blank">{{ $link['title'] }}</a>
                        @if($link['id'] !== collect($friend_links)->last()['id'])|@endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
