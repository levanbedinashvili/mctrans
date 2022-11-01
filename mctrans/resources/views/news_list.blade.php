@extends('layouts.app')
@section('content')

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
<!-- page title area end -->
            
            <!-- Blog start -->
            <section class="blog-area gray-bg pt-120 pb-90">
                <div class="container">
                    <div class="row">
                    @foreach ($newses as $news)
                    @if (app()->getLocale()=="ka")
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-blog mb-30">
                            <div class="blog-thumb">
                                <a href="{{ route('news_detail' , $news->news_id) }}"> <img src="{{ asset('MCTRANS/storage/app/public/'.$news->image) }}" width="370px" height="260px" alt="image_not_found"></a>
                            </div>
                            <div class="b-content">
                                
                                <div class="b-text mb-15">
                                    <h3><a href="{{ route('news_detail' , $news->news_id) }}">{{ Str::limit( $news->news_title_geo , 23, '...') }}</a></h3>
                                </div>
                                <div class="b-btn">
                                    <a href="{{ route('news_detail' , $news->news_id) }}">სრულად ნახვა <i class="ti-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if (app()->getLocale()=="en")
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-blog mb-30">
                            <div class="blog-thumb">
                                <a href="{{ route('news_detail' , $news->news_id) }}"> <img src="{{ asset('MCTRANS/storage/app/public/'.$news->image) }}" width="370px" height="260px" alt="image_not_found"></a>
                            </div>
                            <div class="b-content">
                                
                                <div class="b-text mb-15">
                                    <h3><a href="{{ route('news_detail' , $news->news_id) }}">{{  Str::limit( $news->news_title_eng , 23, '...')  }}</a></h3>
                                </div>
                                <div class="b-btn">
                                    <a href="{{ route('news_detail' , $news->news_id) }}">Read more <i class="ti-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if (app()->getLocale()=="ru")
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-blog mb-30">
                            <div class="blog-thumb">
                                <a href="{{ route('news_detail' , $news->news_id) }}"><img src="{{ asset('MCTRANS/storage/app/public/'.$news->image) }}" width="370px" height="260px" alt="image_not_found"></a>
                            </div>
                            <div class="b-content">
                                
                                <div class="b-text mb-15">
                                    <h3><a href="{{ route('news_detail' , $news->news_id) }}">{{ Str::limit( $news->news_title_rus , 23, '...') }}</a></h3>
                                </div>
                                <div class="b-btn">
                                    <a href="{{ route('news_detail' , $news->news_id) }}">увидеть все <i class="ti-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="basic-pagination text-center mt-35">
                                <ul>
                                    <li>{!! $newses->links() !!}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog end -->
        </main>
@endsection