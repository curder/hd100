<div class="footer">
    <div class="siteMap">
        <div class="content ofh wp">
            <div class="fl fLeft relative">
                @include('home.widgets.site_bottom_map')
            </div>
            <div class="fr">
                <div class="box">
                    <div class="clearfix ofh">
                        咨询热线：<br>
                        <span>{{ config('footer_hotline') }}</span>
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
{{--手机导航--}}
@include('home.widgets.mobile_navigation')
