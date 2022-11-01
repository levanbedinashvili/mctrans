<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js" lang="zxx">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:url"           content="@yield('url')" />
        <meta property="og:type"          content="SAMP-FILES.CF" />
        <meta property="og:title"         content="@yield('title')" />
        <meta property="og:description"   content="@yield('description')" />
        <meta property="og:image"         content="@yield('image')" />

        <!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    </head>
    <body>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <!-- preloader start -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- preloader end  -->

        <!-- header start -->
        <header>
            <div class="header-top d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <ul class="left">
                                <li><span><i class="far fa-clock"></i></span> {{ $providerContact->contact_time }}</li>
                                <li><span><i class="fas fa-phone-alt"></i></span> {{ $providerContact->contact_phone_one }}</li>
                                @if (app()->getLocale()=="ka")
                                <li><span><i class="fas fa-map-marker-alt"></i></span> {{$providerContact->contact_address_geo}}</li>
                                @endif
                                @if (app()->getLocale()=="en")
                                <li><span><i class="fas fa-map-marker-alt"></i></span> {{$providerContact->contact_address_eng}}</li>
                                @endif
                                @if (app()->getLocale()=="ru")
                                <li><span><i class="fas fa-map-marker-alt"></i></span> {{$providerContact->contact_address_rus}}</li>
                                @endif
                            </ul>
                            <ul class="right">
                                <li><a href="{{ $providerContact->contact_facebook }}"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="{{ $providerContact->contact_instagram }}"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{ $providerContact->contact_youtube }}"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo logo-2">
                                <a href="{{Request::root()}}/"><img src="{{Request::root()}}/assets/img/logo/logo.png" style="height: 60px;!important" alt="logo_not_found"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="header-button d-none d-lg-block f-right">


                                <a href="{{Request::root()}}/locale/ka"><img src="{{Request::root()}}/assets/flags/geo.png"></a>
                                <a href="{{Request::root()}}/locale/en"><img src="{{Request::root()}}/assets/flags/eng.png"></a>
                                <a href="{{Request::root()}}/locale/ru"><img src="{{Request::root()}}/assets/flags/rus.png"></a>



                            </div>
                            <div class="main-menu f-right">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li><a href="{{Request::root()}}/">{{ __('main.MENU_HOME') }}</a></li>
                                        <li><a href="{{Request::root()}}/about">{{ __('main.MENU_ABOUT') }}</a></li>
                                        <li><a>{{ __('main.MENU_SERVICES') }}</a>
                                            <ul class="submenu">
                                                @foreach ($providerServices as $providerService)
                                                    @if (app()->getLocale()=="ka")
                                                        <li><a href="{{ route('service_detail' , $providerService->service_list_id) }}">{{ $providerService->service_list_title_geo }}</a></li>
                                                    @endif
                                                    @if (app()->getLocale()=="en")
                                                        <li><a href="{{ route('service_detail' , $providerService->service_list_id) }}">{{ $providerService->service_list_title_eng }}</a></li>
                                                    @endif
                                                    @if (app()->getLocale()=="ru")
                                                        <li><a href="{{ route('service_detail' , $providerService->service_list_id) }}">{{ $providerService->service_list_title_rus }}</a></li>
                                                    @endif
                                                @endforeach 


                                            </ul>
                                        </li>

                                        <li><a>{{ __('main.MENU_BRANCHES') }}</a>
                                            <ul class="submenu">
                                                @foreach ($providerBranhces as $providerBrance)
                                                    @if (app()->getLocale()=="ka")
                                                        <li><a href="{{ route('branch_detail' , $providerBrance->filialebi_id) }}">{{ $providerBrance->filialebi_title_geo }}</a></li>
                                                    @endif
                                                    @if (app()->getLocale()=="en")
                                                        <li><a href="{{ route('branch_detail' , $providerBrance->filialebi_id) }}">{{ $providerBrance->filialebi_title_eng }}</a></li>
                                                    @endif
                                                    @if (app()->getLocale()=="ru")
                                                        <li><a href="{{ route('branch_detail' , $providerBrance->filialebi_id) }}">{{ $providerBrance->filialebi_title_rus }}</a></li>
                                                    @endif
                                                @endforeach 
                                            </ul>
                                        </li>

                                        <li><a>{{ __('main.MENU_MEDIA') }}</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('gallery') }}">{{ __('main.MENU_GALLERY') }}</a></li>
                                                <li><a href="{{ route('video_gallery') }}">{{ __('main.MENU_VGALLERY') }}</a></li>
                                                <li><a href="{{ route('news_list') }}">{{ __('main.MENU_NEWS') }}</a></li>
                                            </ul>
                                        </li>


                                        <li><a href="{{Request::root()}}/mxileba">{{ __('main.MENU_MXILEBA') }}</a></li>
                                        <li><a href="{{Request::root()}}/contact">{{ __('main.MENU_CONTACT') }}</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->

        <main>
            @yield('content')
        </main>

        <!-- footer start -->
        <footer>

            <div class="copyright-area pt-20 pb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                @if (app()->getLocale()=="ka")
                                <p>სააავტორო უფლებები დაცულია - 2021. დამზადებულია ITWEB.GE-ის მიერ</p>
                                @endif
                                @if (app()->getLocale()=="en")
                                <p>All rights reserved - 2021. Made By ITWEB.GE</p>
                                @endif
                                @if (app()->getLocale()=="ru")
                                <p>@ 2021 ITWEB.GE</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->

        <!-- JS here -->
        <script src="{{ asset('assets/js/vendor/modernizr-3.8.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
        <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>
