<header id="header">
    <!-- Navbar -->
    <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand sticky-header">
        <div class="container">

            <!-- Navbar Brand-->
            <a class="navbar-brand" href="/">
                    <img src="/assets/images/logo-light.jpeg" alt="Pix Clipping logo">
            </a>

            <!-- Nav holder -->
            <div class="ml-auto"></div>

            <!-- Navbar Items -->
            <ul class="navbar-nav items">
                <li class="nav-item"><a href="{{route('index')}}" class="nav-link {{\Illuminate\Support\Facades\Route::current()->getName() === 'index' ? 'active': ''}}" href="{{route('about-us')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{\Illuminate\Support\Facades\Route::current()->getName() === 'about-us' ? 'active': ''}}" href="{{route('about-us')}}">About Us</a></li>
                <li class="nav-item"><a href="{{route('services')}}" class="nav-link {{\Illuminate\Support\Facades\Route::current()->getName() === 'services' ? 'active': ''}}">Services</a></li>
                <li class="nav-item"><a href="{{route('workflow')}}" class="nav-link {{\Illuminate\Support\Facades\Route::current()->getName() === 'workflow' ? 'active': ''}}">Workflow</a></li>
                <li class="nav-item"><a href="{{route('price')}}" class="nav-link {{\Illuminate\Support\Facades\Route::current()->getName() === 'price' ? 'active': ''}}">Price</a></li>
                <li class="nav-item"><a href="{{route('contact')}}" class="nav-link {{\Illuminate\Support\Facades\Route::current()->getName() === 'contact' ? 'active': ''}}">Contact</a></li>
            </ul>

            <!-- Navbar Icons -->
{{--            <ul class="navbar-nav icons">--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link" data-toggle="modal" data-target="#search">--}}
{{--                        <i class="icon-magnifier"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item social">--}}
{{--                    <a href="#" class="nav-link"><i class="icon-social-twitter"></i></a>--}}
{{--                </li>--}}
{{--                <li class="nav-item social">--}}
{{--                    <a href="#" class="nav-link"><i class="icon-social-instagram"></i></a>--}}
{{--                </li>--}}
{{--            </ul>--}}

            <!-- Navbar Toggle -->
            <ul class="navbar-nav toggle">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                        <i class="icon-menu m-0"></i>
                    </a>
                </li>
            </ul>

            <!-- Navbar Action -->
            <ul class="navbar-nav action">
                <li class="nav-item ml-3">
                    <a href="{{route('login')}}" target="_blank" class="btn ml-lg-auto primary-button"><i class="icon-rocket"></i>ORDER NOW</a>
                    <!--
                        Suggestion: Replace the purchase button above with a contact button.

                        <a href="#contact" class="smooth-anchor btn ml-lg-auto primary-button"><i class="icon-rocket"></i>CONTACT US</a>
                    -->
                </li>
            </ul>
        </div>
    </nav>

</header>
