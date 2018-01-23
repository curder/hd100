<div class="footer">
    <div class="siteMap">
        <div class="content ofh wp">
            <div class="fl fLeft relative">
                <div class="box">
                    <h2 class="title mb-30">网站地图</h2>
                    <h3 class="mb-10"><a href="/">首页</a></h3>
                    <div class="oneMenu mb-10">
                        <ul class="ofh">
                            @foreach($footer_navigations as $navigation)
                                <li>
                                    <strong>
                                        <a style="cursor:default;"
                                           href="{{ $navigation['url'] }}">{{ $navigation['title'] }}</a>
                                    </strong>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="towMenu ofh">
                        @foreach($footer_navigations as $navigation)
                            @if($navigation['children'])
                                <ul class="fl">
                                    @foreach ($navigation['children'] as $sub)
                                        <li><a href="{{ $sub['url'] }}">{{ $sub['title'] }}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="fr">
                <div class="box">
                    <div class="clearfix ofh">
                        咨询热线：<br>
                        <span>{{ config('hotline') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footerMenu">
        <div class="box">
            <ul class="ofh">
                <li style="float:right;color: #636363;">
                    <a href="#" target="_blank" style="color: #636363;">琼ICP备11000029号</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- 底部 end -->

<!-- 手机导航 -->
<div id="aside" class="ani">
    <ul class="menu">
        @foreach($top_navigations as $key => $navigation)
            <li>
                <a href="{{ $navigation['url'] }}"
                   class="@if($key === 0) on @endif v1">{{ $navigation['title'] }}</a>
                @if($navigation['children'])
                    <div class="sub">
                        @foreach($navigation['children'] as $sub)
                            <a href="{{ $sub['url'] }}">{{ $sub['title'] }}</a>
                        @endforeach
                    </div>
                @endif
            </li>
        @endforeach
    </ul>
</div>
