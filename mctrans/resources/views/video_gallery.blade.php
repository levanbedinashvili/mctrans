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
                @forelse($video_gallery as $item)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-blog mb-30">
                        <div class="blog-thumb">
                                <iframe width="370" height="260" src="https://www.youtube.com/embed/{{ $item->video_gallery_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        </div>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>
    <!-- Blog end -->
</main>
@endsection