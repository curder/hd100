@extends('home.layouts.master')

@section('banner')
    <div class="banner-inner" style="background-image: url({{ $category->cover }});"></div>
@stop
@section('content')
    <div id="bd">
        <div class="wp">
            <div class="box-service cont-inner">
                <h2 class="g-tit-1 tit-inner">
                    <p class="p1">{{ $category->title }}</p>
                    <p class="p2">line of </p>
                </h2>
                <ul class="list">
                    @foreach ($posts as $post)
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <a href="{{ $post->post_url }}" target="_blank" title="{{ $post->title }}">
                                <img src="{{ $post->cover }}" alt="{{ $post->title }}">
                                <p class="tit">{{ $post->title }}</p>
                                <div class="info">
                                    {{ $post->description }}
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>

                @if($posts->count())
                    <div class="pages">
                        <a class="a1" href="javascript:;">{{ $posts->total() }}条</a>
                        <a href="{{ $posts->perPage() }}" class="a1">上一页</a>
                        @for ($i = 1, $length = min(10, $posts->lastPage()); $i <= $length; $i++)
                            @if($posts->currentPage() === $i)
                                <span>{{ $i }}</span>
                            @else
                                <a href="{{ $posts->url($i) }}">{{ $i }}</a>
                            @endif
                        @endfor
                        <a href="{{ $posts->nextPageUrl() }}" class="a1">下一页</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop
