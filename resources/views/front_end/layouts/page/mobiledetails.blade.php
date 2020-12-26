@extends('front_end.layouts.index')
@section('content')

@foreach ($mobiledetails as $view_mobile )
<main class="page-wrapper">
    <!-- Start Blog Details Area  -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="axil-blog-area ax-section-gap bg-color-white">
            <div class="container">
                <div class="row row--40">
                
                    <div class="col-lg-8 col-md-12 col-12 offset-2">
                        <div class="axil-blog-details-area">
                            <div class="wrapper">
                            
                                <div class="thumbnail mb--60 mb_sm--20 mb_md--20 mt-5">
                                    <img class="w-100" src="{{asset('back_end/portfolio_mobile_image/'. $view_mobile->portfolio_mobile_image) }}" alt="Blog Images">
                                </div>
                                <div class="content mb--40 mb_sm--20 mb_md--20">
                                    <p>{{$view_mobile->details  }}</p>
                                    
                                </div>
                                <div class="content mb--40 mb_sm--20 mb_md--20">
                                    <a href="">{{$view_mobile->link }}</a>
                                    
                                </div>
                            
                            
                            </div>      

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</main>


@endforeach
    
@endsection