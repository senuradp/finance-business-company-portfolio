<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', config('app.name'))</title>

    <!-- Stylesheets -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/responsive.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="/assets/css/custom/theme-2.css"/>
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">

</head>

<!-- body wrapper -->
<body class="body_wrapper">


    <!-- color switcher style -->
    {{-- <div class="switcher">
        <div class="switch_btn">
            <button><i class="fa fa-cog fa-spin"></i></button>
        </div>
        <div class="switch_menu">
            <h4 class="title">Style Switcher</h4>
                <div class="switcher_container">
                    <h5>Choose Your Color</h5>
                    <ul id="styleOptions" title="switch styling">
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-1" class="color2"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-3" class="color3"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-4" class="color4"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-5" class="color5"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-6" class="color6"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-7" class="color7"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-8" class="color8"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-9" class="color9"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-10" class="color10"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-11" class="color11"></a>
                        </li>
                    </ul>
                    <div class="text">You can easily change and switch the colors.</div>
                </div>
        </div>
    </div> --}}
    <!-- color stitcher style end -->


    <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->


    <!-- main header area -->
    <header class="main-header">

        <!-- header upper -->
        <div class="header-upper">
            <div class="container">
                <div class="top-left">
                    <div class="text">Welcome to Tallent Business Template</div>
                </div>
                <div class="top-right">
                    <ul class="top-bar">
                        <li><i class="fa fa-phone"></i>Phone: (+039) 3568 6854</li>
                        <li><i class="fa fa-envelope"></i>mail@tallent.com</li>
                    </ul>
                    {{-- <div class="language-switcher">
                        <div id="polyglotLanguageSwitcher" class="">
                            <form action="#">
                                <select id="polyglot-language-options">
                                    <option id="en" value="en" selected>English</option>
                                    <option id="fr" value="fr">French</option>
                                    <option id="de" value="de">German</option>
                                    <option id="it" value="it">Italian</option>
                                    <option id="es" value="es">Spanish</option>
                                </select>
                            </form>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- end header upper -->

        <!-- header lower/fixed-header -->
        <div class="theme_menu stricky">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="logo-box">
                            <a href="/"></a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="menu-bar">
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="/">Home</a></li>
                                        <li class="dropdown"><a href="/about">About Us</a>
                                            {{-- <ul class="submenu">
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="team.html">Our Team</a></li>
                                                <li><a href="faqe.html">Faq Page</a></li>
                                                <li><a href="testimonials.html">Testimonial</a></li>
                                                <li><a href="error.html">Error Page</a></li>
                                            </ul> --}}
                                        </li>
                                        <li class="dropdown"><a href="/services">Services</a>
                                            {{-- <ul class="submenu">
                                                <li><a href="service.html">Our Service</a></li>
                                                <li><a href="service-details.html">Service Details</a></li>
                                            </ul> --}}
                                        </li>
                                        <li class="dropdown"><a href="/projects">Projects</a>
                                            {{-- <ul class="submenu">
                                                <li><a href="Project1.html">Project Grid</a></li>
                                                <li><a href="Project2.html">Project Grid Filter</a></li>
                                                <li><a href="Project3.html">Project Gallery</a></li>
                                                <li><a href="project-details.html">Project Details</a></li>
                                            </ul> --}}
                                        </li>
                                        {{-- <li class="dropdown"><a href="#">Shop</a>
                                            <ul class="submenu">
                                                <li><a href="shop.html">Shop Page</a></li>
                                                <li><a href="single-shop.html">Shop Details</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                                <li><a href="login.html">Login Page</a></li>
                                            </ul>
                                        </li> --}}
                                        <li class="dropdown"><a href="/blogs">Blog</a>
                                            {{-- <ul class="submenu">
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-classic.html">Blog Classic</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul> --}}
                                        </li>
                                        <li><a href="/contact">Contact</a></li>
                                    </ul>

                                    <!-- mobile menu -->
                                    <ul class="mobile-menu clearfix">
                                        <li><a href="index-2.html">Home</a></li>
                                        <li class="dropdown"><a href="/about">About Us</a>
                                            {{-- <ul>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="team.html">Our Team</a></li>
                                                <li><a href="faqe.html">Faq Page</a></li>
                                                <li><a href="testimonials.html">Testimonial</a></li>
                                                <li><a href="error.html">Error Page</a></li>
                                            </ul> --}}
                                        </li>
                                        <li class="dropdown"><a href="/services">Services</a>
                                            {{-- <ul>
                                                <li><a href="service.html">Our Service</a></li>
                                                <li><a href="service-details.html">Service Details</a></li>
                                            </ul> --}}
                                        </li>
                                        <li class="dropdown"><a href="/projects">Project</a>
                                            {{-- <ul>
                                                <li><a href="Project1.html">Project Grid</a></li>
                                                <li><a href="Project2.html">Project Grid Filter</a></li>
                                                <li><a href="Project3.html">Project Gallery</a></li>
                                                <li><a href="project-details.html">Project Details</a></li>
                                            </ul> --}}
                                        </li>
                                        {{-- <li class="dropdown"><a href="#">Shop</a>
                                            <ul>
                                                <li><a href="shop.html">Shop Page</a></li>
                                                <li><a href="single-shop.html">Shop Details</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                                <li><a href="login.html">Login Page</a></li>
                                            </ul>
                                        </li> --}}
                                        <li class="dropdown"><a href="/blogs">Blog</a>
                                            {{-- <ul>
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-classic.html">Blog Classic</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul> --}}
                                        </li>
                                        <li><a href="/contact">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                            {{-- <div class="search-box-area">
                                <div class="search-toggle"><i class="fa fa-search"></i></div>
                                <div class="search-box">
                                    <form method="post" action="http://azim.commonsupport.com/Tallent/index.html">
                                        <div class="form-group">
                                            <input type="search" name="search" placeholder="Search Here" required>
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header lower/fixed-header -->

    </header>
    <!-- end main header area -->



    @yield('content')


    <!-- bye now section -->
    <section class="bye-now">
        <div class="container">
            <div class="bye-now-content">
                <div class="title"><h3>We Are The Best Business Consulting Company.</h3></div>
                <div class="button"><a href="#" class="btn-one">PURCHASE NOW</a></div>
            </div>
        </div>
    </section>
    <!-- bye now cection end -->


    <!-- main-footer area -->
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 footer-column">
                    <div class="logo-wideget footer-wideget">
                        <div class="footer-logo">
                            <a href="index-2.html"></a>
                        </div>
                        <div class="text">
                            <p>Tallent consulting over 20 years of experience we’ll ensure you always get the best guidance. We serve a clients at every level of their organization, in whatever capacity we can be most useful, whether as a trusted advisor.</p>
                        </div>
                        <ul class="footer-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12 footer-column">
                    <div class="service-wideget footer-wideget">
                        <div class="footer-title"><h4>OUR SERVICES</h4></div>
                        <ul class="list">
                            <li><a href="#">Startups Help</a></li>
                            <li><a href="#">Customer Insights</a></li>
                            <li><a href="#">Advanced Analytics</a></li>
                            <li><a href="#">Export Promotions</a></li>
                            <li><a href="#">Business Photography</a></li>
                            <li><a href="#">Brand Development</a></li>
                            <li><a href="#">Public Relations</a></li>
                            <li><a href="#">User Infographics</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 footer-column">
                    <div class="news-wideget footer-wideget">
                        <div class="footer-title"><h4>LATEST NEWS</h4></div>
                        <div class="single-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <figure><img src="/assets/images/footer/1.jpg" alt=""></figure>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="blog-details.html"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6><a href="blog-details.html">What Makes A Financial Website</a></h6>
                            <div class="text">24 Jun 2018</div>
                        </div>
                        <div class="single-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <figure><img src="/assets/images/footer/2.jpg" alt=""></figure>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="blog-details.html"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6><a href="blog-details.html">How To Reduce Financial Stress</a></h6>
                            <div class="text">25 Aug 2018</div>
                        </div>
                        <div class="single-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <figure><img src="/assets/images/footer/3.jpg" alt=""></figure>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="blog-details.html"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6><a href="blog-details.html">What Makes A Financial Service</a></h6>
                            <div class="text">10 Sep 2018</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 footer-column">
                    <div class="contact-wideget footer-wideget">
                        <div class="footer-title"><h4>CONTACT US</h4></div>
                        <div class="contact-info">
                            <div class="single-item">
                                <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                                <div class="text"><p>3571 Ringer House, Newyork, NY, 33220 USA</p></div>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="fa fa-phone"></i></div>
                                <div class="text"><p>Phone: +(333) 052 39876</p></div>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="fa fa-envelope"></i></div>
                                <div class="text"><p>Email: info@tallent.com</p></div>
                            </div>
                        </div>
                        <div class="subscribe-area">
                            <div class="footer-title"><h4> Newsletter</h4></div>
                            <div class="input-box">
                                <form action="http://azim.commonsupport.com/Tallent/contact.html" method="post">
                                    <input type="email" name="email" placeholder="Email Address" required="">
                                    <button type="submit"><i class="icon fa fa-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->


    <!-- footer bottom -->
    <section class="footer-bottom">
        <div class="container">
            <div class="copyright">Copyright © <a href="#">Tallent</a> 2018. All rights reserved.</div>
            <ul class="footer-card clearfix">
                <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-stripe"></i></a></li>
            </ul>
        </div>
    </section>
    <!-- footer bottom end -->




<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span></div>


<!--jquery js -->

<!-- jqurey -->
<script type="text/javascript" src="/assets/js/jquery-2.1.4.js"></script>

<!-- Bootstrap js -->
<script src="/assets/js/bootstrap.min.js"></script>

<!-- Style-switcher  -->
<script type="text/javascript" src="/assets/js/jQuery.style.switcher.min.js"></script>

<!-- owl.carousel js -->
<script src="/assets/js/owl.carousel.min.js"></script>

<!-- jQuery ui js -->
<script src="/assets/js/jquery-ui.js"></script>

<!-- jQuery fancybox js -->
<script src="/assets/js/jquery.fancybox.pack.js"></script>

<!-- jQuery wow js -->
<script src="/assets/js/wow.js"></script>

<!-- jQuery contact form js -->
<script src="/assets/js/validation.js"></script>

<!-- jQuery select menu js -->
<script src="/assets/js/bootstrap-select.min.js"></script>

<!-- jQuery smooth scroll js -->
<script type="text/javascript" src="/assets/js/SmoothScroll.js"></script>

<!-- jQuery language switcher js -->
<script src="/assets/js/jquery.polyglot.language.switcher.js"></script>

<!-- jQuery canvas js -->
<script type="text/javascript" src="/assets/js/jquery.canvasjs.min.js"></script>
<script src="/assets/js/charts-script.js"></script>

<!-- js main js-->
<script src="/assets/js/script.js"></script>

@yield('scripts')

<!-- End of .page_wrapper -->
</body>

</html>

