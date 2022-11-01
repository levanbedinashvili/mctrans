@extends('layouts.app')
@section('content')
<section class="page-title-area pt-160 pb-160" data-overlay="8" data-background="{{ asset('assets/img/bg/page-title-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-title text-center">
                    <div class="border-title">
                        <h1>{{ __('main.MENU_ABOUT') }}</h1>
                    </div>
                    <h1>{{ __('main.MENU_ABOUT') }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item">
                                <a href="{{Request::root()}}/">{{ __('main.MENU_HOME') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('main.MENU_ABOUT') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- about start -->
    <section class="about-area pt-40 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-left pos-rel">

                        <div class="about-title mb-20">
                            @if (app()->getLocale()=="ka")
                            <h2>კომპანია MCTRANS</h2>
                            @endif
                            @if (app()->getLocale()=="en")
                            <h2>About Company</h2>
                            @endif
                            @if (app()->getLocale()=="ru")
                            <h2>О компании</h2>
                            @endif
                        </div>
                        @if (app()->getLocale()=="ka")
                        <p>{!! $info->about_text_geo !!}</p>
                        @endif
                        @if (app()->getLocale()=="en")
                        <p>{!! $info->about_text_eng !!}</p>
                        @endif
                        @if (app()->getLocale()=="ru")
                        <p>{!! $info->about_text_rus !!}</p>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right pos-rel">
                        <div class="about-right-thumb">
                            <img src="{{ asset('MCTRANS/storage/app/public/'.$info->image) }}" style="width:570px; height:511px;" alt="image_not_found">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about end -->


<br>
@endsection
