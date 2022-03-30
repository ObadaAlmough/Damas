{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


                </div>
            </div>
        </div>
    </body>
</html>
 --}}


 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home One || Damas || App Landing Page HTML Template</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets-website/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets-website/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets-website/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets-website/images/favicons/site.webmanifest">

    <!-- plugin scripts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets-website/css/animate.min.css">
    <link rel="stylesheet" href="assets-website/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets-website/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets-website/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets-website/css/magnific-popup.css">
    <link rel="stylesheet" href="assets-website/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets-website/css/swiper.min.css">
    <link rel="stylesheet" href="assets-website/plugins/dimon-icons/style.css">

    <!-- template styles -->
    <link rel="stylesheet" href="assets-website/css/style.css">
    <link rel="stylesheet" href="assets-website/css/responsive.css">
</head>

<body>
    <div class="preloader">
        <img src="assets-website/images/resources/preloader.png" class="preloader__image" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">
        <header class="site-header site-header__header-one ">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="#">
                            {{-- <img src="assets-website/images/resources/logo-dark.png" class="main-logo" width="119" alt="Awesome Image" /> --}}
                            <h2>Damas</h2>

                        </a>
                        <button class="menu-toggler" data-target=".main-navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <ul class=" one-page-scroll-menu navigation-box">
                            <li class="current scrollToLink">
                                <a href="#banner">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Home 01</a></li>
                                    <li><a href="index-2.html">Home 02</a></li>
                                    <li><a href="#">Header Versions</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Header 01</a></li>
                                            <li><a href="index-2.html">Header 02</a></li>
                                        </ul><!-- /.sub-menu -->
                                    </li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li class="scrollToLink">
                                <a href="#features">Features</a>

                            </li>
                            <li class="scrollToLink">
                                <a href="#video">Video</a>

                            </li>
                            <li class="scrollToLink">
                                <a href="#pricing">Pricing</a>
                            </li>
                            <li class="scrollToLink">
                                <a href="#screenshots">App Screenshots</a>
                            </li>
                            <li class="scrollToLink">
                                <a href="#news">News</a>
                                <ul class="sub-menu">
                                    <li><a href="news.html">News Page</a></li>
                                    <li><a href="news-details.html">News Details</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <div class="right-side-box">
                        {{-- <a class="thm-btn header__cta-btn" href="#"> --}}
                            <span class="row">
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <a href="{{ url('/home') }}" class="thm-btn header__cta-btn">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="thm-btn header__cta-btn">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="thm-btn header__cta-btn">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                            </span>
                            {{-- </a> --}}
                    </div><!-- /.right-side-box -->
                </div>
                <!-- /.container -->
            </nav>
        </header><!-- /.site-header -->
        <section class="banner-one" id="banner">
            <span class="banner-one__shape-1"></span>
            <span class="banner-one__shape-2"></span>
            <span class="banner-one__shape-3"></span>
            <span class="banner-one__shape-4"></span>
            <div class="container">
                <div class="banner-one__moc">
                    <img src="assets-website/images/mocs/banner-moc-1-1.png" alt="Awesome Image" />
                </div><!-- /.banner-one__moc -->
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="banner-one__content">

                            <h3 class="banner-one__title">We Deliver the <br> <span>Software</span> you <br> Need.</h3><!-- /.banner-one__title -->
                            <p class="banner-one__text">We are committed to providing our customers with <br> exceptional service while offering our employees the <br> best training.</p>
                            <!-- /.banner-one__text -->
                            <a href="#" class="banner-one__btn thm-btn "><span>Get Started</span></a><!-- /.thm-btn -->
                        </div><!-- /.banner-one__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.banner-one -->
        <section class="service-one" id="features">
            <div class="container">
                <div class="block-title text-center">
                    <h2 class="block-title__title">Checkout Our <span>Software</span> <br> Features Below.</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="service-one__single text-center">
                            <div class="service-one__inner">
                                <i class="service-one__icon dimon-icon-laptop"></i>
                                <h3><a href="#">Speed <br> Optimization</a></h3>
                                <p>Lorem ipsum is are <br> many variations of <br> pass of majority.</p>
                                <a href="#" class="service-one__link"><i class="dimon-icon-right-arrow"></i></a>
                            </div><!-- /.service-one__inner -->
                        </div><!-- /.service-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInDown" data-wow-duration="1500ms">
                        <div class="service-one__single text-center">
                            <div class="service-one__inner">
                                <i class="service-one__icon dimon-icon-presentation"></i>
                                <h3><a href="#">Marketing <br> Analysis</a></h3>
                                <p>Lorem ipsum is are <br> many variations of <br> pass of majority.</p>
                                <a href="#" class="service-one__link"><i class="dimon-icon-right-arrow"></i></a>
                            </div><!-- /.service-one__inner -->
                        </div><!-- /.service-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="service-one__single text-center">
                            <div class="service-one__inner">
                                <i class="service-one__icon dimon-icon-target"></i>
                                <h3><a href="#">SEO and <br> Backlinks</a></h3>
                                <p>Lorem ipsum is are <br> many variations of <br> pass of majority.</p>
                                <a href="#" class="service-one__link"><i class="dimon-icon-right-arrow"></i></a>
                            </div><!-- /.service-one__inner -->
                        </div><!-- /.service-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInDown" data-wow-duration="1500ms">
                        <div class="service-one__single text-center">
                            <div class="service-one__inner">
                                <i class="service-one__icon dimon-icon-visualization"></i>
                                <h3><a href="#">Content <br> Marketing</a></h3>
                                <p>Lorem ipsum is are <br> many variations of <br> pass of majority.</p>
                                <a href="#" class="service-one__link"><i class="dimon-icon-right-arrow"></i></a>
                            </div><!-- /.service-one__inner -->
                        </div><!-- /.service-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-one -->
        <section class="video-one" id="video">
            <img src="assets-website/images/background/video-one-bg.png" alt="Awesome Image" class="video-one__bg" />
            <div class="container wow fadeInUp" data-wow-duration="1500ms">
                <div class="video-one__box ">
                    <img src="assets-website/images/resources/video-1-1.jpg" alt="">
                    <div class="video-one__content">
                        <a href="https://www.youtube.com/watch?v=coI_aT4BDNA" class="video-popup video-one__btn"><i class="fa fa-play"></i><!-- /.fa fa-play --></a>
                        <!-- /.video-popup -->
                        <h2 class="video-one__title">Watch Our <span>Tutorial</span> <br> Videos.</h2><!-- /.video-one__title -->
                    </div><!-- /.video-one__content -->
                </div><!-- /.video-one__box -->
            </div><!-- /.container -->
        </section><!-- /.video-one -->
        <section class="cta-one">
            <img src="assets-website/images/background/cta-one-bg.png" class="cta-one__bg" alt="Awesome Image" />
            <div class="container">
                <img src="assets-website/images/mocs/cta-moc-1-1.png" class="cta-one__moc" alt="Awesome Image" />
                <div class="row justify-content-lg-end">
                    <div class="col-lg-6">
                        <div class="cta-one__content">
                            <i class="cta-one__icon dimon-icon-data1"></i>
                            <div class="block-title text-left">
                                <h2 class="block-title__title">Powerful <span>Tools</span> for Your Customers.</h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <div class="cta-one__text">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div><!-- /.cta-one__text -->
                            <ul class="list-unstyled">
                                <li><i class="fa fa-check"></i>Refresing to get such a personal touch.</li>
                                <li><i class="fa fa-check"></i>Duis aute irure dolor in reprehenderit in voluptate.</li>
                                <li><i class="fa fa-check"></i>Velit esse cillum dolore eu fugiat nulla pariatur.</li>
                            </ul><!-- /.list-unstyled -->
                            <a href="#" class="thm-btn"><span>Get Started</span></a>
                        </div><!-- /.cta-one__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta-one -->
        <section class="cta-two">
            <div class="container">
                <img src="assets-website/images/mocs/cta-moc-2-1.png" class="cta-two__moc" alt="Awesome Image" />
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cta-two__content">
                            <i class="cta-two__icon dimon-icon-data"></i>
                            <div class="block-title text-left">
                                <h2 class="block-title__title">Interact with <span>Customers</span> <br> on Single Platform.</h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <div class="cta-two__text">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem Ipsum is simply dummy text of the printing laborum perspiciatis unde.</p>
                                <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit lorem ipsum anim id est.</p>
                            </div><!-- /.cta-two__text -->
                            <a href="#" class="thm-btn"><span>Get Started</span></a>
                        </div><!-- /.cta-two__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta-two -->
        <section class="pricing-one" id="pricing">
            <div class="container">
                <div class="block-title text-center">
                    <h2 class="block-title__title">Choose <span>Pricing Plans</span> Which <br> Suits Your Needs.</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <ul class="list-inline text-center switch-toggler-list" role="tablist" id="switch-toggle-tab">
                    <li class="month active"><a href="#">Monthly</a></li>
                    <li>
                        <!-- Rounded switch -->
                        <label class="switch on">
                            <span class="slider round"></span>
                        </label>
                    </li>
                    <li class="year"><a href="#">Yearly</a></li>
                </ul><!-- /.list-inline -->
                <div class="tabed-content">
                    <div id="month">
                        <div class="row pricing-one__price-row">
                            <div class="col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                                <div class="pricing-one__single text-center">
                                    <h3>$20.00</h3>
                                    <p>basic pack</p>
                                    <ul class="list-unstyled">
                                        <li>Extra features</li>
                                        <li>Lifetime free support</li>
                                        <li>Upgrate options</li>
                                        <li>Full access</li>
                                    </ul><!-- /.list-unstyled -->
                                    <a href="#" class="thm-btn pricing-one__btn"><span>Choose Plan</span></a>
                                    <span class="tag-line">No hidden charges!</span>
                                </div><!-- /.pricing-one__single -->
                            </div><!-- /.col-lg-4 -->
                            <div class="col-lg-4 wow fadeInDown" data-wow-duration="1500ms">
                                <div class="pricing-one__single text-center">
                                    <h3>$30.00</h3>
                                    <p>medium pack</p>
                                    <ul class="list-unstyled">
                                        <li>Extra features</li>
                                        <li>Lifetime free support</li>
                                        <li>Upgrate options</li>
                                        <li>Full access</li>
                                    </ul><!-- /.list-unstyled -->
                                    <a href="#" class="thm-btn pricing-one__btn"><span>Choose Plan</span></a>
                                    <span class="tag-line">No hidden charges!</span>
                                </div><!-- /.pricing-one__single -->
                            </div><!-- /.col-lg-4 -->
                            <div class="col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                                <div class="pricing-one__single text-center">
                                    <h3>$40.00</h3>
                                    <p>premium pack</p>
                                    <ul class="list-unstyled">
                                        <li>Extra features</li>
                                        <li>Lifetime free support</li>
                                        <li>Upgrate options</li>
                                        <li>Full access</li>
                                    </ul><!-- /.list-unstyled -->
                                    <a href="#" class="thm-btn pricing-one__btn"><span>Choose Plan</span></a>
                                    <span class="tag-line">No hidden charges!</span>
                                </div><!-- /.pricing-one__single -->
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->
                    </div><!-- /#month -->
                    <div id="year">
                        <div class="row pricing-one__price-row">
                            <div class="col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                                <div class="pricing-one__single text-center">
                                    <h3>$20.00</h3>
                                    <p>basic pack</p>
                                    <ul class="list-unstyled">
                                        <li>Extra features</li>
                                        <li>Lifetime free support</li>
                                        <li>Upgrate options</li>
                                        <li>Full access</li>
                                    </ul><!-- /.list-unstyled -->
                                    <a href="#" class="thm-btn pricing-one__btn"><span>Choose Plan</span></a>
                                    <span class="tag-line">No hidden charges!</span>
                                </div><!-- /.pricing-one__single -->
                            </div><!-- /.col-lg-4 -->
                            <div class="col-lg-4 wow fadeInDown" data-wow-duration="1500ms">
                                <div class="pricing-one__single text-center">
                                    <h3>$30.00</h3>
                                    <p>medium pack</p>
                                    <ul class="list-unstyled">
                                        <li>Extra features</li>
                                        <li>Lifetime free support</li>
                                        <li>Upgrate options</li>
                                        <li>Full access</li>
                                    </ul><!-- /.list-unstyled -->
                                    <a href="#" class="thm-btn pricing-one__btn"><span>Choose Plan</span></a>
                                    <span class="tag-line">No hidden charges!</span>
                                </div><!-- /.pricing-one__single -->
                            </div><!-- /.col-lg-4 -->
                            <div class="col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                                <div class="pricing-one__single text-center">
                                    <h3>$40.00</h3>
                                    <p>premium pack</p>
                                    <ul class="list-unstyled">
                                        <li>Extra features</li>
                                        <li>Lifetime free support</li>
                                        <li>Upgrate options</li>
                                        <li>Full access</li>
                                    </ul><!-- /.list-unstyled -->
                                    <a href="#" class="thm-btn pricing-one__btn"><span>Choose Plan</span></a>
                                    <span class="tag-line">No hidden charges!</span>
                                </div><!-- /.pricing-one__single -->
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->
                    </div><!-- /#year -->
                </div><!-- /.tabed-content -->
            </div><!-- /.container -->
        </section><!-- /.pricing-one -->
        <section class="testimonials-one">
            <div class="container">
                <div class="block-title text-center">
                    <h2 class="block-title__title">What Our <span>Clients</span> Say <br> About Us.</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="testimonials-one__carousel-outer">
                    <div class="testimonials-one__carousel owl-carousel owl-theme">
                        <div class="item">
                            <div class="testimonials-one__single">
                                <div class="testimonials-one__inner">
                                    <p>This is due to their excellent service, competitive pricing and <br> customer support. It’s throughly refresing to get such a personal <br> touch. Duis aute irure dolor in reprehenderit.</p>
                                    <h3>Shirley Smith</h3>
                                    <span>Our Customers</span>
                                    <img src="assets-website/images/resources/testi-1-1.png" alt="Awesome Image" />
                                </div><!-- /.testimonials-one__inner -->
                            </div><!-- /.testimonials-one__single -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="testimonials-one__single">
                                <div class="testimonials-one__inner">
                                    <p>This is due to their excellent service, competitive pricing and <br> customer support. It’s throughly refresing to get such a personal <br> touch. Duis aute irure dolor in reprehenderit.</p>
                                    <h3>Shirley Smith</h3>
                                    <span>Our Customers</span>
                                    <img src="assets-website/images/resources/testi-1-1.png" alt="Awesome Image" />
                                </div><!-- /.testimonials-one__inner -->
                            </div><!-- /.testimonials-one__single -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="testimonials-one__single">
                                <div class="testimonials-one__inner">
                                    <p>This is due to their excellent service, competitive pricing and <br> customer support. It’s throughly refresing to get such a personal <br> touch. Duis aute irure dolor in reprehenderit.</p>
                                    <h3>Shirley Smith</h3>
                                    <span>Our Customers</span>
                                    <img src="assets-website/images/resources/testi-1-1.png" alt="Awesome Image" />
                                </div><!-- /.testimonials-one__inner -->
                            </div><!-- /.testimonials-one__single -->
                        </div><!-- /.item -->
                    </div><!-- /.testimonials-one__carousel -->
                    <div class="testimonials-one__carousel__shape-one"></div><!-- /.testimonials-one__carousel__shape-one -->
                    <div class="testimonials-one__carousel__shape-two"></div><!-- /.testimonials-one__carousel__shape-two -->
                    <div class="testimonials-one__nav">
                        <a class="testimonials-one__nav-left" href="#"><i class="dimon-icon-left-arrow"></i></a>
                        <a class="testimonials-one__nav-right" href="#"><i class="dimon-icon-right-arrow"></i></a>
                    </div><!-- /.testimonials-one__nav -->
                </div><!-- /.testimonials-one__carousel-outer -->
            </div><!-- /.container -->
        </section><!-- /.testimonials-one -->
        <div class="brand-one">
            <div class="container">
                <div class="brand-one__carousel owl-carousel owl-theme">
                    <div class="item">
                        <img src="assets-website/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                </div><!-- /.brand-one__carousel owl-carousel owl-theme -->
            </div><!-- /.container -->
        </div><!-- /.brand-one -->
        <section class="fact-one">
            <div class="container">
                <div class="block-title text-center">
                    <h2 class="block-title__title">Over 2200 <span>Projects</span> <br> Completed.</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="fact-one__single">
                            <div class="fact-one__inner">
                                <h3 class="fact-one__count counter">4789</h3><!-- /.fact-one__count counter -->
                                <p class="fact-one__text">projects</p><!-- /.fact-one__text -->
                            </div><!-- /.fact-one__inner -->
                        </div><!-- /.fact-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="fact-one__single">
                            <div class="fact-one__inner">
                                <h3 class="fact-one__count counter">6400</h3><!-- /.fact-one__count counter -->
                                <p class="fact-one__text">customers</p><!-- /.fact-one__text -->
                            </div><!-- /.fact-one__inner -->
                        </div><!-- /.fact-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="fact-one__single">
                            <div class="fact-one__inner">
                                <h3 class="fact-one__count counter">960</h3><!-- /.fact-one__count counter -->
                                <p class="fact-one__text">success</p><!-- /.fact-one__text -->
                            </div><!-- /.fact-one__inner -->
                        </div><!-- /.fact-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="fact-one__single">
                            <div class="fact-one__inner">
                                <h3 class="fact-one__count counter">378</h3><!-- /.fact-one__count counter -->
                                <p class="fact-one__text">awards</p><!-- /.fact-one__text -->
                            </div><!-- /.fact-one__inner -->
                        </div><!-- /.fact-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.fact-one -->
        <section class="app-shot-one" id="screenshots">
            <img src="assets-website/images/background/app-shot-bg.png" alt="Awesome Image" class="app-shot-one__bg" />
            <div class="container-fluid">
                <div class="block-title text-center">
                    <h2 class="block-title__title">Checkout Our App <br> <span>Interface</span> Screenshots.</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="app-shot-one__carousel owl-theme owl-carousel">
                    <div class="item">
                        <img src="assets-website/images/app-shots/app-shot-1-1.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/app-shots/app-shot-1-2.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/app-shots/app-shot-1-3.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/app-shots/app-shot-1-4.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/app-shots/app-shot-1-5.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/app-shots/app-shot-1-1.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/app-shots/app-shot-1-2.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/app-shots/app-shot-1-3.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/app-shots/app-shot-1-4.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/app-shots/app-shot-1-5.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/app-shots/app-shot-1-1.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/app-shots/app-shot-1-2.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/app-shots/app-shot-1-3.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/app-shots/app-shot-1-4.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets-website/images/app-shots/app-shot-1-5.jpg" alt="">
                    </div><!-- /.item -->
                </div><!-- /.app-shot-one__carousel owl-theme owl-carousel -->
            </div><!-- /.container-fluid -->
        </section><!-- /.app-shot-one -->
        <section class="faq-one">
            <img src="assets-website/images/background/faq-one-bg.png" alt="Awesome Image" class="faq-one__bg" />
            <div class="container">
                <div class="block-title text-center">
                    <h2 class="block-title__title">Want to Ask <span>Something</span> <br> From Us?</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="accrodion-grp" data-grp-name="faq-accrodion">
                    <div class="accrodion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="accrodion-inner">
                            <div class="accrodion-title">
                                <h4>Pre and post launch mobile app marketing pitfalls to avoid</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>There are many variations of passages of available but majority have alteration in some by inject humour or random words. Lorem ipsum dolor sit amet, error insolens reprimique no quo, ea pri verterem phaedr vel ea iisque aliquam.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div><!-- /.accrodion-inner -->
                    </div>
                    <div class="accrodion  wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="accrodion-inner">
                            <div class="accrodion-title">
                                <h4>Boostup your application traffic is just a step away</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>There are many variations of passages of available but majority have alteration in some by inject humour or random words. Lorem ipsum dolor sit amet, error insolens reprimique no quo, ea pri verterem phaedr vel ea iisque aliquam.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div><!-- /.accrodion-inner -->
                    </div>
                    <div class="accrodion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="accrodion-inner">
                            <div class="accrodion-title">
                                <h4>How to update application new features</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>There are many variations of passages of available but majority have alteration in some by inject humour or random words. Lorem ipsum dolor sit amet, error insolens reprimique no quo, ea pri verterem phaedr vel ea iisque aliquam.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div><!-- /.accrodion-inner -->
                    </div>
                    <div class="accrodion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="accrodion-inner">
                            <div class="accrodion-title">
                                <h4>How to connect with the support to improve app experience</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>There are many variations of passages of available but majority have alteration in some by inject humour or random words. Lorem ipsum dolor sit amet, error insolens reprimique no quo, ea pri verterem phaedr vel ea iisque aliquam.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div><!-- /.accrodion-inner -->
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.faq-one -->
        <section class="blog-one blog-one__home thm-gray-bg" id="news">
            <div class="container">
                <div class="block-title text-center">
                    <h2 class="block-title__title">Checkout Our <span>Latest</span> <br> News & Articles.</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="assets-website/images/blog/blog-1-1.jpg" alt="">
                                <a class="blog-one__more-link" href="news-details.html"><i class="fa fa-link"></i>
                                    <!-- /.fa fa-link --></a>
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="#">22 Oct, 2019</a></li>
                                    <li><a href="#">2 Comments</a></li>
                                </ul><!-- /.list-unstyled -->
                                <h3 class="blog-one__title">
                                    <a href="news-details.html">Pre and post launch mobile app marketing pitfalls to avoid</a>
                                </h3><!-- /.blog-one__title -->
                                <a href="news-details.html" class="blog-one__link">Read More</a><!-- /.blog-one__link -->
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-md-12 col-sm-12 wow fadeInDown" data-wow-duration="1500ms">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="assets-website/images/blog/blog-1-2.jpg" alt="">
                                <a class="blog-one__more-link" href="news-details.html"><i class="fa fa-link"></i>
                                    <!-- /.fa fa-link --></a>
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="#">22 Oct, 2019</a></li>
                                    <li><a href="#">2 Comments</a></li>
                                </ul><!-- /.list-unstyled -->
                                <h3 class="blog-one__title">
                                    <a href="news-details.html">It is all exactly as i said, but i don't like it let's unpack
                                        that</a>
                                </h3><!-- /.blog-one__title -->
                                <a href="news-details.html" class="blog-one__link">Read More</a><!-- /.blog-one__link -->
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-md-12 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="assets-website/images/blog/blog-1-3.jpg" alt="">
                                <a class="blog-one__more-link" href="news-details.html"><i class="fa fa-link"></i>
                                    <!-- /.fa fa-link --></a>
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="#">22 Oct, 2019</a></li>
                                    <li><a href="#">2 Comments</a></li>
                                </ul><!-- /.list-unstyled -->
                                <h3 class="blog-one__title">
                                    <a href="news-details.html">I just wanted to give you a heads-up, or this you feel you
                                        would</a>
                                </h3><!-- /.blog-one__title -->
                                <a href="news-details.html" class="blog-one__link">Read More</a><!-- /.blog-one__link -->
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-one blog-one__home -->
        <section class="mailchimp-one">
            <div class="container">
                <div class="block-title text-center">
                    <h2 class="block-title__title">Subscribe Our <span>Newsletter</span> <br> to Get New Updates.</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <form action="#" class="mailchimp-one__mc-form mc-form" data-url="https://xyz.us18.list-manage.com/subscribe/post?u=20e91746ef818cd941998c598&amp;id=cc0ee8140e">
                    <input type="email" id="mc-email" class="formInput" placeholder="Email address">
                    <button type="submit"><i class="dimon-icon-right-arrow"></i>
                        <!-- /.fa fa-paper-plane --></button>
                </form><!-- /.mailchimp-one__mc-form -->
                <div class="mc-form__response"></div><!-- /.mc-form__response -->
            </div><!-- /.container -->
        </section><!-- /.mailchimp-one -->
        <footer class="site-footer">
            <div class="site-footer__upper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="footer-widget footer-widget__about">
                                {{-- <img src="assets-website/images/resources/logo-dark.png" width="119" alt="" class="footer-widget__logo"> --}}
                                <h2>Damas</h2>
                                <p class="footer-widget__contact"><a href="tel:888-666-0000">888 666 0000</a></p>
                                <!-- /.footer-widget__contact -->
                                <p class="footer-widget__contact"><a href="mailto:needhelp@example.com">needhelp@example.com</a>
                                    <p class="footer-widget__contact">855 road, broklyn street <br> new york 600</p><!-- /.footer-widget__contact -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-2 -->
                        <div class="col-lg-6 d-flex justify-content-between footer-widget__links-wrap">
                            <div class="footer-widget">
                                <h3 class="footer-widget__title">Explore</h3><!-- /.footer-widget__title -->
                                <ul class="footer-widget__links list-unstyled">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Our Team</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">How It Works</a></li>
                                </ul><!-- /.footer-widget__links -->
                            </div><!-- /.footer-widget -->
                            <div class="footer-widget">
                                <h3 class="footer-widget__title">Services</h3><!-- /.footer-widget__title -->
                                <ul class="footer-widget__links list-unstyled">
                                    <li><a href="#">Speed Optimization </a></li>
                                    <li><a href="#">Marketing Analysis </a></li>
                                    <li><a href="#">SEO and Backlinks </a></li>
                                    <li><a href="#">Content Marketing</a></li>
                                </ul><!-- /.footer-widget__links -->
                            </div><!-- /.footer-widget -->
                            <div class="footer-widget">
                                <h3 class="footer-widget__title">Links</h3><!-- /.footer-widget__title -->
                                <ul class="footer-widget__links list-unstyled">
                                    <li><a href="#">Help </a></li>
                                    <li><a href="#">Support </a></li>
                                    <li><a href="#">Clients </a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul><!-- /.footer-widget__links -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-3">
                            <div class="footer-widget">
                                <div class="site-footer__social">
                                    <a href="#" class="fa fa-facebook-square"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-instagram"></a>
                                    <a href="#" class="fa fa-pinterest-p"></a>
                                </div><!-- /.site-footer__social -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__upper -->
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="inner-container text-center">
                        <p class="site-footer__copy">&copy; copyright 2020 by <a href="#">Layerdrops.com</a></p>
                        <!-- /.site-footer__copy -->
                    </div><!-- /.inner-container -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom -->
        </footer><!-- /.site-footer -->
    </div><!-- /.page-wrapper -->


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets-website/js/jquery.min.js"></script>
    <script src="assets-website/js/bootstrap.bundle.min.js"></script>
    <script src="assets-website/js/owl.carousel.min.js"></script>
    <script src="assets-website/js/waypoints.min.js"></script>
    <script src="assets-website/js/jquery.counterup.min.js"></script>
    <script src="assets-website/js/TweenMax.min.js"></script>
    <script src="assets-website/js/wow.js"></script>
    <script src="assets-website/js/jquery.magnific-popup.min.js"></script>
    <script src="assets-website/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets-website/js/swiper.min.js"></script>
    <script src="assets-website/js/jquery.easing.min.js"></script>

    <!-- template scripts -->
    <script src="assets-website/js/theme.js"></script>
</body>

</html>
