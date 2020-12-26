@extends('front_end.layouts.index')
@section('content')
<main class="page-wrapper">

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
                                
                            </div>

                        </div>
                        <div class="col-lg-5 col-12 order-1 order-lg-2">
                            <div class="topskew-thumbnail-group text-left text-lg-right">
                                <div class="thumbnail paralax-image">
                                    <img src="{{asset('front_end\images\others\a1.png') }}" alt="Keystoke Images">
                                </div>
                                <div class="image-group">
                                    <img class="paralax-image" src="{{asset('front_end\images\others\keystoke-image-4.svg') }}" alt="Keystoke Images">
                                </div>
                                <div class="shape-group">
                                    <div class="shape shape-1 paralax--1">
                                        <img src="{{asset('front_end\images\others\shape-05.svg') }}" alt="keystoke">
                                    </div>
                                    <div class="shape shape-2">
                                        <img class="customOne" src="{{asset('front_end\images\others\shape-06.svg') }}" alt="keystoke">
                                    </div>
                                    <div class="shape shape-3 paralax--3">
                                        <img src="{{ asset('front_end\images\others\shape-04.svg') }}" alt="keystoke">
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

     

    </main>

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
                                    Logo, identity & web design & Development & App-development 
                                </a></h2>
                            <p class="subtitle-2 wow">Creating compelling and engaging case studies is an important part of being a designer. A portfolio of case studies is the standard barometer used to judge the quality of a professional. Seeing how designers work, create, build and play is great, and furthermore,
                                 you can learn how to write a great case study yourself. Thanks to all the designers that shared their
                                  process and made this awesome experience possible! So here`s a list of some of great examples of good design
                                   case studies I`ve come across.</p>
                            {{-- <a class="axil-button btn-large btn-transparent" href="single-case-study.html"><span class="button-text">Read
                                    Case Study</span><span class="button-icon"></span></a> --}}
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
                                Logo, identity & web design & Development & App-development 
                            </a></h2>
                            <p class="subtitle-2 wow">Creating compelling and engaging case studies is an important part of
                                 being a designer. A portfolio of case studies is the standard barometer used to judge the quality of a professional.
                                  Seeing how designers work, create, build and play is great, and furthermore, you can learn how to write
                                   a great case study yourself. Thanks to all the designers that shared their process and made this awesome experience possible!
                                 So here`s a list of some of great examples of good design case studies I`ve come across</p>
                            {{-- <a class="axil-button btn-large btn-transparent" href="single-case-study.html"><span class="button-text">Read
                                    Case Study</span><span class="button-icon"></span></a> --}}
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
                        <p class="subtitle-2 wow" data-splitting="">Looking for an Trinoq Technology software company for your next venture? 
                            If yes, you might struggle with the hardships of seeking, evaluating, and picking the best software solution providers 
                            in the market. </p>
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
 
    <!-- End Team Area -->

  

  

    <div class="axil-brand-area ax-section-gap bg-color-white">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-4 col-lg-4 col-md-8 col-12">
                    <div class="section-title">
                        <span class="sub-title extra06-color wow" data-splitting="">Top Clients</span>
                        <h2 class="title wow" data-splitting="">We’ve built solutions for...</h2>
                        <p class="subtitle-2 wow" data-splitting="">Nulla facilisi. Nullam in magna id dolor
                        blandit rutrum eget.</p>
                    </div>
                </div>
               
                <div class="col-xl-8 col-lg-8 mt_md--40 mt_sm--40">
                    @foreach ($trinoqclient as $view_client )
                    <div class="axil-brand-logo-wrapper">
                        <ul class="brand-list liststyle d-flex flex-wrap justify-content-center">
                            <li><a href="#">
                                <img class="w-100" src="{{asset('back_end/company_logo/'. $view_client->company_logo) }}" alt="Team Images">
                                </a>
                            </li>
                        </ul>
                    </div>
                    @endforeach 
                </div>
              
            </div>
        </div>
    </div>
    </div>
    </div>
  


    <!-- Start Call To Action -->
    <div class="axil-call-to-action-area shape-position ax-section-gap theme-gradient">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="axil-call-to-action">
                        <div class="section-title text-center">
                            <span class="sub-title extra04-color wow" data-splitting="">Let's work together</span>
                            <h2 class="title wow" data-splitting="">Need a successful project?</h2>
                            {{-- <a class="axil-button btn-large btn-transparent" href="#"><span class="button-text">Get Quote</span><span class="button-icon"></span></a> --}}
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