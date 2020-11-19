@extends('front_end.layouts.index')
@section('content')

<main class="page-wrappper">
    <!-- Start Breadcrumb Area -->
    <div class="axil-breadcrumb-area breadcrumb-style-2 pt--170 pt_sm--100 pb--70 theme-gradient">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-2 order-lg-1 mt_md--30 mt_sm--20">
                    <div class="inner">
                        <div class="content">
                            <h1 class="page-title mb--20">Our projects </h1>
                            <p class="subtitle-2">A quick view of industry specific problems solved with design
                                by
                                the awesome team at Trinoq.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 order-1 order-lg-2">
                    <div class="breadcrumb-thumbnail-group text-left text-lg-right">
                        <div class="thumbnail">
                            <img class="paralax-image" src="{{ asset('front_end\images\others\keystoke-image-1.png') }}" alt="Keystoke Images">
                        </div>
                        <div class="shape-group">
                            <div class="shape shape-1">
                                <img src="{{asset('front_end\images\others\shape-01.svg') }}" alt="keystoke">
                            </div>
                            <div class="shape shape-2">
                                <img class="customOne" src="{{asset('front_end\images\others\shape-02.svg') }}" alt="keystoke">
                            </div>
                            <div class="shape shape-3">
                                <img src="{{asset('front_end\images\others\shape-03.svg') }}" alt="keystoke">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start Portfolio Area -->
    <div  class="axil-portfolio-area ax-section-gap bg-color-lightest">
        <div class="container axil-masonary-wrapper">
            <div class="row align-items-end">
                <div class="col-lg-5 col-md-12">
                    <div class="section-title">
               
    
                        <h2 class="title wow mb--0" data-splitting="">Some of our finest work.</h2>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 mt_md--20 mt_sm--20">
                    <div class="messonry-button text-left text-lg-right">
                        <button data-filter="*"  class="is-checked"><span class="filter-text">All</span></button>
                        <button data-filter=".cat--1"><span class="filter-text">UX/UI</span></button>
                        <button data-filter=".cat--2"><span class="filter-text">Web</span></button>
                        <button data-filter=".cat--3"><span class="filter-text">Mobile</span></button>
                    
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="mesonry-list grid-metro3 mt--20">
                        <!-- Start Single Portfolio -->
                        {{-- <div class="portfolio portfolio_style--1 axil-control active portfolio-33-33 cat--1 cat--2 cat--3">
                            <div class="inner move-up wow">
                                <div class="thumb wow paralax-image">
                                    <a href="single-case-study.html"><img src="assets\images\portfolio\portfolio-01.jpg" alt="Portfolio Images"></a>
                                </div>
                                <div class="port-overlay-info">
                                    <div class="hover-action">
                                        <h4 class="title"><a href="single-case-study.html">Creative
                                                Agency</a></h4>
                                        <span class="category">ios, design</span>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- End Single Portfolio -->
    
               
    
                        <!-- Start Single mobile Portfolio -->
                        @foreach ($PortfolioWebdesign as $view_portfolio )
                        <div class="portfolio portfolio_style--1 portfolio-33-33 cat--2">
                            <div class="inner move-up wow">
                                <div class="thumb wow paralax-image">
                                    <a href="{{url('/Webdetails')}}/{{$view_portfolio->id}}"><img src="{{asset('back_end/portfolio_image/'. $view_portfolio->portfolio_image) }}" alt="Portfolio Images"></a>
                                </div>
                                <div class="port-overlay-info">
                                    <div class="hover-action">
                                        <h4 class="title"><a href="#">{{ $view_portfolio->Portfolio_type }}</a></h4>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>   
                        @endforeach
                     
                        <!-- End Single Portfolio -->
    
                        <!-- Start Single web Portfolio -->
                        @foreach ($Mobiledesign as $view_design )
                        <div class="portfolio portfolio_style--1 portfolio-33-33  cat--3">
                            <div class="inner move-up wow">
                                <div class="thumb wow paralax-image">
                                    <a href="{{url('/Mobiledetails')}}/{{$view_design->id}}"><img src="{{asset('back_end/portfolio_mobile_image/'. $view_design->portfolio_mobile_image ) }}"></a>
                                </div>
                                <div class="port-overlay-info">
                                    <div class="hover-action">
                                        <h4 class="title"><a href="#">{{ $view_design->portfolio_mobile_Type}}</a></h4>
                                      
                                    </div>
                                </div>
                            </div>
                        </div> 
                        @endforeach
                  
                        <!-- End Single Portfolio -->
    
                        <!-- Start Single ui Portfolio -->
                        @foreach ($uidesign as $view_ui )
                        <div class="portfolio portfolio_style--1 portfolio-33-33 cat--1">
                            <div class="inner move-up wow">
                                <div class="thumb wow paralax-image">
                                    <a href="{{ url('uidetails')}}/{{($view_ui->id)}}"><img src="{{asset('back_end/portfolio_ui_image/'. $view_ui->portfolio_ui_image) }}" alt="Portfolio Images"></a>
                                </div>
                                <div class="port-overlay-info">
                                    <div class="hover-action">
                                        <h4 class="title"><a href="#">{{$view_ui->portfolio_ui_type}}</a></h4>
                        
                                    </div>
                                </div>
                            </div>
                        </div>  
                        @endforeach
                      
                       
                    </div>
                    {{-- <div class="view-all-portfolio-button mt--60 text-center">
                        <a class="axil-button btn-large btn-transparent btn-xxl" href="#"><span class="button-text">Discover More Projects</span><span class="button-icon"></span></a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio Area -->
    <!-- Start Call To Action -->
    <div class="axil-call-to-action-area shape-position ax-section-gap theme-gradient">
      
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

</main>
@endsection