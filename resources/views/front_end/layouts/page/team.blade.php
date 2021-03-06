@extends('front_end.layouts.index')
@section('content')
<main class="page-wrapper page-team">
     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
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
                            <img class="image-1" src="{{ asset('front_end\images\slider\white-shape.png') }}" alt="Slider images">
                        </div>
                        <div class="shape-group">
                            <div class="shape shape-1">
                                <img src="{{asset('front_end\images\slider\human-1.svg') }}" alt="Shape Images">
                            </div>
                            <div class="shape shape-2">
                                <img src="{{asset('front_end\images\slider\human-2.svg') }}" alt="Shape Images">
                            </div>
                            <div class="shape shape-3">
                                <img src="{{asset('front_end\images\slider\human-3.svg') }}" alt="Shape Images">
                            </div>
                            <div class="shape shape-4">
                                <img src="{{asset('front_end\images\slider\human-4.svg') }}" alt="Shape Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start Counterup Area  -->

    <!-- End Counterup Area  -->

    <!-- Start Team Area  -->
    <div class="axil-team-area ax-section-gap bg-color-lightest">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-12 col-xl-4">
                    <div class="section-title text-left">
                        <h2 class="title wow mb--0" data-splitting=""><span>Trinoq Team:</span></h2>
                    </div>
                </div>
                
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="management" role="tabpanel" aria-labelledby="management-tab">
                    <div class="row">
                       

                        <!-- Start Single Team  -->
                        @foreach ($trinoqteam as  $view_team )
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_sm--30 mt_md--30">
                            <div class="axil-team">
                                <div class="inner">
                                    <div class="thumbnail paralax-image">
                                        <a href="team-details.html">
                                            <img class="w-100" src="{{asset('back_end/team_image/image/'. $view_team->image) }}"" alt="Team Images">
                                        </a>
                                    </div>
                                 
                                        <div class="content">
                                            <h4 class="title"><a href="#">{{ $view_team->name }}</a></h4>
                                            <p class="subtitle">{{ $view_team->position }}</p>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>  
                        @endforeach
                      
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
        {{-- <div class="axil-video-wrapper mt--60 mt_sm--30 mt_md--30">
            <div class="thumbnail position-relative">
                <img src="assets\images\bg\video-bg.jpg" alt="Video Bg Images">
                <div class="video-button position-to-top">
                    <a class="play__btn video-btn" href="https://www.youtube.com/watch?v=Pj_geat9hvI"><span class="triangle"></span></a>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- End Video Area  -->
  </div>
</main>

@endsection