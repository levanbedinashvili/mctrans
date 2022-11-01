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
                            <h1>{{ __('main.MENU_BRANCHES') }}</h1>
                        </div>
                        <h1>{{ __('main.MENU_BRANCHES') }}</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item">
                                    <a href="{{Request::root()}}/">{{ __('main.MENU_HOME') }}</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('main.MENU_BRANCHES') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->

    <!-- services start -->
    <section class="services-details pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 pr-25">
                    <div class="s-details-single mb-40">
                        <div class="s-details-thumb">
                            @if($filiali->image)
                            <img src="{{ asset('mctrans/storage/app/public/'. $filiali->image) }}" style="width: 750px; height:500px;" alt="image_not_found">
                            @endif
                        </div>
                        <div class="s-details-text">
                            @if (app()->getLocale()=="ka")
                            <h2>{{ $filiali->filialebi_title_geo }}</h2>
                            <p>{!! $filiali->filialebi_text_geo !!}</p>
                            @endif
                            @if (app()->getLocale()=="en")
                            <h2>{{ $filiali->filialebi_title_eng }}</h2>
                            <p>{!! $filiali->filialebi_text_eng !!}</p>
                            @endif
                            @if (app()->getLocale()=="ru")
                            <h2>{{ $filiali->filialebi_title_rus }}</h2>
                            <p>{!! $filiali->filialebi_text_rus !!}</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="s-detls-right">
                        @if (app()->getLocale()=="ka")
                        <div class="services-sidebar mb-40">
                            <div class="services-title">
                                <h2>სხვა ფილიალები</h2>
                            </div>
                            <ul>
                                @foreach ($providerBranhces as $branch)
                                <li>
                                    <div class="services-link">
                                        <a href="{{ route('branch_detail', $branch->filialebi_id ) }}">{{ $branch->filialebi_title_geo }}</a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @if (app()->getLocale()=="en")
                        <div class="services-sidebar mb-40">
                            <div class="services-title">
                                <h2>Other branches</h2>
                            </div>
                            <ul>
                                @foreach ($providerBranhces as $branch)
                                <li>
                                    <div class="services-link">
                                        <a href="{{ route('branch_detail', $branch->filialebi_id ) }}">{{ $branch->filialebi_title_eng }}</a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @if (app()->getLocale()=="ru")
                        <div class="services-sidebar mb-40">
                            <div class="services-title">
                                <h2>Другие филиалы</h2>
                            </div>
                            <ul>
                                @foreach ($providerBranhces as $branch)
                                <li>
                                    <div class="services-link">
                                        <a href="{{ route('branch_detail', $branch->filialebi_id ) }}">{{ $branch->filialebi_title_rus }}</a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services end -->
</main>
@endsection
