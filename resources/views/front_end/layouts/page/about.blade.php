@extends('front_end.layouts.index')
@section('content')
<main class="page-wrapper">
    <!-- Start Breadcrumb Area -->
    <div class="axil-breadcrumb-area breadcrumb-style-2 single-service pt--170 pb--70 theme-gradient">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-2 order-lg-1 mt_md--30 mt_sm--30">
                    <div class="inner">
                        <h1 class="title">One of the fastest growing agency</h1>
                        <p>We design and develop web and mobile applications for our clients worldwide.</p>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="thumbnail text-left text-md-right">
                        <div class="image-group text-right">
                            <img class="image-1 paralax-image" src="{{ asset('front_end\images\slider\white-shape.png') }}" alt="Slider images">
                            <img class="image-2 paralax-image" src="{{ asset('front_end\images\slider\banner-about.svg') }}" alt="Slider images">
                        </div>
                        <div class="shape-group">
                            <div class="shape shape-1">
                                <img src="{{asset('front_end\images\others\breadcrumb-1.svg') }}" alt="Shape Images">
                            </div>
                            <div class="shape shape-2">
                                <img src="{{asset('front_end\images\others\breadcrumb-2.svg') }}" alt="Shape Images">
                            </div>
                            <div class="shape shape-3">
                                <img class="customOne" src="{{asset('front_end\images\others\breadcrumb-3.svg') }}" alt="Shape Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start Featured Area -->
    <div class="axil-featured-area ax-section-gap bg-color-white">
        <div class="container">
            <!-- Start Single Feature  -->
            <div class="row d-flex flex-wrap axil-featured row--40">
                <div class="col-lg-6 col-xl-6 col-md-12 col-12">
                    <div class="thumb-inner">
                        <div class="thumbnail">
                            <img class="image w-100" src="front_end\images\featured\featured-image-02.jpg" alt="Featured Images">
                        </div>
                        <div class="shape-group">
                            <div class="shape">
                                <img src="front_end\images\others\breadcrumb-2.svg" alt="Shape Images">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 col-md-12 col-12 mt_md--40 mt_sm--40">
                    <div class="inner">
                        <div class="section-title text-left">
                            <span class="sub-title extra04-color wow">featured case study</span>
                            <h2 class="title wow"><a href="single-case-study.html">Building software for world changers </a></h2>
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

    <!-- Start Our Service Area  -->
    <div class="axil-service-area ax-section-gap bg-color-lightest">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="sub-title extra08-color wow" data-splitting="">our values</span>
                        <h2 class="title wow" data-splitting="">Why should you work with us?</h2>
                        <p class="subtitle-2 wow" data-splitting="">Nulla facilisi. Nullam in magna id dolor blandit rutrum eget
                            vulputate
                            augue sed eu leo eget risus imperdiet.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Start Single Service  -->
                <div class="col-lg-4 col-md-6 col-12 mt--90 mt_md--40 mt_sm--30">
                    <div class="axil-service-style--3 move-up wow">
                        <div class="icon">
                            <img src="front_end\images\icons\layer.svg" alt="Icon Images">
                            <div class="text">1</div>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="single-service.html">Exceed clients’ and colleagues’
                                    expectations</a></h4>
                            <p>Ut id orci ultricies, gravida arcu ac, elementum eros. Curabitur tortor ipsum,
                                imperdiet eget odio ac, faucibus ultricies nisl. Maecenas scelerisque dignissim
                                elit.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Service  -->

                <!-- Start Single Service  -->
                <div class="col-lg-4 col-md-6 col-12 mt--90 mt_md--40 mt_sm--30">
                    <div class="axil-service-style--3 color-var--2 move-up wow">
                        <div class="icon">
                            <img src="front_end\images\icons\layer.svg" alt="Icon Images">
                            <div class="text">2</div>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="single-service.html">Take ownership and question the status quo in a constructive manner</a></h4>
                            <p>Ut id orci ultricies, gravida arcu ac, elementum eros. Curabitur tortor ipsum,
                                imperdiet eget odio ac, faucibus ultricies nisl. Maecenas scelerisque dignissim
                                elit.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Service  -->

                <!-- Start Single Service  -->
                <div class="col-lg-4 col-md-6 col-12 mt--90 mt_md--40 mt_sm--30">
                    <div class="axil-service-style--3 color-var--3 move-up wow">
                        <div class="icon">
                            <img src="front_end\images\icons\layer.svg" alt="Icon Images">
                            <div class="text">3</div>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="single-service.html">Be brave, curious and experiment – learn from all successes and failures</a></h4>
                            <p>Ut id orci ultricies, gravida arcu ac, elementum eros. Curabitur tortor ipsum,
                                imperdiet eget odio ac, faucibus ultricies nisl. Maecenas scelerisque dignissim
                                elit.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Service  -->

                <!-- Start Single Service  -->
                <div class="col-lg-4 col-md-6 col-12 mt--90 mt_md--40 mt_sm--30">
                    <div class="axil-service-style--3 color-var--4 move-up wow">
                        <div class="icon">
                            <img src="front_end\images\icons\layer.svg" alt="Icon Images">
                            <div class="text">4</div>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="single-service.html">Act in a way that makes all of us proud</a></h4>
                            <p>Ut id orci ultricies, gravida arcu ac, elementum eros. Curabitur tortor ipsum,
                                imperdiet eget odio ac, faucibus ultricies nisl. Maecenas scelerisque dignissim
                                elit.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Service  -->

                <!-- Start Single Service  -->
                <div class="col-lg-4 col-md-6 col-12 mt--90 mt_md--40 mt_sm--30">
                    <div class="axil-service-style--3 color-var--5 move-up wow">
                        <div class="icon">
                            <img src="{{asset('front_end\images\icons\layer.svg') }}" alt="Icon Images">
                            <div class="text">5</div>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="single-service.html">Build an inclusive, transparent and socially responsible culture</a></h4>
                            <p>Ut id orci ultricies, gravida arcu ac, elementum eros. Curabitur tortor ipsum,
                                imperdiet eget odio ac, faucibus ultricies nisl. Maecenas scelerisque dignissim
                                elit.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Service  -->

                <!-- Start Single Service  -->
                <div class="col-lg-4 col-md-6 col-12 mt--90 mt_md--40 mt_sm--30">
                    <div class="axil-service-style--3 color-var--2 move-up wow">
                        <div class="icon">
                            <img src="{{asset('front_end\images\icons\layer.svg') }}" alt="Icon Images">
                            <div class="text">6</div>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="single-service.html">Exceed clients’ and colleagues’
                                    expectations</a></h4>
                            <p>Ut id orci ultricies, gravida arcu ac, elementum eros. Curabitur tortor ipsum,
                                imperdiet eget odio ac, faucibus ultricies nisl. Maecenas scelerisque dignissim
                                elit.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Service  -->

            </div>
        </div>
    </div>
    <!-- End Our Service Area  -->

    <!-- Start Working Process  -->
    <div class="axil-working-process-area ax-section-gap theme-gradient-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--100 mb_sm--40 mb_md--40">
                        <span class="sub-title extra08-color wow" data-splitting="">our process</span>
                        <h2 class="title wow" data-splitting="">Our workframe for the beautiful projects</h2>
                        <p class="subtitle-2 wow" data-splitting="">Our comprehensive logo design strategy ensures
                            a
                            perfectly crafted
                            logo for your business.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start Working Process  -->
                    <div class="axil-working-process mb--100 mb_md--50 mb_sm--40">
                        <div class="thumbnail">
                            <div class="image paralax-image">
                                <img src="{{asset('front_end\images\process\process-01.jpg') }}" alt="Process Images">
                            </div>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <div class="section-title">
                                    <span class="process-step-number">1</span>
                                    <span class="sub-title extra04-color">zero one</span>
                                    <h2 class="title">Who we are</h2>
                                    <p class="subtitle-2">Donec metus lorem, vulputate at sapien
                                        sit amet, auctor
                                        iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit.
                                        Aliquam
                                        tristique libero at dui sodales, et placerat orci lobortis. Maecenas
                                        ipsum
                                        neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Working Process  -->

                    <!-- Start Working Process  -->
                    <div class="axil-working-process mb--100 text-left mb_md--50 mb_sm--40">
                        <div class="content order-2 order-lg-1">
                            <div class="inner">
                                <div class="section-title">
                                    <span class="process-step-number">2</span>
                                    <span class="sub-title extra05-color">zero two</span>
                                    <h2 class="title">Our Mission</h2>
                                    <p class="subtitle-2">Donec metus lorem, vulputate at sapien
                                        sit amet, auctor
                                        iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit.
                                        Aliquam
                                        tristique libero at dui sodales, et placerat orci lobortis. Maecenas
                                        ipsum
                                        neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                                </div>
                            </div>
                        </div>
                        <div class="thumbnail order-1 order-lg-2">
                            <div class="image paralax-image">
                                <img src="{{asset('front_end\images\process\process-02.jpg') }}" alt="Process Images">
                            </div>
                        </div>
                    </div>
                    <!-- End Working Process  -->

                    <!-- Start Working Process  -->
                    <div class="axil-working-process mb--100 mb_md--50 mb_sm--40">
                        <div class="thumbnail">
                            <div class="image paralax-image">
                                <img src="{{asset('front_end\images\process\process-03.jpg') }}" alt="Process Images">
                            </div>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <div class="section-title">
                                    <span class="process-step-number">3</span>
                                    <span class="sub-title extra06-color">zero three</span>
                                    <h2 class="title">Our Vision</h2>
                                    <p class="subtitle-2">Donec metus lorem, vulputate at sapien
                                        sit amet, auctor
                                        iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit.
                                        Aliquam
                                        tristique libero at dui sodales, et placerat orci lobortis. Maecenas
                                        ipsum
                                        neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Working Process  -->

                    <!-- Start Working Process  -->
                    <div class="axil-working-process text-left mb--100 mb_md--50 mb_sm--40">
                        <div class="content order-2 order-lg-1">
                            <div class="inner">
                                <div class="section-title">
                                    <span class="process-step-number">4</span>
                                    <span class="sub-title extra07-color">zero four</span>
                                    <h2 class="title">Our Value</h2>
                                    <p class="subtitle-2">Donec metus lorem, vulputate at sapien
                                        sit amet, auctor
                                        iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit.
                                        Aliquam
                                        tristique libero at dui sodales, et placerat orci lobortis. Maecenas
                                        ipsum
                                        neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                                </div>
                            </div>
                        </div>
                        <div class="thumbnail order-1 order-lg-2">
                            <div class="image paralax-image">
                                <img src="{{asset('front_end\images\process\process-04.jpg') }}" alt="Process Images">
                            </div>
                        </div>
                    </div>
                    <!-- End Working Process  -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Working Process  -->

</main>

@endsection

