@extends('front_end.layouts.index')
@section('content')

@foreach ($webdetails as $view_web )
<main class="page-wrapper"> 
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <!-- Start Blog Details Area  -->
        <div class="axil-blog-area ax-section-gap bg-color-white">
            <div class="container">
                <div class="row row--40">
                
                    <div class="col-lg-8 col-md-12 col-12 offset-2">
                        <div class="axil-blog-details-area">
                            <div class="wrapper">
                            
                                <div class="thumbnail mb--60 mb_sm--20 mb_md--20 mt-5">
                                    <img class="w-100" src="{{asset('back_end/portfolio_image/'. $view_web->portfolio_image) }}" alt="Blog Images">
                                </div>
                                <div class="content mb--40 mb_sm--20 mb_md--20">
                                    <p>{{$view_web->details  }}</p>
                                    
                                </div>
                                <div class="content mb--40 mb_sm--20 mb_md--20">
                                    <a href="">{{$view_web->link }}</a>
                                    
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