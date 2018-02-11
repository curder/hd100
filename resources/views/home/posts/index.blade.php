@extends('home.layouts.master')
@section('page_title',$category->title)
@section('banner')
    <div class="banner-inner" style="background-image: url({{ $category->cover_url ?? config( 'app.url' ) . 'images/services.png' }});"></div>
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
                                <img src="{{ $post->cover_url }}"
                                     alt="{{ $post->title }}">
                                <p class="tit">{{ $post->title }}</p>
                                <div class="info">
                                    {{ $post->description }}
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>

                @include('home.widgets.page',['model' => $posts])
            </div>
        </div>
    </div>
@stop
