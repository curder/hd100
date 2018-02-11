@extends('home.layouts.master')
@section('page_title',$post->seo_title ?? $post->title)
@section('page_keywords',$post->seo_keywords)
@section('page_description',$post->seo_description)

@section('banner')
    <div class="banner-inner"
         style="background-image: url({{ $post->category->cover_url ??  config( 'app.url' ) .'images/services.png' }});"></div>
@stop
@section('content')
    <div id="bd">
        <div class="wp">
            <div class="box-news-info cont-inner">
                <h1 class="tit">{{ $post->title }}</h1>
                <p class="date-1">作者：{{ $post->author ?? config('default_news_author') }}</p>
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
