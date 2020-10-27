@extends('front_end.layouts.index')
@section('content')
<main class="page-wrapper">

    <!-- Start Slider Area -->
    <div class="axil-slider-area axil-slide-activation">
        <!-- Start Single Slide -->
        <div class="axil-slide slide-style-default theme-gradient slider-fixed-height d-flex align-items-center paralax-area">
            <div class="container">
                <div class="row align-items-center pt_md--60 mt_sm--60">
                    <div class="col-lg-7 col-12 order-2 order-lg-1">
                        <div class="content pt_md--30 pt_sm--30">
                            <h1 class="axil-display-1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="500ms">Build stunning websites & apps.</h1>
                            <p class="subtitle-3 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="800ms">Powerful applications with beautiful interface
                                <br> makes the perfect couple.
                            </p>
                                <a class="axil-button btn-large btn-transparent wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="1300ms" href="portfolio.html"><span class="button-text">View
                                    Showcase</span><span class="button-icon"></span></a>
                        </div>

                    </div>
                    <div class="col-lg-5 col-12 order-1 order-lg-2">
                        <div class="topskew-thumbnail-group text-left text-lg-right">
                            <div class="thumbnail paralax-image">
                                <img src="{{asset('front_end\images\others\a1.png') }}" alt="Keystoke Images">
                            </div>
                            <div class="image-group">
                                <img class="paralax-image" src="{{asset('front_end\images\others\keystoke-image-4') }}.svg" alt="Keystoke Images">
                            </div>
                            <div class="shape-group">
                                <div class="shape shape-1 paralax--1">
                                    <img src="{{asset('front_end\images\others\shape-05.svg') }}" alt="keystoke">
                                </div>
                                <div class="shape shape-2">
                                    <img class="customOne" src="{{asset('front_end\images\others\shape-06.svg') }}" alt="keystoke">
                                </div>
                                <div class="shape shape-3 paralax--3">
                                    <img src="{{asset('front_end\images\others\shape-04.svg') }}" alt="keystoke">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
    </div>
    <!-- End Slider Area -->

    <!-- Start Service Area -->
    @include('front_end.layouts.page.service');
    <!-- End Service Area -->

    <!-- Start Featured Area -->
    <div class="axil-featured-area ax-section-gap bg-color-lightest">
        <div class="container axil-featured-activation axil-carousel" data-slick-options='{
                "spaceBetween": 0, 
                "slidesToShow": 1, 
                "slidesToScroll": 1, 
                "arrows": false, 
                "infinite": true,
                "centerMode":true,
                "dots": true
            }' data-slick-responsive='[
                {"breakpoint":769, "settings": {"slidesToShow": 1}},
                {"breakpoint":756, "settings": {"slidesToShow": 1}},
                {"breakpoint":481, "settings": {"slidesToShow": 1}}
            ]'>
            <!-- Start Single Feature  -->
            <div class="row d-flex flex-wrap axil-featured row--0">
                <div class="col-lg-6 col-xl-6 col-md-12 col-12">
                    <div class="thumbnail">
                        <img class="image w-100" src="{{asset('front_end\images\featured\featured-image-01.jpg') }}" alt="Featured Images">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 col-md-12 col-12 offset-xl-1 mt_md--40 mt_sm--40">
                    <div class="inner">
                        <div class="section-title text-left">
                            <span class="sub-title extra04-color wow">featured case study</span>
                            <h2 class="title wow"><a href="single-case-study.html">
                                    Logo, identity & web design for Uber
                                </a></h2>
                            <p class="subtitle-2 wow">Donec metus lorem, vulputate at sapien sit amet, auctor
                                iaculis
                                lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique
                                libero
                                at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id
                                dignissim et, imperdiet vitae mauris.</p>
                            <a class="axil-button btn-large btn-transparent" href="single-case-study.html"><span class="button-text">Read
                                    Case Study</span><span class="button-icon"></span></a>
                        </div>
                        <div class="axil-counterup-area d-flex flex-wrap separator-line-vertical">
                            <!-- Start Counterup -->
                            <div class="single-counterup counterup-style-1">
                                <h3 class="count">15</h3>
                                <p>ROI increase</p>
                            </div>
                            <!-- End Counterup -->

                            <!-- Start Counterup -->
                            <div class="single-counterup counterup-style-1">
                                <h3 class="count counter-k">60</h3>
                                <p>Monthly website visits</p>
                            </div>
                            <!-- End Counterup -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Feature  -->
            <!-- Start Single Feature  -->
            <div class="row d-flex flex-wrap axil-featured row--0">
                <div class="col-lg-6 col-xl-6 col-md-12 col-12">
                    <div class="thumbnail">
                        <img class="image w-100" src="{{asset('front_end\images\featured\featured-image-03.jpg') }}" alt="Featured Images">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 col-md-12 col-12 offset-xl-1 mt_md--40 mt_sm--40">
                    <div class="inner">
                        <div class="section-title text-left">
                            <span class="sub-title extra04-color wow">featured case study</span>
                            <h2 class="title wow"><a href="single-case-study.html">
                                    Logo, identity & web design for Uber
                                </a></h2>
                            <p class="subtitle-2 wow">Donec metus lorem, vulputate at sapien sit amet, auctor
                                iaculis
                                lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique
                                libero
                                at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id
                                dignissim et, imperdiet vitae mauris.</p>
                            <a class="axil-button btn-large btn-transparent" href="single-case-study.html"><span class="button-text">Read
                                    Case Study</span><span class="button-icon"></span></a>
                        </div>
                        <div class="axil-counterup-area d-flex flex-wrap separator-line-vertical">
                            <!-- Start Counterup -->
                            <div class="single-counterup counterup-style-1">
                                <h3 class="count">15</h3>
                                <p>ROI increase</p>
                            </div>
                            <!-- End Counterup -->

                            <!-- Start Counterup -->
                            <div class="single-counterup counterup-style-1">
                                <h3 class="count counter-k">60</h3>
                                <p>Monthly website visits</p>
                            </div>
                            <!-- End Counterup -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Feature  -->
            <!-- Start Single Feature  -->
            <div class="row d-flex flex-wrap axil-featured row--0">
                <div class="col-lg-6 col-xl-6 col-md-12 col-12">
                    <div class="thumbnail">
                        <img class="image w-100" src="{{asset('front_end\images\featured\featured-image-04.jpg') }}" alt="Featured Images">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 col-md-12 col-12 offset-xl-1 mt_md--40 mt_sm--40">
                    <div class="inner">
                        <div class="section-title text-left">
                            <span class="sub-title extra04-color wow">featured case study</span>
                            <h2 class="title wow"><a href="single-case-study.html">
                                    Logo, identity & web design for Uber
                                </a></h2>
                            <p class="subtitle-2 wow">Donec metus lorem, vulputate at sapien sit amet, auctor
                                iaculis
                                lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique
                                libero
                                at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id
                                dignissim et, imperdiet vitae mauris.</p>
                            <a class="axil-button btn-large btn-transparent" href="single-case-study.html"><span class="button-text">Read
                                    Case Study</span><span class="button-icon"></span></a>
                        </div>
                        <div class="axil-counterup-area d-flex flex-wrap separator-line-vertical">
                            <!-- Start Counterup -->
                            <div class="single-counterup counterup-style-1">
                                <h3 class="count">15</h3>
                                <p>ROI increase</p>
                            </div>
                            <!-- End Counterup -->

                            <!-- Start Counterup -->
                            <div class="single-counterup counterup-style-1">
                                <h3 class="count counter-k">60</h3>
                                <p>Monthly website visits</p>
                            </div>
                            <!-- End Counterup -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Feature  -->

        </div>
    </div>
    <!-- End Featured Area -->

    <!-- Start About Us Area -->
   {{-- @include('front_end.layouts.page.about'); --}}
    <!-- End About Us Area -->

    <!-- Start Portfolio Area -->   
    @include('front_end.layouts.page.projects');
    <!-- End Portfolio Area -->

    <!-- Start Counterup Area -->
    <div class="axil-counterup-area ax-section-gap bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="sub-title extra08-color wow" data-splitting="">experts in field</span>
                        <h2 class="title wow" data-splitting="">Trinoq movement</h2>
                        <p class="subtitle-2 wow" data-splitting="">In vel varius turpis, non dictum sem. Aenean in
                            efficitur ipsum, in
                            egestas ipsum. Mauris in mi ac tellus.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start Counterup Area -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="axil-counterup mt--60 text-center counter-first move-up wow">
                        <div class="icon">
                            <img src="{{asset('front_end\images\counterup\Asset 1.png') }}" alt="Shape Images">
                        </div>
                        <h3 class="count">3</h3>
                        <p>Years of operation</p>
                    </div>
                </div>
                <!-- End Counterup Area -->

                <!-- Start Counterup Area -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="axil-counterup mt--60 text-center counter-second move-up wow">
                        <div class="icon">
                            <img src="{{asset('front_end\images\counterup\shape-02.png') }}" alt="Shape Images">
                        </div>
                        <h3 class="count">50</h3>
                        <p>Projects deliverd</p>
                    </div>
                </div>
                <!-- End Counterup Area -->

                <!-- Start Counterup Area -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="axil-counterup mt--60 mt_md--30 mt_sm--30 text-center counter-third move-up wow">
                        <div class="icon">
                            <img src="{{asset('front_end\images\counterup\shape-03.png') }}" alt="Shape Images">
                        </div>
                        <h3 class="count">10</h3>
                        <p>Specialists</p>
                    </div>
                </div>
                <!-- End Counterup Area -->

                <!-- Start Counterup Area -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="axil-counterup mt--60 text-center counter-four move-up wow">
                        <div class="icon">
                            <img src="{{asset('front_end\images\counterup\Asset 3.png') }}" alt="Shape Images">
                        </div>
                        <h3 class="count">200</h3>
                        <p>Cups of coffee</p>
                    </div>
                </div>
                <!-- End Counterup Area -->

            </div>
        </div>
    </div>
    <!-- End Counterup Area -->

    <!-- Start Testimonial Area -->
     @include('front_end.layouts.page.client');
    <!-- End Testimonial Area -->

    <!-- Start Team Area -->
    <div class="axil-team-area ax-section-gap bg-color-lightest">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-12 col-xl-4">
                    <div class="section-title text-left">
                        <h2 class="title wow mb--0" data-splitting="">Trinoq Team</span></h2>
                    </div>
                </div>
                
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="management" role="tabpanel" aria-labelledby="management-tab">
                    <div class="row">
                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-01.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-02.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Jared Moreno</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-03.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Margaret McKinney</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-04.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Effie Frank</a></h4>
                                        <p class="subtitle">Head of technology & product</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-05.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Tyler Hardy</a></h4>
                                        <p class="subtitle">Head of people</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-06.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Effie Arnold</a></h4>
                                        <p class="subtitle">Head of finance & operations</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-04.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-02.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->
                    </div>
                </div>

                <div class="tab-pane fade" id="designer" role="tabpanel" aria-labelledby="designer-tab">
                    <div class="row">
                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-06.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-05.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-04.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-03.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-02.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-01.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->
                    </div>
                </div>

                <div class="tab-pane fade" id="app-development" role="tabpanel" aria-labelledby="app-development-tab">
                    <div class="row">

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-02.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->
                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-03.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-04.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-05.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->
                    </div>
                </div>

                <div class="tab-pane fade" id="frontend" role="tabpanel" aria-labelledby="frontend-tab">
                    <div class="row">
                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-06.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-03.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-04.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-05.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->
                    </div>
                </div>

                <div class="tab-pane fade" id="backend" role="tabpanel" aria-labelledby="backend-tab">
                    <div class="row">
                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-05.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->
                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-03.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-04.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-05.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->
                    </div>
                </div>

                <div class="tab-pane fade" id="bsiness" role="tabpanel" aria-labelledby="backend-tab">
                    <div class="row">
                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-01.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-02.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-06.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-05.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Team Area -->

    <!-- Start Pricing Table Area -->
    <div class="axil-pricing-table-area pricing-shape-position ax-section-gap bg-color-lightest">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="sub-title extra04-color wow" data-splitting="">pricing plan</span>
                        <h2 class="title wow" data-splitting="">Value Packs for Startups</h2>
                        <p class="subtitle-2 wow" data-splitting="">In vel varius turpis, non dictum sem. Aenean in
                            efficitur ipsum, in
                            egestas ipsum. Mauris in mi ac tellus.</p>
                    </div>
                </div>
            </div>
            <div class="row mt--20 row--30 mt_sm--0">
                <!-- Start Single pricing table -->
                <div class="col-lg-5 col-md-6 col-sm-12 col-12 offset-lg-1">
                    <div class="axil-pricing-table mt--40 active move-up wow">
                        <div class="axil-pricing-inner">
                            <div class="pricing-header">
                                <h4>Small Business</h4>
                                <p>Best value</p>
                                <div class="price-wrapper">
                                    <div class="price">
                                        <h2 class="currency">$</h2>
                                        <h2 class="heading headin-h3">300</h2>
                                        <span>/lifetime</span>
                                    </div>
                                    <div class="date-option">
                                        <!-- <select>
                                            <option>Yearly</option>
                                            <option>Monthly</option>
                                        </select> -->
                                    </div>
                                </div>
                                <div class="pricing-get-button">
                                    <a class="axil-button btn-large btn-transparent" href="#"><span class="button-text">Get Started Today</span><span class="button-icon"></span></a>
                                </div>
                                <span class="subtitle">100% money back guarantee</span>
                            </div>
                            <div class="pricing-body">
                                <div class="inner">
                                    <ul class="list-style">
                                        <li>Business Card Design</li>
                                        <li>Brand Intro</li>
                                        <li>Responsive Single Page Website</li>
                                        <li>1GB Hosting for 1 Year</li>
                                        <li>'.com' Domain for 1 Year</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single pricing table -->

                <!-- Start Single pricing table -->
                <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                    <div class="axil-pricing-table mt--40 mt_sm--60 move-up wow">
                        <div class="axil-pricing-inner">
                            <div class="pricing-header">
                                <h4>E-Commerce</h4>
                                <p>A beautiful, powerful website</p>
                                <div class="price-wrapper">
                                    <div class="price">
                                        <h2 class="currency">$</h2>
                                        <h2 class="heading headin-h3">700</h2>
                                        <span>/lifetime</span>
                                    </div>
                                    <div class="date-option">
                                        <!-- <select>
                                            <option>Yearly</option>
                                            <option>Monthly</option>
                                        </select> -->
                                    </div>
                                </div>
                                <div class="pricing-get-button">
                                    <a class="axil-button btn-large btn-transparent" href="#"><span class="button-text">Get Started Today</span><span class="button-icon"></span></a>
                                </div>
                                <span class="subtitle">100% money back guarantee</span>
                            </div>
                            <div class="pricing-body">
                                <div class="inner">
                                    <ul class="list-style">
                                        <li>Logo and Business Card</li>
                                        <li>Social Media Pack</li>
                                        <li>Landing Intro</li>
                                        <li>Complete E-Commerce Website</li>
                                        <li>3GB Hosting for 1 Year</li>
                                        <li>'.com' Domain for 1 Year</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single pricing table -->
            </div>
        </div>
        <div class="shape-group">
            <div class="shape">
                <img src="{{asset('front_end\images\others\shape-15.svg') }}" alt="Shape">
            </div>
        </div>
    </div>
    <!-- End Pricing Table Area -->

    <!-- Start Brand Area -->
    <div class="axil-team-area ax-section-gap bg-color-lightest">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-12 col-xl-4">
                    <div class="section-title text-left">
                        <h2 class="title wow mb--0" data-splitting="">Trinoq Client</span></h2>
                    </div>
                </div>
                
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="management" role="tabpanel" aria-labelledby="management-tab">
                    <div class="row">
                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-01.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-02.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Jared Moreno</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-03.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Margaret McKinney</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-04.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Effie Frank</a></h4>
                                        <p class="subtitle">Head of technology & product</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-05.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Tyler Hardy</a></h4>
                                        <p class="subtitle">Head of people</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-06.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Effie Arnold</a></h4>
                                        <p class="subtitle">Head of finance & operations</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-04.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-02.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->
                    </div>
                </div>

                <div class="tab-pane fade" id="designer" role="tabpanel" aria-labelledby="designer-tab">
                    <div class="row">
                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-06.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-05.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-04.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-03.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-02.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-01.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->
                    </div>
                </div>

                <div class="tab-pane fade" id="app-development" role="tabpanel" aria-labelledby="app-development-tab">
                    <div class="row">

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('front_end\images\team\team-02.jpg') }}" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->
                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-03.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-04.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-05.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->
                    </div>
                </div>

                <div class="tab-pane fade" id="frontend" role="tabpanel" aria-labelledby="frontend-tab">
                    <div class="row">
                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-06.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-03.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-04.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-05.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->
                    </div>
                </div>

                <div class="tab-pane fade" id="backend" role="tabpanel" aria-labelledby="backend-tab">
                    <div class="row">
                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-05.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->
                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-03.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-04.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-05.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->
                    </div>
                </div>

                <div class="tab-pane fade" id="bsiness" role="tabpanel" aria-labelledby="backend-tab">
                    <div class="row">
                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-01.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-02.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-06.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->

                        <!-- Start Single Team  -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="assets\images\team\team-05.jpg" alt="Team Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="team-details.html">Madge Alvarez</a></h4>
                                        <p class="subtitle">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team  -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Brand Area -->

    <!-- Start Blog Area -->
    <div class="axil-blog-area ax-section-gap bg-color-lightest">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="sub-title extra04-color">what's going on</span>
                        <h2 class="title">Latest stories</h2>
                        <p class="subtitle-2">In vel varius turpis, non dictum sem. Aenean in efficitur ipsum,
                            in
                            egestas ipsum. Mauris in mi ac tellus.</p>
                    </div>
                </div>
            </div>
            <div class="row blog-list-wrapper mt--20">
                <!-- Start Blog Area -->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="axil-blog axil-control mt--40 active move-up wow">
                        <div class="content">
                            <div class="content-wrap paralax-image">
                                <div class="inner">
                                    <span class="category">Lifestyle</span>
                                    <h5 class="title"><a href="blog-details.html">Choosing the right features
                                            for your custom</a></h5>
                                    <p>Quisque eget erat augue. Cras gravida enim nulla, a dictum erat fringilla
                                        at.</p>
                                </div>
                            </div>
                        </div>
                        <div class="thumbnail">
                            <div class="image">
                                <img src="{{asset('front_end\images\blog\blog-01.jpg') }}" alt="Blog images">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Blog Area -->

                <!-- Start Blog Area -->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="axil-blog axil-control mt--40 move-up wow">
                        <div class="content">
                            <div class="content-wrap paralax-image">
                                <div class="inner">
                                    <span class="category">Design</span>
                                    <h5 class="title"><a href="blog-details.html">Choosing the right features
                                            for your custom</a></h5>
                                    <p>Quisque eget erat augue. Cras gravida enim nulla, a dictum erat fringilla
                                        at.</p>
                                </div>
                            </div>
                        </div>
                        <div class="thumbnail">
                            <div class="image">
                                <img src="{{asset('front_end\images\blog\blog-02.jpg') }}" alt="Blog images">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Blog Area -->
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start Call To Action  -->
    <!-- Start Call To Action -->
    <div class="axil-call-to-action-area shape-position ax-section-gap theme-gradient">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="axil-call-to-action">
                        <div class="section-title text-center">
                            <span class="sub-title extra04-color wow" data-splitting="">Let's work together</span>
                            <h2 class="title wow" data-splitting="">Need a successful project?</h2>
                            <a class="axil-button btn-large btn-transparent" href="#"><span class="button-text">Get Quote</span><span class="button-icon"></span></a>
                            <div class="callto-action">
                                <span class="text wow" data-splitting="">Or call us now</span>
                                <span class="wow" data-splitting=""><i class="fal fa-phone-alt"></i> <a href="#">(+88) 019 7077 8787</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-group">
            <div class="shape shape-01">
                <img src="{{asset('front_end\images\others\shape-08.svg') }}" alt="Shape">
            </div>
            <div class="shape shape-02">
                <img src="{{asset('front_end\images\others\shape-09.svg') }}" alt="Shape">
            </div>

            <div class="shape shape-03">
                <img src="{{asset('front_end\images\others\shape-10.svg') }}" alt="Shape">
            </div>
            <div class="shape shape-04">
                <img src="{{asset('front_end\images\others\shape-11.svg') }}" alt="Shape">
            </div>
        </div>
    </div>
    <!-- End Call To Action -->
    <!-- End Call To Action  -->

</main>
    
@endsection