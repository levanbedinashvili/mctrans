@extends('layouts.app')
@section('content')
     <!-- slider start -->
     <section class="slider-area">
        <div class="slider-active">



            <div class="single-slider slider-height pos-rel d-flex align-items-center" data-background="{{ asset('mctrans/storage/app/public/'.$main->image) }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8">
                            <div class="slider-content">
                                @if (app()->getLocale()=="ka")
                                <h1 data-animation="fadeInUp" data-delay=".4s">ხარისხი მნიშვნელოვანია</h1>
                                @endif
                                @if (app()->getLocale()=="en")
                                <h1 data-animation="fadeInUp" data-delay=".4s">Quality Is Important</h1>
                                @endif
                                @if (app()->getLocale()=="ru")
                                <h1 data-animation="fadeInUp" data-delay=".4s">Качество важно</h1>
                                @endif
                                <p data-animation="fadeInUp" data-delay=".6s"></p>
                                <div class="slider-btn">
                                    @if (app()->getLocale()=="ka")
                                    <a data-animation="fadeInLeft" data-delay=".6s" class="thm-btn" href="{{ route('contact') }}">დაგვიკავშირდით</a>
                                    @endif
                                    @if (app()->getLocale()=="en")
                                    <a data-animation="fadeInLeft" data-delay=".6s" class="thm-btn" href="{{ route('contact') }}">Contact Us</a>
                                    @endif
                                    @if (app()->getLocale()=="ru")
                                    <a data-animation="fadeInLeft" data-delay=".6s" class="thm-btn" href="{{ route('contact') }}">Связаться с нами</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        </div>
    </section>
    <!-- slider end -->

    <!-- about start -->
    <section class="about-area pb-90">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-tab">

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-02" role="tabpanel" aria-labelledby="nav-02-tab">
                                <div class="about-wrapper pt-80">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="about-left pos-rel">

                                                <div class="about-title mb-20">
                                                    @if (app()->getLocale()=="ka")
                                                    <h2>რატომ ჩვენ?</h2>
                                                    @endif
                                                    @if (app()->getLocale()=="en")
                                                    <h2>Why Us?</h2>
                                                    @endif
                                                    @if (app()->getLocale()=="ru")
                                                    <h2>Почему нас?</h2>
                                                    @endif
                                                </div>
                                                <p>
                                                    @if (app()->getLocale()=="ka")
                                                    {!! $providerAbout->about_text_geo !!}
                                                    @endif
                                                    @if (app()->getLocale()=="en")
                                                    {!! $providerAbout->about_text_eng !!}
                                                    @endif
                                                    @if (app()->getLocale()=="ru")
                                                    {!! $providerAbout->about_text_rus !!}
                                                    @endif
                                                </p>

                                                <div class="about-btn pt-20">
                                                    <a href="{{ route('contact') }}" class="thm-btn">
                                                        @if (app()->getLocale()=="ka")
                                                        დაგვიკავშირდით
                                                        @endif
                                                        @if (app()->getLocale()=="en")
                                                        Contact us
                                                        @endif
                                                        @if (app()->getLocale()=="ru")
                                                        Связаться с нами
                                                        @endif
                                                    </a>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about end -->





    <!-- project start -->
    <section class="project-area pos-rel pt-80 ">
        <div class="container-fluid">
            <div class="section-title text-center mb-100">
                @if (app()->getLocale()=="ka")
                <h2>მიმდინარე სიახლეები</h2>
                @endif
                @if (app()->getLocale()=="en")
                <h2>Recent News</h2>
                @endif
                @if (app()->getLocale()=="ru")
                <h2>Актуальные новости</h2>
                @endif
            </div>
          <!-- Blog start -->
          <section class="blog-area gray-bg pt-120 pb-90">
            <div class="container">
                <div class="row">
                @foreach ($last_news as $newess)
                @if (app()->getLocale()=="ka")
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-blog mb-30">
                        <div class="blog-thumb">
                            <img src="{{ asset('mctrans/storage/app/public/'.$newess->image) }}" width="370px" height="260px" alt="image_not_found">
                        </div>
                        <div class="b-content">

                            <div class="b-text mb-15">
                                <h3><a href="{{ route('news_detail' , $newess->news_id) }}">{{ Str::limit( $newess->news_title_geo , 23, '...') }}</a></h3>
                            </div>
                            <div class="b-btn">
                                <a href="{{ route('news_detail' , $newess->news_id) }}">სრულად ნახვა <i class="ti-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if (app()->getLocale()=="en")
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-blog mb-30">
                        <div class="blog-thumb">
                            <img src="{{ asset('mctrans/storage/app/public/'.$newess->image) }}" width="370px" height="260px" alt="image_not_found">
                        </div>
                        <div class="b-content">

                            <div class="b-text mb-15">
                                <h3><a href="{{ route('news_detail' , $newess->news_id) }}">{{  Str::limit( $newess->news_title_eng , 23, '...')  }}</a></h3>
                            </div>
                            <div class="b-btn">
                                <a href="{{ route('news_detail' , $newess->news_id) }}">Read more <i class="ti-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if (app()->getLocale()=="ru")
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-blog mb-30">
                        <div class="blog-thumb">
                            <img src="{{ asset('mctrans/storage/app/public/'.$newess->image) }}" width="370px" height="260px" alt="image_not_found">
                        </div>
                        <div class="b-content">

                            <div class="b-text mb-15">
                                <h3><a href="{{ route('news_detail' , $newess->news_id) }}">{{ Str::limit( $newess->news_title_rus , 23, '...') }}</a></h3>
                            </div>
                            <div class="b-btn">
                                <a href="{{ route('news_detail' , $newess->news_id) }}">увидеть все <i class="ti-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                </div>

            </div>
        </section>
        <!-- Blog end -->
        </div>
    </section>
    <!-- project end -->






    @endsection
