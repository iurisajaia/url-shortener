@extends('layouts.app')
@section('content')

    <!--====== Start Hero Section ======-->
    <section class="hero-banner-v3 dark-blue-bg position-relative z-1">
        <div class="hero-pattern bg_cover"
             style="background-image: url({{asset('images/hero/hero-pattern.png')}});"></div>
        <div class="shape shape-one scene"><span data-depth="1"><img src="{{asset('images/shape/shape-15.png')}}"
                                                                     alt=""></span></div>
        <div class="shape shape-two scene"><span data-depth="1.2"><img src="{{asset('images/shape/shape-17.png')}}"
                                                                       alt=""></span></div>
        <div class="shape shape-three scene"><span data-depth="1.5"><img src="{{asset('images/shape/shape-13.png')}}"
                                                                         alt=""></span></div>
        <div class="shape shape-four scene"><span data-depth="3"><img src="{{asset('images/shape/shape-15.png')}}"
                                                                      alt=""></span></div>
        <div class="shape shape-five scene"><span data-depth="2"><img src="{{asset('images/shape/shape-14.png')}}"
                                                                      alt=""></span></div>
        <div class="shape shape-six scene"><span data-depth="6"><img src="{{asset('images/shape/shape-16.png')}}"
                                                                     alt=""></span></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="wow fadeInUp" data-wow-delay=".5s">Shorten your URL</h1>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Eligendi, labore.</p>

                        <form method="POST" action="{{route('shorten')}}" class="input-group mb-3">
                            @csrf
                            <input type="text" class="form-control shorten-input" placeholder="PASTE YOUR URL"
                                   aria-describedby="basic-addon2" name="url">
                            <div class="input-group-append">
                                <button class="btn main-btn bordered-btn btn-white arrow-btn wow fadeInUp"
                                        data-wow-delay=".7s">Shorten
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img wow fadeInRight" data-wow-delay=".5s">
                        <img src="{{asset('images/hero/hero-two-img-1.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Hero Section ======-->
    <!--====== Start Service Section ======-->
    <section class="service-area service-area-v2">
        <div class="container-1350">
            <div class="service-wrapper light-gray-bg">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="service-item service-style-three mb-30 wow fadeInUp" data-wow-delay=".15s">
                            <div class="icon">
                                <img src="{{asset('images/icon/icon-4.png')}}" alt="">
                            </div>
                            <div class="text">
                                <h3 class="title"><a href="service-details.html">Quick service</a></h3>
                                <p>Shorten URL with just one click</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="service-item service-style-three mb-30 wow fadeInUp" data-wow-delay=".2s">
                            <div class="icon">
                                <img src="{{asset('images/icon/icon-6.png')}}" alt="">
                            </div>
                            <div class="text">
                                <h3 class="title"><a href="service-details.html">It's free</a></h3>
                                <p>It will be free forever</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="service-item service-style-three mb-30 wow fadeInUp" data-wow-delay=".25s">
                            <div class="icon">
                                <img src="{{asset('images/icon/icon-3.png')}}" alt="">
                            </div>
                            <div class="text">
                                <h3 class="title"><a href="service-details.html">Use it anytime</a></h3>
                                <p>You have unlimited usage</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Service Section ======-->
    <!--====== Start About Section ======-->
    <section class="about-area about-area-v4 pt-130 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img-holder mb-50 wow fadeInLeft">
                        <img src="{{asset('images/about/img-6.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-wrapper mb-30 wow fadeInRight">
                        <div class="section-title section-title-left mb-30">
                            <span class="sub-title st-two">About Company</span>
                            <h2 class="font-45">We Provide Best Web
                                Design Solutions</h2>
                        </div>
                        <p>On the other handwe denounce with righteous indignation and dislike men who are so beguiled
                            and demoralized by the charms of pleasure of the moment so blinded by desire that the cannot
                            foresee the pain and trouble that are bound</p>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="item-box text-center mb-20">
                                    <div class="icon">
                                        <i class="far fa-bezier-curve"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Paste your URL</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="item-box text-center mb-20">
                                    <div class="icon">
                                        <i class="far fa-ball-pile"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Copy new URL</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="item-box text-center mb-20">
                                    <div class="icon">
                                        <i class="far fa-bullseye-arrow"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Use it anytime</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End About Section ======-->
    <!--====== Start CTA Section ======-->
    <section class="cta-area cta-area-v3 pt-55 position-relative z-1">
        <div class="shape shape-one"><span><img src="{{asset('images/shape/shape-18.png')}}" alt=""></span></div>
        <div class="shape shape-two"><span><img src="{{asset('images/shape/shape-19.png')}}" alt=""></span></div>
        <div class="shape shape-three"><span><img src="{{asset('images/shape/shape-20.png')}}" alt=""></span></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="text-wrapper mb-55 wow fadeInLeft">
                        <div class="section-title section-title-white section-title-left mb-35">
                            <span class="sub-title st-two">Work Together</span>
                            <h2 class="font-45">Have Any Project On
                                Your Minds?</h2>
                        </div>
                        <a href="contact.html" class="main-btn arrow-btn">Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="cta-img text-lg-right mb-55 wow fadeInRight">
                        <img src="{{asset('images/cta/img-2.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End CTA Section ======-->
    <!--====== Start Footer ======-->
@endsection
