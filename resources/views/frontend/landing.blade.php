<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="img/favicon.png" type="image/png" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/linericon/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/lightbox/simpleLightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/animate-css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/jquery-ui/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">

</head>

<body>
    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="top_menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="float-left">
                            <p>{{ $company_detail->company_name }}</p>
                            <p>{{ $company_detail->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light w-100">
                    <a class="navbar-brand logo_h" href="{!! route('landing') !!}">
                        <img src="/storage/logo/{{ $company_detail->logo }}" class="img-fluid" style="height: 50px" alt="" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
                        <div class="row w-100 mr-0">
                            <div class="col-lg-7 pr-0">
                                <ul class="nav navbar-nav center_nav pull-right">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.html">Home</a>
                                    </li>
                                    <li class="nav-item submenu dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="category.html">Shop Category</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="single-product.html">Product Details</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="checkout.html">Product Checkout</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="cart.html">Shopping Cart</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item submenu dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="blog.html">Blog</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="single-blog.html">Blog Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item submenu dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="tracking.html">Tracking</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="elements.html">Elements</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="home_banner_area mb-40">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content row">
                    <div class="col-lg-12">
                        <p class="sub text-uppercase">{{ $company_detail->company_name }}</p>
                        <h3>
                            @php $count = 0 @endphp
                            @foreach( explode(' ', $company_detail->slogan) as $word)
                                {!! strlen($word) > 4 ? "<span>".$word."</span>" : $word !!}
                                @php $count++ @endphp
                                @if($count % 3 === 0)
                                    <br />
                                @endif
                            @endforeach
                        </h3>
                        <h4>{{ $company_detail->sub_slogan }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!-- Start feature Area -->
    <section class="feature-area section_gap_bottom_custom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <i class="fas fa-user"></i>
                            <h3>Free Delivery</h3>
                        </a>
                        <p>We deliver without charge within Nairobi</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <i class="fas fa-user"></i>
                            <h3>Superb Customer Care</h3>
                        </a>
                        <p>We offer quick feedback and care to our clients</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <i class="fas fa-user"></i>
                            <h3>Credit</h3>
                        </a>
                        <p>We offer credit terms to our trusted customers</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature Area -->

    <!--================ Feature Product Area =================-->
    <section class="feature_product_area section_gap_bottom_custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2><span>Featured products</span></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img style="height: 260px" class="img-fluid w-100"
                                src="img/product/feature-product/latex-gloves-1-600x600.jpg" alt="" />
                            <div class="p_icon">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>Latest men’s sneaker</h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4">$25.00</span>
                                <del>$35.00</del>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="img/product/feature-product/syringe-1574486_1920.jpg"
                                alt="" />
                            <div class="p_icon">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>Syringes</h4>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="img/product/feature-product/bp_machines.webp" alt="" />
                            <div class="p_icon">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>Bp Machines</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Feature Product Area =================-->

    <!--================ Start Blog Area =================-->
    <section class="blog-area section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2><span></span></h2>
                        <p>Bring called seed first of third give itself now ment</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/different-types-of-patient-monitoring-devices.jpg" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="single-blog.html">
                                <h4>Different Types Of Patient Monitoring Devices
                                </h4>
                            </a>
                            <div class="text-wrap">
                                <p>
                                    When a patient is coping with a severe injury or illness, things can take a turn for
                                    the worse very quickly.
                                </p>
                            </div>
                            <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/the-importance-of-priming-your-iv-tubing.jpg" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="single-blog.html">
                                <h4>What Are the Types of Medical Ventilators and How Do They Work?</h4>
                            </a>
                            <div class="text-wrap">
                                <p>
                                    The topic of medical ventilators is one that has gained more attention and curiosity
                                    over the past year due to COVID-19. .
                                </p>
                            </div>
                            <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img style="height: 225px" class="img-fluid"
                                src="img/what-are-the-types-of-medical-ventilators-and-how-do-they-work.jpg" alt="">
                        </div>
                        <div class="short_details">
                            <a class="d-block" href="single-blog.html">
                                <h4>The Importance of Priming Your IV Tubing</h4>
                            </a>
                            <div class="text-wrap">
                                <p>
                                    Healthcare providers may perform IV therapy to combat excessive blood or fluid loss,
                                    administer pain medication, or a plethora of other reasons. .
                                </p>
                            </div>
                            <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Blog Area =================-->

    <!--================ start footer Area  =================-->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Top Products</h4>
                    <ul>
                        <li><a href="#">Managed Website</a></li>
                        <li><a href="#">Manage Reputation</a></li>
                        <li><a href="#">Power Tools</a></li>
                        <li><a href="#">Marketing Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Features</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Guides</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Experts</a></li>
                        <li><a href="#">Agencies</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>You can trust us. we only send promo offers,</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                required="" type="email">
                            <button class="click-btn btn btn-default">Subscribe</button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom row align-items-center">
                <p class="footer-text m-0 col-lg-8 col-md-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());

                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-md-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/stellar.js') }}"></script>
    <script src="{{ asset('vendors/lightbox/simpleLightbox.min.js') }}"></script>
    <script src="{{ asset('vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/isotope/isotope-min.js') }}"></script>
    <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('vendors/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendors/counter-up/jquery.counterup.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
    <script src="https://kit.fontawesome.com/c4f6ccb2bc.js" crossorigin="anonymous"></script>

</body>

</html>
