@extends('home.layouts.master')

@section('banner')
    <div class="banner-inner" style="background-image: url({{ $post->category->cover }});"></div>
@stop
@section('content')
    <div id="bd">
        <div class="wp">
            <div class="box-news-info cont-inner">
                <h1 class="tit">{{ $post->title }}</h1>
                <p class="date-1">{{ $post->created_at->format('Y-m-d') }}</p>
                <div class="info">
                    {!! $post->body !!}
                </div>
                @if($post->tags->toArray())
                    <div class="tips">
                        @foreach($post->tags as $tag)
                            <a>{{$tag->title}}</a>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop
