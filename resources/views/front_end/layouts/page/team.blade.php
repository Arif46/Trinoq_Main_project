@extends('front_end.layouts.index')
@section('content')
<main class="page-wrapper page-team">

    <!-- Start Breadcrumb Area -->
    <div class="axil-breadcrumb-area breadcrumb-style-2 team-group-thumb pt--170 pb--70 theme-gradient">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-2 order-lg-1 mt_md--30 mt_sm--30">
                    <div class="inner">
                        <h2 class="title">Meet talent & experience</h2>
                        <p>Grow your business online by awesomely designed mobile apps that fits all types.</p>
                    </div>
                </div>
                <div class="col-lg-7 order-1 order-lg-2">
                    <div class="thumbnail text-left text-lg-right">
                        <div class="image-group">
                            <img class="image-1" src="assets\images\slider\white-shape.png" alt="Slider images">
                        </div>
                        <div class="shape-group">
                            <div class="shape shape-1">
                                <img src="assets\images\slider\human-1.svg" alt="Shape Images">
                            </div>
                            <div class="shape shape-2">
                                <img src="assets\images\slider\human-2.svg" alt="Shape Images">
                            </div>
                            <div class="shape shape-3">
                                <img src="assets\images\slider\human-3.svg" alt="Shape Images">
                            </div>
                            <div class="shape shape-4">
                                <img src="assets\images\slider\human-4.svg" alt="Shape Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start Counterup Area  -->
    <div class="axil-counterup-area ax-section-gap bg-color-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="content-wrapper">
                        <div class="inner">
                            <div class="section-title text-left">
                                <span class="sub-title extra08-color wow" data-splitting="">experts in field</span>
                                <h2 class="title wow" data-splitting=""><span>What makes us <br> special?</span>
                                </h2>
                                <p class="subtitle-2 wow mb--40" data-splitting="">Donec metus lorem, vulputate at
                                    sapien sit
                                    amet, auctor iaculis lorem. In vel hendrerit nisi.
                                    Aliquam tristique libero.</p>
                                <a class="axil-button btn-large btn-transparent" href="#"><span class="button-text">Our Works</span><span class="button-icon"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="axil-counter-wrapper mt_md--40 mt_sm--40">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <!-- Start Counterup -->
                                <div class="axil-counterup text-center">
                                    <div class="icon">
                                        <img src="assets\images\counterup\shape-01.png" alt="Shape Images">
                                    </div>
                                    <h3 class="count">15</h3>
                                    <p>Years of operation</p>
                                </div>
                                <!-- End Counterup -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 mt--60 mt_sm--0 mt_md--30">
                                <!-- Start Counterup -->
                                <div class="axil-counterup text-center color-style-two">
                                    <div class="icon">
                                        <img src="assets\images\counterup\shape-02.png" alt="Shape Images">
                                    </div>
                                    <h3 class="count">600</h3>
                                    <p>Projects deliverd</p>
                                </div>
                                <!-- End Counterup -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 mt--30 mt_sm--10">
                                <!-- Start Counterup -->
                                <div class="axil-counterup text-center color-style-three">
                                    <div class="icon">
                                        <img src="assets\images\counterup\shape-03.png" alt="Shape Images">
                                    </div>
                                    <h3 class="count">360</h3>
                                    <p>Specialist</p>
                                </div>
                                <!-- End Counterup -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 mt--90 mt_md--30 mt_sm--10">
                                <!-- Start Counterup -->
                                <div class="axil-counterup text-center color-style-four">
                                    <div class="icon">
                                        <img src="assets\images\counterup\shape-04.png" alt="Shape Images">
                                    </div>
                                    <h3 class="count">64</h3>
                                    <p>Years of operation</p>
                                </div>
                                <!-- End Counterup -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Counterup Area  -->

    <!-- Start Team Area  -->
    <div class="axil-team-area ax-section-gap bg-color-lightest">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-12 col-xl-4">
                    <div class="section-title text-left">
                        <h2 class="title wow mb--0" data-splitting=""><span>Select department:</span></h2>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-8 mt_lg--30 mt_md--30 mt_sm--30">
                    <ul class="nav nav-tabs team-nab-tabs justify-content-start justify-content-xl-end" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="management-tab" data-toggle="tab" href="#management" role="tab" aria-controls="management" aria-selected="true">Management</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="designer-tab" data-toggle="tab" href="#designer" role="tab" aria-controls="designer" aria-selected="false">Designer</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="app-development-tab" data-toggle="tab" href="#app-development" role="tab" aria-controls="app-development" aria-selected="false">App Developer</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="frontend-tab" data-toggle="tab" href="#frontend" role="tab" aria-controls="frontend" aria-selected="false">Frontend</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="backend-tab" data-toggle="tab" href="#backend" role="tab" aria-controls="backend-tab" aria-selected="false">Backend</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="bsiness-tab" data-toggle="tab" href="#bsiness" role="tab" aria-controls="bsiness-tab" aria-selected="false">Business development</a>
                        </li>
                    </ul>
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
                                            <img class="w-100" src="assets\images\team\team-03.jpg" alt="Team Images">
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
                                            <img class="w-100" src="assets\images\team\team-04.jpg" alt="Team Images">
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
                                            <img class="w-100" src="assets\images\team\team-05.jpg" alt="Team Images">
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
                                            <img class="w-100" src="assets\images\team\team-06.jpg" alt="Team Images">
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
    <!-- End Team Area  -->

    <!-- Start Video Area  -->
    <div class="axil-video-area ax-section-gapTop bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="sub-title extra08-color wow" data-splitting="">experts in field</span>
                        <h2 class="title wow" data-splitting=""><span>Design startup movement</span></h2>
                        <p class="subtitle-2 wow" data-splitting="">In vel varius turpis, non dictum sem. Aenean in
                            efficitur ipsum, in egestas ipsum. Mauris in mi ac tellus.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="axil-video-wrapper mt--60 mt_sm--30 mt_md--30">
            <div class="thumbnail position-relative">
                <img src="assets\images\bg\video-bg.jpg" alt="Video Bg Images">
                <div class="video-button position-to-top">
                    <a class="play__btn video-btn" href="https://www.youtube.com/watch?v=Pj_geat9hvI"><span class="triangle"></span></a>
                </div>
            </div>

        </div>
    </div>
    <!-- End Video Area  -->

</main>

@endsection