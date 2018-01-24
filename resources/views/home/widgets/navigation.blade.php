<ul id="nav">
    @foreach(collect($top_navigations)->sortBy('order') as $navigation)
        <li>
            <a href="{{ $navigation['url'] }}" class="@if($navigation['children']) child @else par @endif">{{ $navigation['title'] }}</a>
            @if($navigation['children'])
                <div class="sub">
                    @foreach (collect($navigation['children'])->sortBy('order') as $sub)
                        <a href="{{ $sub['url'] }}">{{ $sub['title'] }}</a>
                    @endforeach
                </div>
            @endif
        </li>
    @endforeach
</ul>
