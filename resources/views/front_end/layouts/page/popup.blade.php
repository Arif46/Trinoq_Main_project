<div class="popup-mobile-manu">
    <div class="inner">
        <div class="mobileheader">
            <div class="logo">
                <a href="index.html">
                    <img style="height: 50px;" src="{{asset('front_end/images/logo/Asset 9.png') }}" alt="">
                </a>
            </div>
            <a class="close-menu" href="#"></a>
        </div>
        <div class="menu-item">
            <ul class="mainmenu-item">
                <li><a href="{{url('/') }}">Home</a>
                </li>
                {{-- <li class="has-children"><a href="services.html">Services</a>
                    <ul class="submenu">
                        <li><a href="single-service.html">UX/UI</a></li>
                        <li><a href="single-service.html">Motion Graphic</a></li>
                        <li><a href="single-service.html">Branding</a></li>
                        <li><a href="single-service.html">3D Design</a></li>
                        <li><a href="single-service.html">Web Application</a></li>
                        <li><a href="single-service.html">Mobile Application</a></li>
                    </ul>
                </li> --}}
                <li><a href="{{url('/About') }}">About Us</a></li>
                {{-- <li class="has-children"><a href="#">Blog</a>
                    <ul class="submenu">
                        <li><a href="blog.html">Blog List</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="has-children"><a href="#">Pages</a>
                    <ul class="submenu">
                        <li><a href="team-details.html">Team Details</a></li>
                        <li><a href="comming-soon.html">Comming Soon</a></li>
                        <li><a href="404.html">404 Page</a></li>
                    </ul>
                </li> --}}
                <li><a href="{{ url('/portfortfoliopage') }}">Portfolio</a></li>
                <li><a href="{{ url('/Teampage') }}">Team</a></li>
                <li><a href="{{url('/Contact') }}">Contact</a></li>
            </ul>
        </div>

    </div>
</div>