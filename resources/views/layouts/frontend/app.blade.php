<!DOCTYPE html>

<html lang="en">

<head>

    <!-- ==============================================
    Basic Page Needs
    =============================================== -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->

    <title>Dedicated to Exceeding Expectation || PIX Clipping Ltd</title>

    <meta name="description" content="Creative Agency, Portfolio, Corporate, Startup & Technology">
    <meta name="subject" content="Creative Agency, Portfolio, Corporate, Startup & Technology">
    <meta name="author" content="Codings">

    <!-- ==============================================
    Favicons
    =============================================== -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon')}}">
    <link rel="apple-touch-icon" href="{{asset('front-assets/images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('front-assets/images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('front-assets/images/apple-touch-icon-114x114.png')}}">

    <!-- ==============================================
    Vendor Stylesheet
    =============================================== -->
    <link rel="stylesheet" href="{{asset('front-assets/css/vendor/bootstrap5.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-assets/css/vendor/slider.min.css')}}">
    {{-- <link rel="stylesheet" href="/front-assets/css/main.css"> --}}
    <link rel="stylesheet" href="{{asset('front-assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('front-assets/css/vendor/icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-assets/css/vendor/animation.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-assets/css/vendor/gallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-assets/css/vendor/cookie-notice.min.css')}}">

    <!-- ==============================================
    Custom Stylesheet
    =============================================== -->
    <link rel="stylesheet" href="/front-assets/css/default.css">
    <link rel="stylesheet" href="/front-assets/css/theme-orange.css">

    <!-- ==============================================
    Theme Settings
    =============================================== -->
    <style>
        :root {
            --header-bg-color: #f5f5f5;
            --nav-item-color: #2f323a;
            --top-nav-item-color: #2f323a;
            --hero-bg-color: #f5f5f5;

            --section-1-bg-color: #eeeeee;
            --section-2-bg-color: #e5e5e5;
            --section-3-bg-color: #f5f5f5;
            --section-4-bg-color: #eeeeee;
            --section-5-bg-color: #e5e5e5;
            --section-6-bg-color: #f5f5f5;
            --section-7-bg-color: #eeeeee;

            --footer-bg-color: #191919;
        }
    </style>

</head>

<body>


@include('layouts.frontend.header')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

@yield('title')
@include('include.flash_message')
@yield('content')

<!-- end main content-->
@include('layouts.frontend.footer')


<!-- Modal [search] -->
<div id="search" class="p-0 modal fade" role="dialog" aria-labelledby="search" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document">
        <div class="modal-content full">
            <div class="modal-header" data-dismiss="modal">
                Search <i class="icon-close"></i>
            </div>
            <div class="modal-body">
                <form class="row">
                    <div class="col-12 p-0 align-self-center">
                        <div class="row">
                            <div class="col-12 p-0 pb-3">
                                <h2>What are you looking for?</h2>
                                <p>Search for services and news about the best that happens in the world.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 input-group">
                                <input type="text" class="form-control" placeholder="Enter Keywords">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 input-group align-self-center">
                                <button class="btn primary-button"><i class="icon-magnifier"></i>SEARCH</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal [sign] -->
<div id="sign" class="p-0 modal fade" role="dialog" aria-labelledby="sign" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document">
        <div class="modal-content full">
            <div class="modal-header" data-dismiss="modal">
                Sign In Form <i class="icon-close"></i>
            </div>
            <div class="modal-body">
                <form action="/" class="row">
                    <div class="col-12 p-0 align-self-center">
                        <div class="row">
                            <div class="col-12 p-0 pb-3">
                                <h2>Sign In</h2>
                                <p>Don't have an account? <a href="#" class="primary-color" data-toggle="modal" data-target="#register">Register now</a>.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 input-group">
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="col-12 p-0 input-group">
                                <input type="password" class="form-control" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 input-group align-self-center">
                                <button class="btn primary-button"><i class="icon-login"></i>LOGIN</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal [register] -->
<div id="register" class="p-0 modal fade" role="dialog" aria-labelledby="register" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document">
        <div class="modal-content full">
            <div class="modal-header" data-dismiss="modal">
                Register Form <i class="icon-close"></i>
            </div>
            <div class="modal-body">
                <form action="/" class="row">
                    <div class="col-12 p-0 align-self-center">
                        <div class="row">
                            <div class="col-12 p-0 pb-3">
                                <h2>Register</h2>
                                <p>Have an account? <a href="#" class="primary-color" data-toggle="modal" data-target="#sign">Sign In</a>.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 input-group">
                                <input type="text" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="col-12 p-0 input-group">
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="col-12 p-0 input-group">
                                <input type="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="col-12 p-0 input-group">
                                <input type="password" class="form-control" placeholder="Confirm Password" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 input-group align-self-center">
                                <button class="btn primary-button"><i class="icon-rocket"></i>REGISTER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal [responsive menu] -->
<div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document">
        <div class="modal-content full">
            <div class="modal-header" data-dismiss="modal">
                Menu <i class="icon-close"></i>
            </div>
            <div class="menu modal-body">
                <div class="row w-100">
                    <div class="items p-0 col-12 text-center">
                        <!-- Append [navbar] -->
                    </div>
                    <div class="contacts p-0 col-12 text-center">
                        <!-- Append [navbar] -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scroll [to top] -->
<div id="scroll-to-top" class="scroll-to-top">
    <a href="#header" class="smooth-anchor">
        <i class="icon-arrow-up"></i>
    </a>
</div>

<!-- ==============================================
Google reCAPTCHA // Put your site key here
=============================================== -->
<script src="https://www.google.com/recaptcha/api.js?render=6Lf-NwEVAAAAAPo_wwOYxFW18D9_EKvwxJxeyUx7"></script>

<script src="{{asset('front-assets/js/vendor/jquery.min.js')}}"></script>
<script src="{{asset('front-assets/js/vendor/jquery.easing.min.js')}}"></script>
<script src="{{asset('front-assets/js/vendor/jquery.inview.min.js')}}"></script>
<script src="{{asset('front-assets/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('front-assets/js/vendor/bootstrap5.bundle.min.js')}}"></script>
<script src="{{asset('front-assets/js/vendor/ponyfill.min.js')}}"></script>
<script src="{{asset('front-assets/js/vendor/slider.min.js')}}"></script>
<script src="{{asset('front-assets/js/vendor/animation.min.js')}}"></script>
<script src="{{asset('front-assets/js/vendor/progress-radial.min.js')}}"></script>
<script src="{{asset('front-assets/js/vendor/bricklayer.min.js')}}"></script>
<script src="{{asset('front-assets/js/vendor/gallery.min.js')}}"></script>
<script src="{{asset('front-assets/js/vendor/shuffle.min.js')}}"></script>
<script src="{{asset('front-assets/js/vendor/cookie-notice.min.js')}}"></script>
<script src="{{asset('front-assets/js/vendor/particles.min.js')}}"></script>
<script src="{{asset('front-assets/js/main.js')}}"></script>

<!-- #endregion Global ========================= -->

{{-- page script --}}
@yield('page-script')

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/64cbf15ccc26a871b02d1948/1h6uadk9v';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->ç

</body>
</html>

