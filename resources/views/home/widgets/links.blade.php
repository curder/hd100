<div class="links">
    <div class="link">
        <div class="title"><strong class="zh_cn">友情链接</strong>&nbsp;<span class="en">Links</span></div>
        <ul>
            @foreach(collect($friend_links)->sortBy('order') as $link)
                <li>
                    <a href="{{ $link['url'] }}" target="_blank">{{ $link['title'] }}</a>
                    @if($link['id'] !== collect($friend_links)->sortBy('order')->last()['id'])|@endif
                </li>
            @endforeach
        </ul>
    </div>
</div>
