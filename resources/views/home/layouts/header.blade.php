<div style="width:100%;position:fixed;top:0;left:0;height:10px;z-index:999;" id="toptop"></div>
<div id="hd">
    <div class="wp">
        <a href="" class="logo">
            <img src="{{ config('logo') }}" alt="北京海汇盛景工程管理有限公司">
        </a>
        <div class="tel">
            <p class="p1">{{ config('hotline') }}</p>
            <p class="p2">24小时热线：{{ config('phone') }}</p>
        </div>
        @include('home.widgets.navigation')
    </div>
    <span class="menuBtn">
        <em></em>
        <em></em>
        <em></em>
    </span>
</div>
