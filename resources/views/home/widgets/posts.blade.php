@if($category->posts)
    <div class="news-list">
        <h3><span><a href="{{ route('home.posts.index', $category) }}">更多&gt;&gt;</a></span>{{ $category->title }}</h3>
        <ul>
            @foreach($category->posts as $post)
                <li><a href="{{ $post->post_url }}" target="_blank"
                       title="{{ $post->title }}">{{ $post->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endif
