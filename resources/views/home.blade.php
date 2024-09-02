<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Phone Validater</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/favicon.png') }}" />
    <!-- Place favicon.ico in the root directory -->

    <!-- ======== CSS here ======== -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    @vite('resources/assets/frontend/css/frontend-main.css')
    @vite('resources/assets/frontend/css/animate.css')
    @vite('resources/assets/frontend/css/lineicons.css')
</head>

<body>

    <!-- ======== preloader start ======== -->
    <div class="preloader">
        <div class="loader">
            <div class="spinner">
                <div class="spinner-container">
                    <div class="spinner-rotator">
                        <div class="spinner-left">
                            <div class="spinner-circle"></div>
                        </div>
                        <div class="spinner-right">
                            <div class="spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- ======== header start ======== -->
    <header class="header">
        <div class="navbar-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{ asset('frontend/img/logo/logo.svg') }}" alt="Logo" />
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll active" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#features">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">API</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#why">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)">Register</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar collapse -->
                        </nav>
                        <!-- navbar -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- navbar area -->
    </header>
    <!-- ======== header end ======== -->

    <!-- ======== hero-section start ======== -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <!-- ======== typer start ======== -->
                        <h1 class="typer-heading">Free
                            <span class="typer" id="main"
                                data-words="Phone Validator,Fraud Prevention,Data Validation" data-delay="100"
                                data-deleteDelay="1000" data-colors="orange"></span>
                            <span class="cursor" data-owner="main"></span>
                        </h1>
                        <script async src="https://unpkg.com/typer-dot-js@0.1.0/typer.js"></script>
                        <!-- ======== typer End ======== -->
                        <p class="wow fadeInUp" data-wow-delay=".6s">
                            Please, purchase full version to get all sections, features and
                            permission to remove footer credit.
                        </p>
                        <a href="javascript:void(0)" class="main-btn border-btn btn-hover wow fadeInUp"
                            data-wow-delay=".6s">Purchase Now</a>
                        <a href="#features" class="scroll-bottom">
                            <i class="lni lni-arrow-down"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img wow fadeInUp" data-wow-delay=".5s">
                        <img src="{{ asset('frontend/img/hero/hero-img.png') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== hero-section end ======== -->

    <!-- ======== feature-section start ======== -->
    <section id="features" class="feature-section pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-feature">
                        <div class="icon">
                            <i class="lni lni-bootstrap"></i>
                        </div>
                        <div class="content">
                            <h3>Bootstrap 5</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                diam nonumy eirmod tempor invidunt ut labore
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-feature">
                        <div class="icon">
                            <i class="lni lni-layout"></i>
                        </div>
                        <div class="content">
                            <h3>Clean Design</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                diam nonumy eirmod tempor invidunt ut labore
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-feature">
                        <div class="icon">
                            <i class="lni lni-coffee-cup"></i>
                        </div>
                        <div class="content">
                            <h3>Easy to Use</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                diam nonumy eirmod tempor invidunt ut labore
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== feature-section end ======== -->

    <!-- ======== about-section start ======== -->
    <section id="about" class="about-section pt-150">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('frontend/img/about/about-1.png') }}" alt="" class="w-100" />
                        <img src="{{ asset('frontend/img/about/about-left-shape.svg') }}" alt=""
                            class="shape shape-1" />
                        <img src="{{ asset('frontend/img/about/left-dots.svg') }}" alt=""
                            class="shape shape-2" />
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about-content">
                        <div class="section-title mb-30">
                            <h2 class="mb-25 wow fadeInUp" data-wow-delay=".2s">
                                Perfect Solution Thriving Online Business
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                dinonumy eirmod tempor invidunt ut labore et dolore magna
                                aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                sea takimata sanctus est Lorem.Lorem ipsum dolor sit amet.
                            </p>
                        </div>
                        <a href="javascript:void(0)" class="main-btn btn-hover border-btn wow fadeInUp"
                            data-wow-delay=".6s">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== about-section end ======== -->

    <!-- ======== about2-section start ======== -->
    <section id="about" class="about-section pt-150">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-content">
                        <div class="section-title mb-30">
                            <h2 class="mb-25 wow fadeInUp" data-wow-delay=".2s">
                                Easy to Use with Tons of Awesome Features
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                aliquyam erat, sed diam voluptua.
                            </p>
                        </div>
                        <ul>
                            <li>Quick Access</li>
                            <li>Easily to Manage</li>
                            <li>24/7 Support</li>
                        </ul>
                        <a href="javascript:void(0)" class="main-btn btn-hover border-btn wow fadeInUp"
                            data-wow-delay=".6s">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 order-first order-lg-last">
                    <div class="about-img-2">
                        <img src="{{ asset('frontend/img/about/about-2.png') }}" alt="" class="w-100" />
                        <img src="{{ asset('frontend/img/about/about-right-shape.svg') }}" alt=""
                            class="shape shape-1" />
                        <img src="{{ asset('frontend/img/about/right-dots.svg') }}" alt=""
                            class="shape shape-2" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== about2-section end ======== -->

    <!-- ======== feature-section start ======== -->
    <section id="why" class="feature-extended-section pt-100">
        <div class="feature-extended-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-5 col-xl-6 col-lg-8 col-md-9">
                        <div class="section-title text-center mb-60">
                            <h2 class="mb-25 wow fadeInUp" data-wow-delay=".2s">
                                Why Choose SaaSpal
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                diam nonumy eirmod tempor invidunt ut labore et dolore
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature-extended">
                            <div class="icon">
                                <i class="lni lni-display"></i>
                            </div>
                            <div class="content">
                                <h3>SaaS Focused</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut labore
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature-extended">
                            <div class="icon">
                                <i class="lni lni-leaf"></i>
                            </div>
                            <div class="content">
                                <h3>Awesome Design</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut labore
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature-extended">
                            <div class="icon">
                                <i class="lni lni-grid-alt"></i>
                            </div>
                            <div class="content">
                                <h3>Ready to Use</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut labore
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature-extended">
                            <div class="icon">
                                <i class="lni lni-javascript"></i>
                            </div>
                            <div class="content">
                                <h3>Vanilla JS</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut labore
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature-extended">
                            <div class="icon">
                                <i class="lni lni-layers"></i>
                            </div>
                            <div class="content">
                                <h3>Essential Sections</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut labore
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature-extended">
                            <div class="icon">
                                <i class="lni lni-rocket"></i>
                            </div>
                            <div class="content">
                                <h3>Highly Optimized</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut labore
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== feature-section end ======== -->

    <!-- ======== subscribe-section start ======== -->
    <section id="contact" class="subscribe-section pt-120">
        <div class="container">
            <div class="subscribe-wrapper img-bg">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-7">
                        <div class="section-title mb-15">
                            <h2 class="text-white mb-25">Subscribe Our Newsletter</h2>
                            <p class="text-white pr-5">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                diam nonumy eirmod tempor
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <form action="#" class="subscribe-form">
                            <input type="email" name="subs-email" id="subs-email" placeholder="Your Email" />
                            <button type="submit" class="main-btn btn-hover">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== subscribe-section end ======== -->

    <!-- ======== footer start ======== -->
    <footer class="footer">
        <div class="container">
            <div class="widget-wrapper">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <div class="logo mb-50">
                                <a href="#">
                                    <img src="{{ asset('frontend/img/logo/logo.svg') }}" alt="Sticky Logo" />
                                </a>
                            </div>
                            <p class="desc mb-30 text-white">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                dinonumy eirmod tempor invidunt.
                            </p>
                            <ul class="socials">
                                <li>
                                    <a href="jvascript:void(0)">
                                        <i class="lni lni-facebook-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="jvascript:void(0)">
                                        <i class="lni lni-twitter-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="jvascript:void(0)">
                                        <i class="lni lni-instagram-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="jvascript:void(0)">
                                        <i class="lni lni-linkedin-original"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <div class="footer-widget">
                            <h3>About Us</h3>
                            <ul class="links">
                                <li><a href="javascript:void(0)">Home</a></li>
                                <li><a href="javascript:void(0)">Feature</a></li>
                                <li><a href="javascript:void(0)">About</a></li>
                                <li><a href="javascript:void(0)">Testimonials</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3>Features</h3>
                            <ul class="links">
                                <li><a href="javascript:void(0)">How it works</a></li>
                                <li><a href="javascript:void(0)">Privacy policy</a></li>
                                <li><a href="javascript:void(0)">Terms of service</a></li>
                                <li><a href="javascript:void(0)">Refund policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3>Other Products</h3>
                            <ul class="links">
                                <li><a href="jvascript:void(0)">Accounting Software</a></li>
                                <li><a href="jvascript:void(0)">Billing Software</a></li>
                                <li><a href="jvascript:void(0)">Booking System</a></li>
                                <li><a href="jvascript:void(0)">Tracking System</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ======== footer end ======== -->

    <!-- ======== scroll-top ======== -->
    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ======== JS here ======== -->
    {{-- <script src="assets/js/frontend-main.js"></script> --}}
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.bundle.min.js') }}"></script>
    @vite('resources/assets/frontend/js/frontend-main.js')


</body>

</html>
