<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home || Trinoq Technology</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front_end\images\favicon.ico') }}">
    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('front_end\css\vendor\bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('front_end\css\plugins\slick.css') }}">
    <link rel="stylesheet" href="{{asset('front_end\css\plugins\font-awesome.css') }}">
    <link rel="stylesheet" href="{{asset('front_end\css\plugins\plugins.css') }}">
    <link rel="stylesheet" href="{{asset('front_end\css\style.css') }}">
</head>

<body>
    <div class="main-content">
        <!-- Start Header -->
       @include('front_end.layouts.page.header');
        <!-- Start Header -->

        <!-- Start Popup Mobile Menu -->
        <div class="popup-mobile-manu">
            <div class="inner">
                <div class="mobileheader">
                    <div class="logo">
                        <a href="index.html">
                            <img style="height: 50px;" src="./assets/images/logo/Asset 9.png" alt="">
                        </a>
                    </div>
                    <a class="close-menu" href="#"></a>
                </div>
                <div class="menu-item">
                    <ul class="mainmenu-item">
                        <li><a href="#">Home</a>
                        </li>
                        <li class="has-children"><a href="services.html">Services</a>
                            <ul class="submenu">
                                <li><a href="single-service.html">UX/UI</a></li>
                                <li><a href="single-service.html">Motion Graphic</a></li>
                                <li><a href="single-service.html">Branding</a></li>
                                <li><a href="single-service.html">3D Design</a></li>
                                <li><a href="single-service.html">Web Application</a></li>
                                <li><a href="single-service.html">Mobile Application</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About Us</a></li>
                        <li class="has-children"><a href="#">Blog</a>
                            <ul class="submenu">
                                <li><a href="blog.html">Blog List</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="#">Pages</a>
                            <ul class="submenu">
                                <li><a href="team-details.html">Team Details</a></li>
                                <li><a href="comming-soon.html">Comming Soon</a></li>
                                <li><a href="404.html">404 Page</a></li>
                            </ul>
                        </li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- End Popup Mobile Menu -->

        <!-- Start Sidebar Area  -->
        <div class="side-nav">
            <div class="side-nav-inner">
                <!-- Start Search Bar  -->
                <form action="#" class="side-nav-search-form">
                    <div class="form-group search-field">
                        <input type="text" class="search-field" name="search-field" placeholder="Search...">
                        <button class="side-nav-search-btn"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                <!-- End Search Bar  -->

                <!-- Start Side Content  -->
                <div class="side-nav-content">
                    <div class="row ">
                        <!-- Start Left Bar  -->
                        <div class="col-lg-5 col-xl-6 col-12">
                            <ul class="main-navigation">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="blog.html">Blogs</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <!-- End Left Bar  -->

                        <!-- Start Right Bar  -->
                        <div class="col-lg-7 col-xl-6 col-12">
                            <div class="axil-contact-info-inner">

                                <!-- Start Single Address  -->
                                <div class="axil-contact-info">
                                    <address class="address">
                                        <span class="title">Contact Information</span>
                                        <p>Theodore Lowe, Ap #867-859 <br> Sit Rd, Azusa New York</p>
                                    </address>
                                    <address class="address">
                                        <span class="title">We're Available 24/ 7. Call Now.</span>
                                        <p><a class="tel" href="tel:8884562790"><i class="fas fa-phone"></i>(888)
                                                456-2790</a></p>
                                        <p><a class="tel" href="tel:12125553333"><i class="fas fa-fax"></i>(121)
                                                255-53333</a></p>
                                    </address>
                                </div>
                                <!-- End Single Address  -->

                                <!-- Start Single Address  -->
                                <div class="axil-contact-info">
                                    <h5 class="title">Find us here</h5>
                                    <div class="contact-social-share d-flex align-items-center">
                                        <ul class="social-share style-rounded">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- End Single Address  -->
                            </div>
                        </div>
                        <!-- End Right Bar  -->
                    </div>
                </div>
                <!-- End Side Content  -->
                <!-- End of .side-nav-inner -->
                <div class="close-sidenav" id="close-sidenav">
                    <button class="close-button"><i class="fal fa-times"></i></button>
                </div>
            </div>
        </div>
        <!-- End Sidebar Area  -->
        <!-- Start Page Wrapper -->
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
           @include('front_end.layouts.page.about');
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
            <div class="axil-team-area shape-position ax-section-gap bg-color-white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-xl-6">
                            <div class="thumbnail">
                                <div class="image">
                                    <img src="{{asset('front_end\images\team\team-group.png') }}" alt="Team Images">
                                </div>
                                <div class="total-team-button">
                                    <a href="team.html"><span>20+</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-5 offset-xl-1 mt_md--40 mt_sm--40">
                            <div class="content">
                                <div class="inner">
                                    <div class="section-title text-left">
                                        <span class="sub-title extra08-color wow" data-splitting="">our team</span>
                                        <h2 class="title wow" data-splitting="">Alone we can do so little; together we can
                                            do so much.</h2>
                                        <p class="subtitle-2 wow pr--0" data-splitting="">Donec metus lorem, vulputate at
                                            sapien sit amet, auctor
                                            iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam
                                            tristique libero.</p>
                                        <div class="axil-button-group mt--40">
                                            <a class="axil-button btn-large btn-transparent" href="team.html"><span class="button-text">Our Team</span><span class="button-icon"></span></a>
                                            <a class="axil-button axil-link-button" href="#">Careers</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-group">
                    <div class="shape shape-1">
                        <img class="customOne" src="{{asset('front_end\images\others\shape-06.svg') }}" alt="Shape">
                    </div>
                    <div class="shape shape-2">
                        <img src="{{asset('front_end\images\others\shape-13.svg') }}" alt="Shape">
                    </div>
                    <div class="shape shape-3">
                        <img src="{{asset('front_end\images\others\shape-14.svg') }}" alt="Shape">
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
            <div class="axil-brand-area ax-section-gap bg-color-white">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-4 col-lg-4 col-md-8 col-12">
                            <div class="section-title">
                                <span class="sub-title extra06-color wow" data-splitting="">top clients</span>
                                <h2 class="title wow" data-splitting="">We’ve built solutions for...</h2>
                                <p class="subtitle-2 wow" data-splitting="">Nulla facilisi. Nullam in magna id dolor
                                    blandit rutrum eget.</p>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 mt_md--40 mt_sm--40">
                            <div class="axil-brand-logo-wrapper">
                                <ul class="brand-list liststyle d-flex flex-wrap justify-content-center">
                                    <li><a href="#">
                                            <img src="{{asset('front_end\images\brand\brand-01.png') }}" alt="Brand Logo Images">
                                        </a></li>
                                    <li><a href="#">
                                            <img src="{{asset('front_end\images\brand\brand-02.png') }}" alt="Brand Logo Images">
                                        </a></li>
                                    <li><a href="#">
                                            <img src="{{asset('front_end\images\brand\brand-03.png') }}" alt="Brand Logo Images">
                                        </a></li>
                                    <li><a href="#">
                                            <img src="{{asset('front_end\images\brand\brand-04.png') }}" alt="Brand Logo Images">
                                        </a></li>
                                    <li><a href="#">
                                            <img src="{{asset('front_end\images\brand\brand-05.png') }}" alt="Brand Logo Images">
                                        </a></li>
                                    <li><a href="#">
                                            <img src="{{asset('front_end\images\brand\brand-06.png') }}" alt="Brand Logo Images">
                                        </a></li>
                                </ul>
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
        <!-- End Page Wrapper -->
        <!-- Start Footer Area -->
        <footer class="axil-footer footer-default theme-gradient-2">
            <div class="bg_image--2">
                <!-- Start Social Icon -->
                <div class="ft-social-icon-wrapper ax-section-gapTop">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="ft-social-share d-flex justify-content-center liststyle flex-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Social Icon -->
                <!-- Start Footer Top Area -->
                <div class="footer-top ax-section-gap">
                    <div class="container">
                        <div class="row">
                            <!-- Start Single Widget -->
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="footer-widget-item axil-border-right">
                                    <h2>Get in touch!</h2>
                                    <p>Fusce varius, dolor tempor interdum tristique, dui urna <br> bibendum magna, ut ullamcorper purus</p>
                                        <div class="axil-newsletter">
                                            <form class="newsletter-form" action="#">
                                                <input type="email" placeholder="Email">
                                                <a class="axil-button btn-transparent" href="#"><span class="button-text">Subscribe</span><span class="button-icon"></span></a>
                                            </form>
                                        </div>
                                </div>
                            </div>
                            <!-- End Single Widget -->

                            <!-- Start Single Widget -->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt_mobile--30">
                                <div class="footer-widget-item">
                                    <h6 class="title">Services</h6>
                                    <div class="footer-menu-container">
                                        <ul class="ft-menu liststyle link-hover">
                                            <li><a href="#">Branding</a></li>
                                            <li><a href="#">Web App</a></li>
                                            <li><a href="#">Mobile App</a></li>
                                            <li><a href="#">UX/UI</a></li>
                                            <li><a href="#">Motion Design</a></li>
                                            <li><a href="#">3D Design</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Widget -->

                            <!-- Start Single Widget -->
                            <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-12 mt_lg--30 mt_md--30 mt_sm--30">
                                <div class="footer-widget-item">
                                    <h6 class="title">Resourses</h6>
                                    <div class="footer-menu-container">
                                        <ul class="ft-menu liststyle link-hover">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="case-study.html">Case Studies</a></li>
                                            <li><a href="portfolio.html">Portfolio</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Widget -->

                            <!-- Start Single Widget -->
                            <div class="col-xl-1 col-lg-6 col-md-6 col-sm-6 col-12 mt_lg--30 mt_md--30 mt_sm--30">
                                <div class="footer-widget-item widget-support">
                                    <h6 class="title">Support</h6>
                                    <div class="footer-menu-container">
                                        <ul class="ft-menu liststyle link-hover">
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                            <li><a href="#">Sitemap</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                    </div>
                </div>
                <!-- End Footer Top Area -->
                <!-- Start Copyright -->
                <div class="copyright copyright-default">
                    <div class="container">
                        <div class="row row--0 ptb--20 axil-basic-thine-line">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="inner text-center text-md-left">
                                    <p>© 2020. All rights reserved by Trinoq.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="quick-contact">
                                    <!-- <ul class="link-hover d-flex justify-content-center justify-content-md-end liststyle">
                                        <li><a data-hover="Privacy Policy" href="privacy-policy.html">Privacy Policy</a></li>
                                        <li><a href="#">Terms of Use</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Copyright -->
            </div>
        </footer>
        <!-- End Footer Area -->
    </div>

    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="{{asset('front_end\js\vendor\modernizr.min.js') }}"></script>
    <!-- jQuery JS -->
    <script src="{{asset('front_end\js\vendor\jquery.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('front_end\js\vendor\bootstrap.min.js') }}"></script>
    <script src="{{asset('front_end\js\waypoints.min.js') }}"></script>
    <script src="{{asset('front_end\js\wow.js') }}"></script>
    <script src="{{asset('front_end\js\counterup.js') }}"></script>
    <script src="{{asset('front_end\js\imagesloaded.js') }}"></script>
    <script src="{{asset('front_end\js\isotope.js') }}"></script>
    <script src="{{asset('front_end\js\tilt.js') }}"></script>
    <script src="{{asset('front_end\js\anime.js') }}"></script>
    <script src="{{asset('front_end\js\tweenmax.js') }}"></script>
    <script src="{{asset('front_end\js\slipting.js') }}"></script>
    <script src="{{asset('front_end\js\scrollmagic.js') }}"></script>
    <script src="{{asset('front_end\js\addindicators.js') }}"></script>
    <script src="{{asset('front_end\js\slick.js') }}"></script>
    <script src="{{asset('front_end\js\youtube.js') }}"></script>
    <script src="{{asset('front_end\js\countdown.js') }}"></script>
    <script src="{{asset('front_end\js\scrollup.js') }}"></script>
    <script src="{{asset('front_end\js\stickysidebar.js') }}"></script>
    <script src="{{asset('front_end\js\contactform.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{asset('front_end/js/plugins/plugins.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{asset('front_end\js\main.js') }}"></script>
</body>

</html>