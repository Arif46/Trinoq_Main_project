<div  class="axil-portfolio-area ax-section-gap bg-color-lightest">
    <div class="container axil-masonary-wrapper">
        <div class="row align-items-end">
            <div class="col-lg-5 col-md-12">
                <div class="section-title">
                    <span class="sub-title extra07-color wow" data-splitting="" >Our projects</span>
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
            </div>
        </div>
    </div>
</div>