<div class="box">
    <h2 class="title mb-30">网站地图</h2>
    <h3 class="mb-10"><a href="/">首页</a></h3>
    <div class="oneMenu mb-10">
        <ul class="ofh">
            @foreach(collect($footer_navigations)->sortBy('order') as $navigation)
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
        @foreach(collect($footer_navigations)->sortBy('order') as $navigation)
            @if($navigation['children'])
                <ul class="fl">
                    @foreach (collect($navigation['children'])->sortBy('order') as $sub)
                        <li><a href="{{ $sub['url'] }}">{{ $sub['title'] }}</a></li>
                    @endforeach
                </ul>
            @endif
        @endforeach
    </div>
</div>
