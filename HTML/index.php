<!DOCTYPE html>
<!-- ==============================
    Project:        Metronic "Asentus" Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
    Version:        1.0
    Author:         KeenThemes
    Primary use:    Corporate, Business Themes.
    Email:          support@keenthemes.com
    Follow:         http://www.twitter.com/keenthemes
    Like:           http://www.facebook.com/keenthemes
    Website:        http://www.keenthemes.com
    Premium:        Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
================================== -->
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Metronic "Asentus" Frontend Freebie</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>
        <?php
        require_once "db.php";
        ?>
        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="index.html">
                                <img class="logo-img logo-img-main" src="img/logo.png" alt="Asentus Logo">
                                <img class="logo-img logo-img-active" src="img/logo-dark.png" alt="Asentus Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item"><a class="nav-item-child nav-item-hover active" href="index.php">Home</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="pricing.html">Pricing</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="about.html">About</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="products.php">Products</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="faq.html">FAQ</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="container">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
            </div>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-responsive" src="img/1920x1080/01.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title">Hi-Tech Design</h1>
                                <p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore</p>
                            </div>
                            <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="img/1920x1080/02.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title">Hi-Tech Design</h2>
                                <p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore</p>
                            </div>
                            <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Service -->
        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-lg container">
                <div class="row row-space-1 margin-b-2">
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-chemistry"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Art Of Coding</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-screen-tablet"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Responsive Design</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-badge"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Feature Reach</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                </div>
                <!--// end row -->

                <div class="row row-space-1">
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".4s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-notebook"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Useful Documentation</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-speedometer"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Fast Delivery</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".6s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-badge"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Free Plugins</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Service -->

        <!-- Latest Products -->
        <div class="content-lg container">
            <div class="row margin-b-40">
                <div class="col-sm-6">
                    <h2>Latest Products</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <!-- Latest Products -->
                <?php 
                $query = "SELECT * FROM `products` ORDER BY `id` DESC LIMIT 3";
                $data = mysqli_query($db_server, $query);
                if (!$data) die ("Сбой при доступе к БД: " . mysqli_error($db_server));
                if(mysqli_num_rows($data) > 0){
                    while($item = mysqli_fetch_array($data, MYSQLI_ASSOC)){
                        echo 
                        "<!-- Latest Products -->".
                        "<div class='col-sm-4 sm-margin-b-50'>".
                            "<div class='margin-b-20'>".
                                "<div class='wow zoomIn' data-wow-duration='.3' data-wow-delay='.1s'>".
                                    "<img class='img-responsive' src=img/970x647/$item[img] alt='Latest Products Image'>".
                                "</div>".
                            "</div>".
                            "<h4><a href='$item[page]'>$item[title]</a> <span class='text-uppercase margin-l-20'>$item[type]</span></h4>".
                            "<p>$item[description]</p>".
                        "<a class='link' href=$item[page]>Read More</a>".
                        "</div>".
                        "<!-- End Latest Products -->";
                    }
                }
                ?>                       
            </div>
            <!--// end row -->
        </div>
        <!-- End Latest Products -->

        <!-- Clients -->
        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <!-- Swiper Clients -->
                <div class="swiper-slider swiper-clients">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/clients/01.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/clients/02.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/clients/03.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/clients/04.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/clients/05.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/clients/06.png" alt="Clients Logo">
                        </div>
                    </div>
                    <!-- End Swiper Wrapper -->
                </div>
                <!-- End Swiper Clients -->
            </div>
        </div>
        <!-- End Clients -->

        <!-- Testimonials -->
        <div class="content-lg container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Customer Reviews</h2>

                    <!-- Swiper Testimonials -->
                    <div class="swiper-slider swiper-testimonials">
                        <!-- Swiper Wrapper -->
                        <div class="swiper-wrapper">
                            <?php
                            $query = "SELECT * FROM `feedbacks` ORDER BY `id` DESC LIMIT 5";
                            $data = mysqli_query($db_server, $query);
                            while($item = mysqli_fetch_array($data, MYSQLI_ASSOC)){
                                $text_array = explode('.', $item["text"]);
                                $text_part_1 = "";
                                $text_part_2 = "";
                                for($index = 0; $index < count($text_array); $index++){
                                    if(strlen($text_part_1) < 200){
                                        $text_part_1 = $text_part_1.$text_array[$index].".";
                                    }
                                    else{
                                        $text_part_2 = $text_part_2.$text_array[$index];
                                    }
                                }
                                echo
                                '<div class="swiper-slide">
                                    <blockquote class="blockquote">
                                        <div class="margin-b-20">'.
                                            $text_part_1.
                                        '</div>
                                        <div class="margin-b-20">'.
                                            $text_part_2.
                                        '</div>
                                        <p><span class="fweight-700 color-link">'.$item['name'].'</span>, '.$item['client'].'</p>
                                    </blockquote>
                                </div>';
                            }
                            ?>
                        </div>
                        <!-- End Swiper Wrapper -->

                        <!-- Pagination -->
                        <div class="swiper-testimonials-pagination"></div>
                    </div>
                    <!-- End Swiper Testimonials -->
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End Testimonials -->

        <!-- Pricing -->
        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <div class="row row-space-1">
                    <div class="col-sm-4 sm-margin-b-2">
                        <!-- Pricing -->
                        <div class="pricing">
                            <div class="margin-b-30">
                                <i class="pricing-icon icon-chemistry"></i>
                                <h3>Starter Kit <span> - $</span> 49</h3>
                                <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                            </div>
                            <ul class="list-unstyled pricing-list margin-b-50">
                                <li class="pricing-list-item">Basic Features</li>
                                <li class="pricing-list-item">Up to 5 products</li>
                                <li class="pricing-list-item">50 Users Panels</li>
                            </ul>
                            <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                        </div>
                        <!-- End Pricing -->
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <!-- Pricing -->
                        <div class="pricing pricing-active">
                            <div class="margin-b-30">
                                <i class="pricing-icon icon-badge"></i>
                                <h3>Professional <span> - $</span> 149</h3>
                                <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                            </div>
                            <ul class="list-unstyled pricing-list margin-b-50">
                                <li class="pricing-list-item">Basic Features</li>
                                <li class="pricing-list-item">Up to 100 products</li>
                                <li class="pricing-list-item">100 Users Panels</li>
                            </ul>
                            <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                        </div>
                        <!-- End Pricing -->
                    </div>
                    <div class="col-sm-4">
                        <!-- Pricing -->
                        <div class="pricing">
                            <div class="margin-b-30">
                                <i class="pricing-icon icon-shield"></i>
                                <h3>Advanced <span> - $</span> 249</h3>
                                <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                            </div>
                            <ul class="list-unstyled pricing-list margin-b-50">
                                <li class="pricing-list-item">Extended Features</li>
                                <li class="pricing-list-item">Unlimited products</li>
                                <li class="pricing-list-item">Unlimited Users Panels</li>
                            </ul>
                            <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                        </div>
                        <!-- End Pricing -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Pricing -->

        <!-- Promo Section -->
        <div class="promo-section overflow-h">
            <div class="container">
                <div class="clearfix">
                    <div class="ver-center">
                        <div class="ver-center-aligned">
                            <div class="promo-section-col">
                                <h2>Our Clients</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
                                <p>Ipsum dolor sit amet consectetur adipiscing elit sed tempor incididut ut sead laboret dolore magna aliqua enim minim veniam exercitation ipsum dolor sit amet consectetur adipiscing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo-section-img-right">
                <img class="img-responsive" src="img/970x970/01.jpg" alt="Content Image">
            </div>
        </div>
        <!-- End Promo Section -->

        <!-- Work -->
        <div class="bg-color-sky-light overflow-h">
            <div class="content-lg container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Showcase</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
                    </div>
                </div>
                <!--// end row -->

                <!-- Masonry Grid -->
                <div class="masonry-grid">
                    <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/800x400/01.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Art Of Coding</h3>
                                <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                            </div>
                            <a class="content-wrapper-link" href="#"></a>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/01.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Clean Design</h3>
                                <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                            </div>
                            <a class="content-wrapper-link" href="#"></a>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x300/01.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Clean Design</h3>
                                <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                            </div>
                            <a class="content-wrapper-link" href="#"></a>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".4s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x300/02.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Clean Design</h3>
                                <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                            </div>
                            <a class="content-wrapper-link" href="#"></a>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".5s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x300/03.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Clean Design</h3>
                                <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                            </div>
                            <a class="content-wrapper-link" href="#"></a>
                        </div>
                        <!-- End Work -->
                    </div>
                </div>
                <!-- End Masonry Grid -->
            </div>
        </div>
        <!-- End Work -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Links -->
            <div class="footer-seperator">
                <div class="content-lg container">
                    <div class="row">
                        <div class="col-sm-2 sm-margin-b-50">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Home</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">About</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Products</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Pricing</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Clients</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Careers</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Contact</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Terms</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-4 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Twitter</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Facebook</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Instagram</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">YouTube</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-5 sm-margin-b-30">
                            <h2 class="color-white">Send Us A Note</h2>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Name" required>
                            <input type="email" class="form-control footer-input margin-b-20" placeholder="Email" required>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Phone" required>
                            <textarea class="form-control footer-input margin-b-30" rows="6" placeholder="Message" required></textarea>
                            <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Submit</button>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="img/logo.png" alt="Asentus Logo">
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0"><a class="color-base fweight-700" href="http://keenthemes.com/preview/asentus/">Asentus</a> Theme Powered by: <a class="color-base fweight-700" href="http://www.keenthemes.com/">KeenThemes.com</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="js/components/masonry.min.js" type="text/javascript"></script>

        <?php
        mysqli_close($db_server);
        ?>
    </body>
    <!-- END BODY -->
</html>