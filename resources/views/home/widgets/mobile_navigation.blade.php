<div id="aside" class="ani">
    <ul class="menu">
        @foreach(collect($top_navigations)->sortBy('order') as $key => $navigation)
            <li>
                <a href="{{ $navigation['url'] }}"
                   class="@if($key === 0) on @endif v1">{{ $navigation['title'] }}</a>
                @if($navigation['children'])
                    <div class="sub">
                        @foreach(collect($navigation['children'])->sortBy('order') as $sub)
                            <a href="{{ $sub['url'] }}">{{ $sub['title'] }}</a>
                        @endforeach
                    </div>
                @endif
            </li>
        @endforeach
    </ul>
</div>
