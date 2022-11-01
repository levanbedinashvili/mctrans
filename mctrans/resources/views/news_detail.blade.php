@extends('layouts.app')
@section('content')

@section('url')http://mctrans.ge/news/{{ $news->news_id }}@endsection

@if (app()->getLocale()=="ka")
@section('title') {{ $news->news_title_geo }} @endsection 
@section('description'){!! $news->news_text_geo !!}@endsection
@endif
@if (app()->getLocale()=="en")
@section('title') {{ $news->news_title_eng }} @endsection 
@section('description'){!! $news->news_text_eng !!}@endsection
@endif
@if (app()->getLocale()=="ru")
@section('title') {{ $news->news_title_rus }} @endsection 
@section('description'){!! $news->news_text_rus !!}@endsection
@endif
@section('image'){{ asset('MCTRANS/storage/app/public/'.$news->image) }}@endsection



<main>
    <!-- page title area start -->
    <section class="page-title-area pt-160 pb-160" data-overlay="8" data-background="{{ asset('assets/img/bg/page-title-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title text-center">
                        <div class="border-title">
                            <h1>{{ __('main.MENU_MEDIA') }}</h1>
                        </div>
                        <h1>{{ __('main.MENU_MEDIA') }}</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item">
                                    <a href="{{Request::root()}}/">{{ __('main.MENU_HOME') }}</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('main.MENU_MEDIA') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Blog start -->
    <section class="blog-content-area pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="blog-wrapper">
                        @if (app()->getLocale()=="ka")
                        <article>
                            <div class="post-item mb-40">
                                <div class="post-inner">
                                    <div class="post-thumb">
                                        <img src="{{ asset('MCTRANS/storage/app/public/'.$news->image) }}" width="750" height="422" alt="blog">
                                    </div>
                                    <br>
                                    <div class="post-content">

                                        <h4 style="overflow-wrap: break-word;" class="post-title">
                                            {{ $news->news_title_geo }}
                                        </h4>
                                        <div class="post-text">
                                            <p>{!! $news->news_text_geo !!}</p>
                                            <div class="fb-share-button" data-href="http://mctrans.ge/news/{{ $news->news_id }}" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fmctrans.ge%2Fnews%2F{{ $news->news_id }}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endif
                        @if (app()->getLocale()=="en")
                        <article>
                            <div class="post-item mb-40">
                                <div class="post-inner">
                                    <div class="post-thumb">
                                        <img src="{{ asset('MCTRANS/storage/app/public/'.$news->image) }}" width="750" height="422" alt="blog">
                                    </div>
                                    <br>
                                    <div class="post-content">

                                        <h4 style="overflow-wrap: break-word;" class="post-title">
                                            {{ $news->news_title_eng }}
                                        </h4>
                                        <div class="post-text">
                                            <p>{!! $news->news_text_eng !!}</p>
                                            <div class="fb-share-button" data-href="http://mctrans.ge/news/{{ $news->news_id }}" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fmctrans.ge%2Fnews%2F{{ $news->news_id }}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endif
                        @if (app()->getLocale()=="ru")
                        <article>
                            <div class="post-item mb-40">
                                <div class="post-inner">
                                    <div class="post-thumb">
                                        <img src="{{ asset('MCTRANS/storage/app/public/'.$news->image) }}" width="750" height="422" alt="blog">
                                    </div>
                                    <br>
                                    <div class="post-content">

                                        <h4 style="overflow-wrap: break-word;" class="post-title">
                                            {{ $news->news_title_rus }}
                                        </h4>
                                        <div class="post-text">
                                            <p>{!! $news->news_text_rus !!}</p>
                                            <div class="fb-share-button" data-href="http://mctrans.ge/news/{{ $news->news_id }}" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fmctrans.ge%2Fnews%2F{{ $news->news_id }}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endif
                        
                    </div>
                   
                 
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                   
                    <div class="widget mb-40">
                        <div class="widget-title-box mb-30">
                            <h3 class="widget-title">
                            @if (app()->getLocale()=="ka")
                            კატეგორიები
                            @endif
                            @if (app()->getLocale()=="en")
                            Categories
                            @endif
                            @if (app()->getLocale()=="ru")
                            Категории
                            @endif
                            </h3>
                        </div>
                        <ul class="cat">
                            <li>
                                <a href="{{ route('gallery') }}">{{ __('main.MENU_GALLERY') }} <span class="f-right">({{ $gallery_count }})</span></a>
                                <a href="{{ route('video_gallery') }}">{{ __('main.MENU_VGALLERY') }} <span class="f-right">({{ $video_count }})</span></a>
                                <a href="{{ route('news_list') }}">{{ __('main.MENU_NEWS') }} <span class="f-right">({{ $news_count }})</span></a>
                            </li>

                        </ul>
                    </div>
                    <div class="widget mb-40">
                        <div class="widget-title-box mb-30">
                            @if (app()->getLocale()=="ka")
                            <h3 class="widget-title">ბოლოს დამატებული სიახლეები</h3>
                            @endif
                            @if (app()->getLocale()=="en")
                            <h3 class="widget-title">Recent Post</h3>
                            @endif
                            @if (app()->getLocale()=="ru")
                            <h3 class="widget-title">Недавний пост</h3>
                            @endif
                        </div>
                        <ul class="recent-posts">
                            @foreach ($last_news as $newss)
                            <li>
                                <div class="widget-posts-image">
                                    <a href="#"><img src="{{ asset('MCTRANS/storage/app/public/'.$newss->image) }}" width="90" height="90" alt=""></a>
                                </div>
                                <div class="widget-posts-body">
                                    @if (app()->getLocale()=="ka")
                                    <h6 class="widget-posts-title "><a href="{{ route('news_detail' , $newss->news_id) }}">{{ Str::limit( $newss->news_title_geo, 20, '...') }}</a></h6>
                                    @endif
                                    @if (app()->getLocale()=="en")
                                    <h6 class="widget-posts-title"><a href="{{ route('news_detail' , $newss->news_id) }}">{{ Str::limit( $newss->news_title_eng, 20, '...') }}</a></h6>
                                    @endif
                                    @if (app()->getLocale()=="ru")
                                    <h6 class="widget-posts-title"><a href="{{ route('news_detail' , $newss->news_id) }}">{{ Str::limit( $newss->news_title_rus, 20, '...') }}</a></h6>
                                    @endif
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog end -->
</main>
@endsection