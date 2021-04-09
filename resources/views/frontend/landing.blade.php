<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Modern Printers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slicknav.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="#"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li class="active"><a href="#">Home</a></li>
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="#">Blog</a></li>
                                                    <li><a href="#">Blog Details</a></li>
                                                    <li><a href="#">Element</a></li>
                                                    <li><a href="#">Apply Now</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="#" class="btn header-btn">0741414141</a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>

        <!-- slider Area Start-->
        <div class="slider-area slider-height" data-background="assets/img/hero/h1_hero.jpg">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider">
                    <div class="slider-cap-wrapper">
                        <div class="hero__caption">
                            <p data-animation="fadeInLeft" data-delay=".2s">{{ $company_detail->sub_slogan }}</p>
                            <h1 data-animation="fadeInLeft" data-delay=".5s">{{ $company_detail->slogan }}</h1>
                            <!-- Hero Btn -->
                            <a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay=".8s">Request for a quote</a>
                        </div>
                        <div class="hero__img">
                            <img src="assets/img/hero/printer.jpg" alt="">
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider">
                    <div class="slider-cap-wrapper">
                        <div class="hero__caption">
                            <p data-animation="fadeInLeft" data-delay=".2s">{{ $company_detail->sub_slogan }}</p>
                            <h1 data-animation="fadeInLeft" data-delay=".5s">{{ $company_detail->slogan }}</h1>
                            <!-- Hero Btn -->
                            <a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay=".8s">Request for a quote</a>
                        </div>
                        <div class="hero__img">
                            <img src="assets/img/hero/printer.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider-footer Start -->
            <div class="slider-footer section-bg d-none d-sm-block">
                <div class="footer-wrapper">
                    <!-- single -->
                    <div class="single-caption">
                        <div class="single-img">
                            <img src="assets/img/hero/hero_footer.png" alt="">
                        </div>
                    </div>
                    <!-- single -->
                    <div class="single-caption">
                        <div class="caption-icon">
                            <span class="flaticon-clock"></span>
                        </div>
                        <div class="caption">
                            <p>Quick and timely</p>
                            <p>delivery</p>
                        </div>
                    </div>
                    <!-- single -->
                    <div class="single-caption">
                        <div class="caption-icon">
                            <span class="flaticon-like"></span>
                        </div>
                        <div class="caption">
                            <p>Business cars, banners, and</p>
                            <p>books</p>
                        </div>
                    </div>
                    <!-- single -->
                    <div class="single-caption">
                        <div class="caption-icon">
                            <span class="flaticon-money"></span>
                        </div>
                        <div class="caption">
                            <p>Low prices</p>
                            <p>assured</p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- slider-footer End -->

        </div>
        <!-- slider Area End-->
        <!-- About Law Start-->
        <div class="about-low-area section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span>About Our Company</span>
                                <h2>{{ $company_detail->about_us_heading }}</h2>
                            </div>
                            <p>{!! $company_detail->about_us_description !!}</p>
                            <a href="#" class="btn">Get a Quote</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img">
                            <div class="about-font-img d-none d-lg-block">
                                <img src="assets/img/gallery/printing.jpg" class="img-fluid" style="height: 500px" alt="">
                            </div>
                            <div class="about-back-img ">
                                <img src="assets/img/gallery/printer2.jpg" class="img-fluid" style="height: 500px" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Law End-->
        <!-- Services Area Start -->
        <div class="services-area pt-150 pb-150" data-background="assets/img/gallery/section_bg02.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>Services we provide</span>
                            <h2>Professional printers for all industries</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($services as $service)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-work"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">{{ $service->header }}</a></h5>
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Application Area Start -->
        <div class="application-area pt-150 pb-140" data-background="assets/img/gallery/section_bg03.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 text-center mb-45">
                            <span>Get a quote</span>
                            <h2>Choose your service and checkout our prices</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-xl-8">
                        <!--Hero form -->
                        <form action="#" class="search-box">
                            <div class="select-form">
                                <div class="select-itms">
                                    <select name="select" id="select1">
                                        <option value="">Select Item</option>
                                        <option value="">Business card</option>
                                        <option value="">Photocopying</option>
                                        <option value="">Color Printing</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-form">
                                <input type="number" placeholder="Select Amount">
                            </div>
                            <div class="search-form">
                                <a href="#">Get a quote</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Application Area End -->
    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area">
            <div class="container">
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());

                                    </script> All rights reserved | This website is made with <i class="fa fa-heart"
                                        aria-hidden="true"></i> by <a href="https://colorlib.com"
                                        target="_blank">Sifa</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
    @include('frontend.partials.scripts')
</body>

</html>
