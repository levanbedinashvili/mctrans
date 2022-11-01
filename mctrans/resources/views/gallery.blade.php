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
                @forelse($gallery as $item)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-blog mb-30">

                        <div class="footer-gallery-item">
                                <img src="{{ asset('mctrans/storage/app/'. $item->image) }}" style="width: 370px; height: 260px;" alt="image_not_found">
                            <div class="link-img">
                                <a class="popup-image" href="{{ asset('mctrans/storage/app/'. $item->image) }}"></a>
                            </div>
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
