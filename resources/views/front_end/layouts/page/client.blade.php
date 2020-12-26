<div class="axil-testimonial-area ax-section-gap bg-color-lightest">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <span class="sub-title extra05-color wow" data-splitting="">Testimonials</span>
                    <h2 class="title wow" data-splitting="">Our Clients Love Us.</h2>          
                </div>
            </div>
        </div>
        <div class="testimonial-activation">
            <div class="row axil-testimonial-single">
                <!-- Start Single Testimonial -->
                @foreach ($testimonialsview as $view_testimonials )
                <div class="col-lg-6 mt--60 mt_sm--30 mt_md--30">
                    <div class="axil-testimonial testimonial axil-control active move-up wow">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                <img src="{{asset('back_end/image/'. $view_testimonials->image) }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h4 class="title">{{$view_testimonials->name }}</h4>
                                    <span>{{$view_testimonials->title  }}</span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">{{ $view_testimonials->comment_details }}</p>     
                            </div>
                        </div>
                    </div>
                </div> 
                @endforeach

            </div>
        </div>
    </div>
</div>
