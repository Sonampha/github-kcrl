<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="KC International Airlines, KC Airline, KC Cambodia, Cambodia Airline, Cambodia Flight" />
    <meta name="keywords" content="KC International Airlines, KC Airline, KC Cambodia, Cambodia Airline, Cambodia Flight" />

    <!--====== TITLE TAG ======-->
    <title>KC International Airlines - @yield('title')</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="{{ url('/img/favicon.png') }}" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="{{ url('/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ url('/css/animate.css') }}">
    <link rel="stylesheet" href="{{ url('/css/stellarnav.min.css') }}">
    <link rel="stylesheet" href="{{ url('/css/owl.carousel.css') }}">
    <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/css/font-awesome.min.css') }}" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="{{ url('/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/mega-menu/m-menu.css') }}">	

    <script src="{{ url('/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!--Start of Zendesk Chat Script-->
    <script type="text/javascript">
    window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
    $.src="https://v2.zopim.com/?5lK4BI1QgjzXN9xxrkp2u4COTpipGkh6";z.t=+new Date;$.
    type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
    </script>
    <!--End of Zendesk Chat Script-->

</head>

<body onLoad="goforit()">

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area single-page" id="home">
        <div class="top-area-bg" data-stellar-background-ratio="0.6"></div>
        @include('layouts.menu-area')
        @include('layouts.welcome-area', ['pageTitle' => app()->view->getSections()['title'], 'header' => app()->view->getSections()['header']])
    </header>
    <!--END TOP AREA-->

    @yield('content')

    <!--FOOER AREA-->
    <div class="footer-area dark-bg">
        <div class="footer-bottom-area wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="single-footer-widget list-widget">
                            <h3>Corporate Info</h3>
                            <ul>
                                <li><a href="/about-us/information-for-investors" target="_blank">Information for Investors</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="single-footer-widget list-widget">
                            <h3>Careers</h3>
                            <ul>
                                <li><a href="/careers/why-join-us" target="_blank">Why Join KC Airlines?</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="single-footer-widget list-widget">
                            <h3>Support</h3>
                            <ul>
                                <li><a href="/faqs" target="_blank">FAQS</a></li>
                                <li><a href="/terms-conditions" target="_blank">Terms and Conditions</a></li>
                                <li><a href="/contact" target="_blank">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-border"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="footer-copyright wow fadeIn">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | KC International Airlines Co.,Ltd</p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="footer-social-bookmark text-right wow fadeIn">
                            <ul class="social-bookmark">
                                <li><a href="https://www.facebook.com/KCAIRLINES/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FOOER AREA END-->


    <!--====== SCRIPTS JS ======-->
    <script src="{{ url('/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ url('/js/vendor/bootstrap.min.js') }}"></script>

    <!--====== PLUGINS JS ======-->
    <script src="{{ url('/js/vendor/jquery.easing.1.3.js') }}"></script>
    <script src="{{ url('/js/vendor/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ url('/js/vendor/jquery.appear.js') }}"></script>
    <script src="{{ url('/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('/js/stellar.js') }}"></script>
    <script src="{{ url('/js/wow.min.js') }}"></script>
    <script src="{{ url('/js/stellarnav.min.js') }}"></script>
    <script src="{{ url('/js/jquery.sticky.js') }}"></script>

    <!--===== ACTIVE JS=====-->
    <script src="{{ url('/js/main.js') }}"></script>
</body>

</html>