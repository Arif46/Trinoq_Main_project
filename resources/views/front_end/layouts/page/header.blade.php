<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <header class="ax-header haeder-default light-logo-version header-transparent axil-header-sticky">
        <div class="header-wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-8 header-left">
                        <div class="logo">
                            <a href="{{url('/') }}">
                                <img style="height: 50px;" src="{{asset('front_end/images/logo/Asset 9.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6 col-sm-6 col-4 header-right">
                        <div class="mainmenu-wrapepr">
                            <!-- Start Mainmanu Nav -->
                            <nav class="mainmenu-nav d-none d-lg-block">
                                <ul class="mainmenu">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li class="has-dropdown"><a href="#services">Services</a>
                                        <ul class="axil-submenu">
                                            <li><a href="#ui">UX/UI</a></li>
                                            <li><a href="#Motiongraphics">Motion Graphic</a></li>
                                            <li><a href="#branding">Branding</a></li>
                                            <li><a href="#3ddesign">3D Design</a></li>
                                            <li><a href="#web">Web Application</a></li>
                                            <li><a href="#mobile">Mobile Application</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('/About') }}">About Us</a></li>
                                    {{-- <li class="has-dropdown"><a href="#">Blog</a>
                                        <ul class="axil-submenu">
                                            <li><a href="blog.html">Blog List</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li class="has-dropdown"><a href="#">Pages</a>
                                        <ul class="axil-submenu">
                                            <li><a href="team-details.html">Team Details</a></li>
                                            <li><a href="comming-soon.html">Comming Soon</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="{{ url('/portfortfoliopage') }}">Portfolio</a></li>
                                    <li><a href="{{ url('/Teampage') }}">Team</a></li>
                                    <li><a href="{{url('/Contact') }}">Contact</a></li>

                                </ul>
                            </nav>
                            <!-- End Mainmanu Nav -->
                            <div class="axil-header-extra d-flex align-items-center">

                            

                                <!-- Start Hamburger -->
                                <div class="ax-hamburger ml--40 ml_sm--10 d-none d-lg-block">
                                    <a class="axil-menuToggle ax-hamburger-trigger" id="side-nav-toggler" href="#">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                                <!-- End Hamburger -->

                                <!-- Start Menu Bar  -->
                                <div class="ax-menubar popup-navigation-activation d-block d-lg-none ml_sm--20 ml_md--20">
                                    <div>
                                        <i></i>
                                    </div>
                                </div>
                                <!-- End Menu Bar  -->

                                <!-- Start Search Area  -->
                                <div class="axil-search-area">
                                    <form action="#" class="axil-searchbar w-100">
                                        <div class="search-field">
                                            <input type="text" placeholder="Search Here...">
                                            <button class="navbar-search-btn" type="button"><i class="fal fa-search"></i></button>
                                        </div>
                                        <a href="#" class="navbar-search-close"><i class="fal fa-times"></i></a>
                                    </form>
                                </div>
                                <!-- End Search Area  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

