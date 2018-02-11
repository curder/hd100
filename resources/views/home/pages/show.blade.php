@extends('home.layouts.master')
@section('page_title',$page->seo_title ?? $page->title)
@section('page_keywords',$page->seo_keywords)
@section('page_description',$page->seo_description)

@section('banner')
    <div class="banner-inner"
         style="background-image: url({{ $page->category->cover_url ??  config( 'app.url' ) . '/images/services.png' }});"></div>
@stop
@section('content')
    <div id="bd">
        <div class="wp">
            <div class="box-news-info cont-inner">
                <h1 class="tit">{{ $page->title }}</h1>
                <p class="date-1">作者：{{ $page->author ?? config('default_news_author') }}</p>
                <div class="info">
                    {!! $page->body !!}
                </div>
            </div>
        </div>
    </div>
@stop
