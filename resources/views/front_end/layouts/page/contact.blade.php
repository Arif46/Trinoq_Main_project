@extends('front_end.layouts.index')
@section('content')
<div  class="axil-breadcrumb-area breadcrumb-style-default pt--170 pb--70 theme-gradient">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner">
                    <ul class="axil-breadcrumb liststyle d-flex">
                        <li class="axil-breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="axil-breadcrumb-item active" aria-current="page">Contact</li>
                    </ul>
                    <h1 class="axil-page-title">Connect With Us</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-images">
        <img class="shape shape-1" src="{{asset('front_end\images\shape\bcm-01.svg') }}" alt="Shape Images">
        <img class="shape shape-2" src="{{asset('front_end\images\shape\bcm-02.svg') }}" alt="Shape Images">
        <img class="shape shape-3" src="{{asset('front_end\images\shape\bcm-03.svg') }}" alt="Shape Images">
    </div>
</div>
<!-- End Breadcrumb Area -->
<main class="main-wrapper">

    <!-- Start Contact Area  -->
    <div class="axil-contact-area axil-shape-position ax-section-gap bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-5 col-12">
                    <div class="contact-form-wrapper">
                        <!-- Start Contact Form -->
                        <div class="axil-contact-form contact-form-style-1">
                            <h3 class="title">Interested in discussing?</h3>
                            @if(Session::has('message'))
                            <div class="card-header" style="color:rgb(33, 26, 144)">
                              {{ Session::get('message') }}
                            </div>
                            @endif
                            <form  method="POST" action="{{url('/Contactinsert') }}">
                            @csrf
                                <div class="form-group">
                                    <input name="name" id="name" required type="text">
                                    <label>Name</label>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="form-group">
                                    <input name="email" id="email" required type="email">
                                    <label>Email</label>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" required id="phone">
                                    <label>Phone</label>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" required></textarea>
                                    <label>Your message</label>
                                    <span class="focus-border"></span>
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Send message">
                                    <p class="form-messege"></p>
                                </div>
                            </form>
                        </div>
                        <!-- End Contact Form -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xl-6 offset-xl-1 col-12 mt_md--40 mt_sm--40">
                    <div class="axil-address-wrapper">
                        <!-- Start Single Address  -->
                        <div class="axil-address wow move-up">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Phone</h4>
                                    <p>Our customer care is open from Saturday-Tuesday, 9:30 am to 6:30 pm</p>
                                    <p><a class="axil-link" href="tel:1234567890">(+880) 01517852575</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Address  -->
                        <!-- Start Single Address  -->
                        <div class="axil-address wow move-up mt--60 mt_sm--30 mt_md--30">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Email</h4>
                                    <p>Our support team will get back to in 48-h during standard business hours.
                                    </p>
                                    <p><a class="axil-link" href="mailto:example@gmail.com">hr.info@trinoq.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Address  -->
                    </div>
                </div>
            </div>
        </div>
     
    </div>
    <!-- End Contact Area  -->

    <!-- Start Office Location  -->
    
    <!-- End Office Location  -->


</main>

@endsection

