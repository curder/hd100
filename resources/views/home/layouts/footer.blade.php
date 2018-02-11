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
        <div class="box wp">
            <ul class="ofh">
                @foreach($legal_notices as $notice)
                    <li>
                        @if($notice['url'])
                            <a href="{{ $notice['url'] }}" target="_blank">
                                @if($notice['cover'])
                                    <img src="{{ $notice['cover'] }}" alt="{{ $notice['title'] }}">
                                @else
                                    {{ $notice['title'] }}
                                @endif
                            </a>
                        @else
                            {{ $notice['title'] }}
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
{{--手机导航--}}
@include('home.widgets.mobile_navigation')
