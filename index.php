<?php
	session_start();
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from demo.templaza.com/html/dekor/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Nov 2014 08:25:43 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dekor</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="fonts/awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300,100,200,800" rel="stylesheet" />
    <link href="css/owl.carousel.css" rel="stylesheet" />
    <link href="css/owl.theme.css" rel="stylesheet" />
    <link rel='stylesheet' href='rs-plugin/css/settings.css' />
    <link href="style.css" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    <div class="loading-page">
        <img src="demos/loading.gif" alt="loading">
    </div>
    <header class="tz-header tz-header2">
    <div class="container">
    <h3 class="tz-logo pull-left">
        <a href="index.php">
            <img src="images/logo.png" alt="dekor">
        </a>
    </h3>
    <button data-target=".nav-collapse" class="btn-navbar tz_icon_menu pull-right" type="button">
        <i class="fa fa-bars"></i>
    </button>
    <button class="pull-right tz-search"> <i class="fa fa-search"></i></button>
    <nav class="pull-right">
        <ul class="nav-collapse">
            <li>
                <a href="index.php">HOME</a>
                
            </li>
            <li>
                <a href="#">Features</a>
                <div class="nav-child dropdown-menu mega-dropdown-menu mega-dropdown-center mega-menu-style3">
                    <div class="mega-dropdown-inner">
                        <div class="row">
                            
                            <div data-width="12" class="col-md-12 mega-col-nav">
                                <div class="mega-inner">
                                    <ul class="mega-nav level1">
                                        <li>
                                            <a href="about-us.php">About us</a>
                                        </li>
                                        
                                        <li>
                                            <a href="404-page.php">404 Page</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href=portfolio-grid-4.php>PORTFOLIOS</a>
                
            </li>
            <li>
                <a href="blog-grid-4.php">BLOG</a>
                
            </li>
            <li>
                <a href="#">SHOP</a>
                <div class="nav-child dropdown-menu mega-dropdown-menu">
                    <div class="mega-dropdown-inner">
                        <div class="row">
                            <div data-width="12" class="col-md-12 mega-col-nav">
                                <div class="mega-inner">
                                    <ul class="mega-nav level1">
                                        <li>
                                            <a href="shop-Categories.php">Shop Categories</a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth.php">Shop Full Width</a>
                                        </li>
                                        <li>
                                            <a href="shop-productdetails.php">Shop Detail</a>
                                        </li>
                                        <li>
                                            <a href="shop-Checkout.php">Shop Check out</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li><a href="#"><i class="fas fa-shopping-cart" style="color: white"> My Cart</a></i></li>
            <?php 
				if(empty($_SESSION['user']))
				{		 
			?>
            <li><a href="#"><i class="fas fa-user" style="color: white"></i> Account</a>
                <div class="nav-child dropdown-menu mega-dropdown-menu mega-dropdown-center mega-menu-style3">
                    <div class="mega-dropdown-inner">
                        <div class="row">
                            
                            <div data-width="12" class="col-md-12 mega-col-nav">
                                <div class="mega-inner">
                                    <ul class="mega-nav level1">
                                        <li>
                                            <a href="page-login.php">Login</a>
                                        </li>
                                        
                                        <li>
                                            <a href="page-register.php">Register</a>
                                        </li>
                                        <!--<li>
                                            <a href="page-EditUserProfile.php">Edit User Profile</a>
                                        </li>
                                        <li>
                                            <a href="exit.php">Loguot</a>
                                        </li>-->
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <?php
				}
				else
				{
					$user = $_SESSION['user'];
			?>
            <li><a href="#">ID: <?php echo $user ?></a>
                <div class="nav-child dropdown-menu mega-dropdown-menu mega-dropdown-center mega-menu-style3">
                    <div class="mega-dropdown-inner">
                        <div class="row">
                            
                            <div data-width="12" class="col-md-12 mega-col-nav">
                                <div class="mega-inner">
                                    <ul class="mega-nav level1">
                                        <!--<li>
                                            <a href="page-login.php">Login</a>
                                        </li>
                                        
                                        <li>
                                            <a href="page-register.php">Register</a>
                                        </li>-->
                                        <li>
                                            <a href="page-EditUserProfile.php">Edit User Profile</a>
                                        </li>
                                        <li>
                                            <a href="exit.php">Logout</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <?php } ?>
        </ul>
    </nav>
    </div><!--end class container-->
    <div class="tz-form-search">
        <div class="container">
            <form method="get" action="#">
                <input type="text" placeholder="Search..." name="search" id="tz-search-input" class="tz-search-input">
                <input class="hidden" type="submit" value="Search">
                <i class="fa fa-times tz-form-close"></i>
            </form>
        </div>
    </div><!--end class tz-form-search-->
    </header><!--end class tz-header-->

    <div class="tzslider">
    <div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullscreen-container">
    <div id="rev_slider_2_1" class="rev_slider fullscreenbanner">
    <ul>
    <li data-transition="fade" data-slotamount="7" data-masterspeed="300"  data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" >
        <img src="demos/slider-re1.jpg"  alt="thumb-slider"  data-bgposition="center top" data-bgfit="100% 100%" data-bgrepeat="no-repeat">
        <div class="tp-caption small_light_white sft stt tp-resizeme  tz-title-small"
             data-x="center" data-hoffset="0"
             data-y="center" data-voffset="-110"
             data-speed="900"
             data-start="500"
             data-easing="Quad.easeInOut"
             data-splitin="none"
             data-splitout="none"
             data-elementdelay="0.1"
             data-endelementdelay="0.1"
             data-endspeed="300"
             data-endeasing="Quad.easeOut">take an
        </div>

        <div class="tp-caption large_bold_white sfr str tp-resizeme  tz-title-large"
             data-x="center" data-hoffset="0"
             data-y="center" data-voffset="-40"
             data-speed="900"
             data-start="1000"
             data-easing="Quad.easeOut"
             data-splitin="none"
             data-splitout="none"
             data-elementdelay="0.1"
             data-endelementdelay="0.1"
             data-endspeed="300"
             data-endeasing="Quad.easeOut">Additional
        </div>

        <div class="tp-caption large_bold_white randomrotate randomrotateout tp-resizeme  title-slider-big"
             data-x="center" data-hoffset="0"
             data-y="center" data-voffset="80"
             data-speed="900"
             data-start="1500"
             data-easing="Quad.easeOut"
             data-splitin="none"
             data-splitout="none"
             data-elementdelay="0.1"
             data-endelementdelay="0.1"
             data-endspeed="900"
             data-endeasing="Quad.easeOut">10%OFF
        </div>

        <!-- LAYER NR. 4 -->
        <div class="tp-caption medium_light_white sfb stb tp-resizeme  tz-content-lager"
             data-x="center" data-hoffset="0"
             data-y="center" data-voffset="190"
             data-speed="900"
             data-start="2000"
             data-easing="Quad.easeOut"
             data-splitin="none"
             data-splitout="none"
             data-elementdelay="0.1"
             data-endelementdelay="0.1"
             data-endspeed="300"
             data-endeasing="Quad.easeOut">already discounted items!
        </div>
    </li>
    <!-- SLIDE  -->
    <li data-transition="fade" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
        <!-- MAIN IMAGE -->
        <img src="demos/slider-re2.jpg"  alt="slider"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
        <!-- LAYERS -->

        <!-- LAYER NR. 1 -->
        <div class="tp-caption large_bold_white sft stt tp-resizeme  title-slider"
             data-x="center" data-hoffset="0"
             data-y="center" data-voffset="-70"
             data-speed="900"
             data-start="500"
             data-easing="Quad.easeIn"
             data-splitin="none"
             data-splitout="none"
             data-elementdelay="0.1"
             data-endelementdelay="0.1"
             data-endspeed="300"
             data-endeasing="Quad.easeIn">HOME DECORATION
        </div>

        <!-- LAYER NR. 2 -->
        <div class="tp-caption small_light_white sfl stl tp-resizeme  content-slider"
             data-x="center" data-hoffset="0"
             data-y="center" data-voffset="30"
             data-speed="900"
             data-start="700"
             data-easing="Power4.easeOut"
             data-splitin="words"
             data-splitout="none"
             data-elementdelay="0.1"
             data-endelementdelay="0.1"
             data-endspeed="300"
             data-endeasing="Cubic.easeIn">The Best Home Decoration Store
        </div>

        <!-- LAYER NR. 3 -->
        <div class="tp-caption small_light_white sfb stb tp-resizeme"
             data-x="center" data-hoffset="0"
             data-y="center" data-voffset="100"
             data-speed="900"
             data-start="500"
             data-easing="Quad.easeIn"
             data-splitin="none"
             data-splitout="none"
             data-elementdelay="0.1"
             data-endelementdelay="0.1"
             data-endspeed="300"
             data-endeasing="Power4.easeInOut"><a  href="#" class="learn-more-styl2"><span>LEARN MORE</span></a>
        </div>
    </li>
    <!-- SLIDE  -->
    <li data-transition="fade" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
        <!-- MAIN IMAGE -->
        <img src="demos/slider-re3.jpg"  alt="slider4"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
        <!-- LAYERS -->

        <!-- LAYER NR. 1 -->
        <div class="tp-caption small_light_white sft tp-resizeme  slider-attach"
             data-x="center" data-hoffset="0"
             data-y="center" data-voffset="-100"
             data-speed="1100"
             data-start="500"
             data-easing="Power3.easeInOut"
             data-splitin="none"
             data-splitout="none"
             data-elementdelay="0.1"
             data-endelementdelay="0.1"
             data-endspeed="300">FINAL SALE
        </div>

        <!-- LAYER NR. 2 -->
        <div class="tp-caption large_bold_white sfb tp-resizeme  title-slider-blod"
             data-x="center" data-hoffset="0"
             data-y="center" data-voffset="-40"
             data-speed="900"
             data-start="500"
             data-easing="Power0.easeOut"
             data-splitin="none"
             data-splitout="none"
             data-elementdelay="0.1"
             data-endelementdelay="0.1"
             data-endspeed="300">DEKOR CATALOGUES
        </div>

        <!-- LAYER NR. 3 -->
        <div class="tp-caption skewfromright"
             data-x="center" data-hoffset="0"
             data-y="center" data-voffset="10"
             data-speed="1000"
             data-start="500"
             data-easing="Power3.easeInOut"
             data-elementdelay="0.1"
             data-endelementdelay="0.1"
             data-endspeed="300"><img src="demos/Line_slider.jpg" alt="">
        </div>

        <!-- LAYER NR. 4 -->
        <div class="tp-caption small_light_white randomrotate tp-resizeme  slider-ds"
             data-x="center" data-hoffset="0"
             data-y="center" data-voffset="60"
             data-speed="1100"
             data-start="500"
             data-easing="Power3.easeInOut"
             data-splitin="none"
             data-splitout="none"
             data-elementdelay="0.1"
             data-endelementdelay="0.1"
             data-endspeed="300">ADDITIONAL 10% OFF DISCOUNTED ITEMS
        </div>

        <!-- LAYER NR. 5 -->
        <div class="tp-caption black sfb tp-resizeme"
             data-x="center" data-hoffset="0"
             data-y="center" data-voffset="125"
             data-speed="1100"
             data-start="500"
             data-easing="Power3.easeInOut"
             data-splitin="none"
             data-splitout="none"
             data-elementdelay="0.1"
             data-endelementdelay="0.1"
             data-endspeed="300"><a class="slider-button2"  href="#"><span>SHOP NOW</span></a>
        </div>
    </li>
    <!-- SLIDE  -->
    <li data-transition="fade" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
        <!-- MAIN IMAGE -->
        <img src="demos/slider-re4.jpg"  alt="slider3"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
        <!-- LAYERS -->

        <!-- LAYER NR. 1 -->
        <div class="tp-caption large_bold_white sft stt tp-resizeme  title-slider"
             data-x="center" data-hoffset="0"
             data-y="center" data-voffset="-70"
             data-speed="900"
             data-start="500"
             data-easing="Quad.easeIn"
             data-splitin="none"
             data-splitout="none"
             data-elementdelay="0.1"
             data-endelementdelay="0.1"
             data-endspeed="300"
             data-endeasing="Quad.easeIn">HOME DECORATION
        </div>

        <!-- LAYER NR. 2 -->
        <div class="tp-caption small_light_white sfl stl tp-resizeme  content-slider"
             data-x="center" data-hoffset="0"
             data-y="center" data-voffset="30"
             data-speed="900"
             data-start="700"
             data-easing="Power4.easeOut"
             data-splitin="words"
             data-splitout="none"
             data-elementdelay="0.1"
             data-endelementdelay="0.1"
             data-endspeed="300"
             data-endeasing="Cubic.easeIn">The Best Home Decoration Store
        </div>

        <!-- LAYER NR. 3 -->
        <div class="tp-caption small_light_white sfb stb tp-resizeme"
             data-x="center" data-hoffset="0"
             data-y="center" data-voffset="100"
             data-speed="900"
             data-start="500"
             data-easing="Quad.easeIn"
             data-splitin="none"
             data-splitout="none"
             data-elementdelay="0.1"
             data-endelementdelay="0.1"
             data-endspeed="300"
             data-endeasing="Power4.easeInOut"><a  href="#" class="learn-more-styl2"><span>LEARN MORE</span></a>
        </div>
    </li>
    </ul>
    </div>
    </div>
    </div><!--end class tzslider-->

    <section class="tz-introduce theme-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <iframe class="iframe-full" src="music/tinhanh.mp4" autoplay></iframe>
                   <!-- <iframe class="iframe-full"><video src="music/tinhanh.mp4" autoplay></video></iframe> -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h2 class="tz-title-1">Hello! We’re DeKok</h2>
                    <div class="tz-introduce-content">
                        <p>
                            Earlier this year we gave ourselves a challenge: to re-imagine the traditional approach to packaging coffee and create something that we could share with our clients and friends - and so, Wishbone Brew was born.
                        </p>
                        <p>
                            Share with our clients and friends - and so, Wishbone Brew was born.
                        </p>
                    </div>
                    <a  href="about-us.php" class="tz-view-more">
                        <span>READ MORE</span>
                    </a>
                </div>
            </div><!--end class row-->
        </div><!--end class container-->
    </section><!--end class tz-introduce-->

    <section class="tz-about theme-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 colg-md-4 col-sm-12 col-xs-12">
                    <div class="tz-about-item">
                        <img src="demos/flask.png" alt="flask">
                        <div class="tz-about-ds">
                            <h6>WE’RE PROFESSIONAL</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac tempus eros, non tempus massa. Vivamus ut nisl mauris. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 colg-md-4 col-sm-12 col-xs-12">
                    <div class="tz-about-item">
                        <img src="demos/thumnbup.png" alt="thumnbup">
                        <div class="tz-about-ds">
                            <h6>WE’RE PASSIONATE</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac tempus eros, non tempus massa. Vivamus ut nisl mauris. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 colg-md-4 col-sm-12 col-xs-12">
                    <div class="tz-about-item">
                        <img src="demos/thumb.png" alt="thumb">
                        <div class="tz-about-ds">
                            <h6>WE’RE FRIENDLY</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac tempus eros, non tempus massa. Vivamus ut nisl mauris. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--end class tz-about-->

    <section class="tz-why-choose">
        <h3 class="tz-title-2">
            <span>WHY CHOOSE OUR PRODUCT ?</span>
        </h3>
        <div class="tz-choose-content parallax parallax_bk4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 colg-md-4 col-sm-4 col-xs-12">
                        <ul class="tz-collection-default">
                            <li>
                                <figure class="item-collection">
                                        <span class="tzcollection-icon tz-background1">
                                            <i class="fa fa-level-down"></i>
                                        </span>
                                    <figcaption>
                                        <h6>Section Header</h6>
                                        <p>DEKOR is fully responsive and perfectly fits on any device.</p>
                                    </figcaption>
                                </figure>
                            </li>

                            <li>
                                <figure class="item-collection">
                                        <span class="tzcollection-icon tz-background2">
                                            <i class="fa fa-refresh"></i>
                                        </span>
                                    <figcaption>
                                        <h6>Font Awesome Icons</h6>
                                        <p>DEKOR is fully responsive and perfectly fits on any device.</p>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 colg-md-4 col-sm-4 col-xs-12">
                        <ul class="tz-collection-default">
                            <li>
                                <figure class="item-collection">
                                        <span class="tzcollection-icon tz-background3">
                                            <i class="fa fa-exchange"></i>
                                        </span>
                                    <figcaption>
                                        <h6>Dummy Content</h6>
                                        <p>DEKOR is fully responsive and perfectly fits on any device.</p>
                                    </figcaption>
                                </figure>
                            </li>

                            <li>
                                <figure class="item-collection">
                                        <span class="tzcollection-icon tz-background1">
                                            <i class="fa fa-lightbulb-o"></i>
                                        </span>
                                    <figcaption>
                                        <h6>Clean Code</h6>
                                        <p>DEKOR is fully responsive and perfectly fits on any device.</p>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 colg-md-4 col-sm-4 col-xs-12">
                        <ul class="tz-collection-default">
                            <li>
                                <figure class="item-collection">
                                        <span class="tzcollection-icon tz-background2">
                                            <i class="fa fa-cog"></i>
                                        </span>
                                    <figcaption>
                                        <h6>Responsive</h6>
                                        <p>DEKOR is fully responsive and perfectly fits on any device.</p>
                                    </figcaption>
                                </figure>
                            </li>

                            <li>
                                <figure class="item-collection">
                                        <span class="tzcollection-icon tz-background3">
                                            <i class="fa fa-gamepad"></i>
                                        </span>
                                    <figcaption>
                                        <h6>Parallax Sections</h6>
                                        <p>DEKOR is fully responsive and perfectly fits on any device.</p>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                    </div>
                </div><!--end class row-->
            </div><!--end class container-->
        </div><!--end class parallax-->
    </section><!--end class tz-why-choose-->

    <section class="tz-lastest-shop theme-white">
        <h3 class="tz-title-3">
            LASTEST FROM SHOP
        </h3>
        <div class="container">
            <div class="row">
				<?php 
					include('function_prod.php');
					$run = prod_limit(4);
					while($row = mysqli_fetch_array($run))
					{
				?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 laster-shop-item">
                    <div class="laster-thumb">
                        <img src="demos/<?php echo $row['picture'] ?>" alt="<?php echo $row['p_Name'] ?>">
                            <span class="tz-shop-meta">
                                <a href="shop-productdetails.php?id=<?php echo $row['p_ID']?>" class="tzshopping">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a href="#" class="tzheart">
                                    <i class="fa fa-heart"></i>
                                </a>
                                <a href="#" class="tztasks">
                                    <i class="fa fa-tasks"></i>
                                </a>
                            </span>
                    </div>
                    <h6><a href="shop-productdetails.php?id=<?php echo $row['p_ID'] ?>"><?php echo $row['p_Name'] ?></a></h6>
                    <small>$<?php echo $row['price']?> </small>
                </div>
            <?php } ?>
            </div>
            <a href="shop-fullwidth.php" class="tz-view-more2 tz-view-style2">
                <span>LOAD MORE</span>
            </a>
        </div><!--end class container-->
    </section><!--end class tz-lastest-shop-->

    <section class="tz-award parallax">
        <button class="award_prev"><i class="fa fa-angle-left"></i></button>
        <button class="award_next"><i class="fa fa-angle-right "></i></button>
        <div class="container">
            <ul class="tz-award-slider">
                <li>
                    <h6>- DeKor Talent Award - </h6>
                    <span>SHARED FIRST PRIZE IN DEKOK TALEN AWARD</span>
                </li>
                <li>
                    <h6>- DeKor Talent Award - </h6>
                    <span>SHARED FIRST PRIZE IN DEKOK TALEN AWARD</span>
                </li>
                <li>
                    <h6>- DeKor Talent Award - </h6>
                    <span>SHARED FIRST PRIZE IN DEKOK TALEN AWARD</span>
                </li>
                <li>
                    <h6>- DeKor Talent Award - </h6>
                    <span>SHARED FIRST PRIZE IN DEKOK TALEN AWARD</span>
                </li>
            </ul>
        </div><!--end class container-->
    </section><!--end class tz-award-->

    <section class="tz-portfolio">
        <h3 class="tz-title-4">
            <span>OUR RECENT WORKS</span>
        </h3>
        <div class="tz-portfolio-content">
            <figure class="element tz-landscape">
                <img src="demos/portfolio/p1.jpg" alt="Laptop Desk">
                <figcaption>
                    <h6><a href="single-portfolio-full-width-slider.php">Laptop Desk</a></h6>
                    <a class="tz-cat" href="single-portfolio-full-width-slider.php">Accessories</a>
                </figcaption>
            </figure>
            <figure class="element">
                <img src="demos/portfolio/p2.jpg" alt="Villa Parsons Chair">
                <figcaption>
                    <h6><a href="single-portfolio-full-width-slider.php">Villa Parsons Chair</a></h6>
                    <a class="tz-cat" href="single-portfolio-full-width-slider.php">Accessories</a>
                </figcaption>
            </figure>
            <figure class="element tz-portrait">
                <img src="demos/portfolio/p3.jpg" alt="Built-In Bathroom ">
                <figcaption>
                    <h6><a href="single-portfolio-full-width-slider.php">Built-In Bathroom </a></h6>
                    <a class="tz-cat" href="single-portfolio-full-width-slider.php">Accessories</a>
                </figcaption>
            </figure>
            <figure class="element tz-portrait">
                <img src="demos/portfolio/p4.jpg" alt="Fibonacci lamp">
                <figcaption>
                    <h6><a href="single-portfolio-full-width-slider.php">Fibonacci lamp</a></h6>
                    <a class="tz-cat" href="single-portfolio-full-width-slider.php">Accessories</a>
                </figcaption>
            </figure>
            <figure class="element">
                <img src="demos/portfolio/p5.jpg" alt="Sanford Metal Bed">
                <figcaption>
                    <h6><a href="single-portfolio-full-width-slider.php">Sanford Metal Bed</a></h6>
                    <a class="tz-cat" href="single-portfolio-full-width-slider.php">Accessories</a>
                </figcaption>
            </figure>
            <figure class="element">
                <img src="demos/portfolio/p6.jpg" alt="Ulani Adirondack">
                <figcaption>
                    <h6><a href="single-portfolio-full-width-slider.php">Ulani Adirondack </a></h6>
                    <a class="tz-cat" href="single-portfolio-full-width-slider.php">Accessories</a>
                </figcaption>
            </figure>
            <figure class="element">
                <img src="demos/portfolio/p7.jpg" alt="Matinee Parsons">
                <figcaption>
                    <h6><a href="single-portfolio-full-width-slider.php">Matinee Parsons </a></h6>
                    <a class="tz-cat" href="single-portfolio-full-width-slider.php">Accessories</a>
                </figcaption>
            </figure>
            <figure class="element">
                <img src="demos/portfolio/p2.jpg" alt="Wall Leaning">
                <figcaption>
                    <h6><a href="single-portfolio-full-width-slider.php">Wall Leaning</a></h6>
                    <a class="tz-cat" href="single-portfolio-full-width-slider.php">Accessories</a>
                </figcaption>
            </figure>
            <figure class="element">
                <img src="demos/portfolio/p5.jpg" alt="Dorado Office Chair ">
                <figcaption>
                    <h6><a href="single-portfolio-full-width-slider.php">Dorado Office Chair </a></h6>
                    <a class="tz-cat" href="single-portfolio-full-width-slider.php">Accessories</a>
                </figcaption>
            </figure>
        </div><!--end class tz-portfolio-content-->
    </section><!--end class tz-portfolio-->

    <section class="tz-our-blog theme-white">
        <h3 class="tz-title-3">FROM OUR BLOG</h3>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="our-blog-item">
                        <div class="blog-thumb">
                            <img src="demos/blog/b1.jpg" alt="WE MAKING BRANDS SHINE">
                        </div>
                        <h6>WE MAKING BRANDS SHINE</h6>
                        <div class="our-blog-ds">
                            <div class="our-blog-bk">
                                <div class="entry-ourblog">
                                    <h6><a href="#">WE MAKING YOUR BRAND SHINE</a></h6>
                                         <span class="createby">
                                             Posted by <a href="#">Dekok</a>
                                         </span>
                                    <p>
                                        Earlier this year we gave ourselves a challenge:  to packaging coffee and create something that we could share with our clients and friends - and so, Wishbone Brew was born.
                                    </p>
                                    <p>
                                        the traditional approach to packaging coffee and create something.
                                    </p>
                                    <a class="tz-readmore" href="#">READ MORE <i class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="our-blog-item">
                        <div class="blog-thumb">
                            <img src="demos/blog/b2.jpg" alt="WE MAKING BRANDS SHINE">
                            <button class="tz-icon-video"></button>
                        </div>
                        <h6>WE MAKING BRANDS SHINE</h6>
                        <div class="our-blog-ds">
                            <div class="our-blog-bk">
                                <div class="entry-ourblog">
                                    <h6><a href="#">WE MAKING YOUR BRAND SHINE</a></h6>
                                         <span class="createby">
                                             Posted by <a href="#">Dekok</a>
                                         </span>
                                    <p>
                                        Earlier this year we gave ourselves a challenge:  to packaging coffee and create something that we could share with our clients and friends - and so, Wishbone Brew was born.
                                    </p>
                                    <p>
                                        the traditional approach to packaging coffee and create something.
                                    </p>
                                    <a class="tz-readmore" href="#">READ MORE <i class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="our-blog-item">
                        <div class="blog-thumb">
                            <img src="demos/blog/b1.jpg" alt="WE MAKING BRANDS SHINE">
                        </div>
                        <h6>WE MAKING BRANDS SHINE</h6>
                        <div class="our-blog-ds">
                            <div class="our-blog-bk">
                                <div class="entry-ourblog">
                                    <h6><a href="#">WE MAKING YOUR BRAND SHINE</a></h6>
                                         <span class="createby">
                                             Posted by <a href="#">Dekok</a>
                                         </span>
                                    <p>
                                        Earlier this year we gave ourselves a challenge:  to packaging coffee and create something that we could share with our clients and friends - and so, Wishbone Brew was born.
                                    </p>
                                    <p>
                                        the traditional approach to packaging coffee and create something.
                                    </p>
                                    <a class="tz-readmore" href="#">READ MORE <i class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end class row-->
            <a href="blog-fullwidth.php" class="tz-view-more2 tz-view-style2"><span>LOAD MORE</span></a>
        </div><!--end class container-->
    </section><!--end class tz-our-blog-->

    <div class="tz-partner theme-gray">
        <div class="container">
            <ul class="partner-slider">
                <li>
                    <img src="demos/partler4.png" alt="partler4">
                </li>
                <li>
                    <img src="demos/partler3.png" alt="partler3">
                </li>
                <li>
                    <img src="demos/partler1.png" alt="partler1">
                </li>
                <li>
                    <img src="demos/partler2.png" alt="partler2">
                </li>
                <li>
                    <img src="demos/partler5.png" alt="partler5">
                </li>
                <li>
                    <img src="demos/partler6.png" alt="partler6">
                </li>
                <li>
                    <img src="demos/partler3.png" alt="partler3">
                </li>
                <li>
                    <img src="demos/partler4.png" alt="partler4">
                </li>
                <li>
                    <img src="demos/partler1.png" alt="partler1">
                </li>
                <li>
                    <img src="demos/partler2.png" alt="partler2">
                </li>
                <li>
                    <img src="demos/partler5.png" alt="partler5">
                </li>
                <li>
                    <img src="demos/partler6.png" alt="partler6">
                </li>
            </ul>
        </div><!--end container-->
    </div><!--end class partner-->

    <footer>
        <div class="tz-footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-item">
                        <h3 class="module-title">
                                <span>
                                    ABOUT
                                </span>
                        </h3>
                        <div class="textwidget">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis mollis tellus, et ullamcorper velit.
                            Curabitur lobortis bibendum tincidunt. Nullam eget ultrices quam. Morbi vestibulum nec diam ac hendrerit.
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-item">
                        <h3 class="module-title">
                                <span>
                                    CONTACT
                                </span>
                        </h3>
                        <div class="tzwidget-contact">
                            <address>
                                No.200 Joseph Road, Canada
                            </address>
                                <span>
                                     +44 (0) 800 765 4321
                                </span>
                            <a href="#">info@templaza.com</a>
                                <span class="tzwidget-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-item">
                        <h3 class="module-title">
                                <span>
                                    RECENT POSTS
                                </span>
                        </h3>
                        <ul class="tz-recent-post">
                            <li>
                                <img src="demos/last-1.jpg" alt="recent post">
                                <div class="tz-recent-content">
                                    <a href="#">Lorem ipsum dolor sit amet.</a>
                                        <span>
                                            Jul 24, 2014
                                        </span>
                                </div>
                            </li>
                            <li>
                                <img src="demos/last-12.jpg" alt="recent post">
                                <div class="tz-recent-content">
                                    <a href="#">Donec quam eros, bibendum sed egestas ...</a>
                                        <span>
                                            Jul 24, 2014
                                        </span>
                                </div>
                            </li>
                            <li>
                                <img src="demos/last-3.jpg" alt="recent post">
                                <div class="tz-recent-content">
                                    <a href="#">Sit amet varius quam.</a>
                                        <span>
                                            Jul 24, 2014
                                        </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-item">
                        <h3 class="module-title">
                                <span>
                                    RECENT PROJECTS
                                </span>
                        </h3>
                        <ul class="tz-recent-porjects">
                            <li>
                                <a href="single-portfolio-gallery.php">
                                    <img src="demos/pro1.jpg" alt="projects">
                                </a>
                            </li>
                            <li>
                                <a href="single-portfolio-gallery.php">
                                    <img src="demos/pro2.jpg" alt="projects 2">
                                </a>
                            </li>
                            <li>
                                <a href="single-portfolio-gallery.php">
                                    <img src="demos/pro3.jpg" alt="projects 3">
                                </a>
                            </li>
                            <li>
                                <a href="single-portfolio-gallery.php">
                                    <img src="demos/pro4.jpg" alt="projects 4">
                                </a>
                            </li>
                            <li>
                                <a href="single-portfolio-gallery.php">
                                    <img src="demos/pro5.jpg" alt="projects 5">
                                </a>
                            </li>
                            <li>
                                <a href="single-portfolio-gallery.php">
                                    <img src="demos/pro6.jpg" alt="projects 6">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tz-copyright theme-white">
            <p>copy 2014 Dekor Design, INC. All Rights Reserved.</p>
        </div>
    </footer><!--end class tz-footer-->

    <script src="js/jquery.min.js"></script>
    <script>
        jQuery.noConflict();
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/resize.js"></script>
    <script src="js/off-canvas.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/custom-portfolio.js"></script>
    <script src="js/custom.js"></script>
    <script type='text/javascript' src='rs-plugin/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='rs-plugin/js/jquery.themepunch.revolution.min.js'></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#rev_slider_2_1').show().revolution(
                    {
                        dottedOverlay:"none",
                        delay:6000,
                        startwidth:960,
                        startheight:350,
                        hideThumbs:200,

                        thumbWidth:100,
                        thumbHeight:50,
                        thumbAmount:4,

                        navigationType:"none",
                        navigationArrows:"solo",
                        navigationStyle:"round",

                        touchenabled:"on",
                        onHoverStop:"on",

                        swipe_velocity: 0.7,
                        swipe_min_touches: 1,
                        swipe_max_touches: 1,
                        drag_block_vertical: false,


                        keyboardNavigation:"off",

                        navigationHAlign:"center",
                        navigationVAlign:"bottom",
                        navigationHOffset:0,
                        navigationVOffset:20,

                        soloArrowLeftHalign:"left",
                        soloArrowLeftValign:"center",
                        soloArrowLeftHOffset:20,
                        soloArrowLeftVOffset:0,

                        soloArrowRightHalign:"right",
                        soloArrowRightValign:"center",
                        soloArrowRightHOffset:20,
                        soloArrowRightVOffset:0,

                        shadow:0,
                        fullWidth:"off",
                        fullScreen:"on",

                        spinner:"spinner0",

                        stopLoop:"off",
                        stopAfterLoops:-1,
                        stopAtSlide:-1,

                        shuffle:"off",


                        forceFullWidth:"off",
                        fullScreenAlignForce:"off",
                        minFullScreenHeight:"",
                        hideTimerBar:"on",
                        hideThumbsOnMobile:"off",
                        hideNavDelayOnMobile:1500,
                        hideBulletsOnMobile:"off",
                        hideArrowsOnMobile:"off",
                        hideThumbsUnderResolution:0,

                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "",
                        hideSliderAtLimit:0,
                        hideCaptionAtLimit:0,
                        hideAllCaptionAtLilmit:0,
                        startWithSlide:0
                    });
        });	/*ready*/


        var Desktop           =   4,
                tabletportrait    =   2,
                mobilelandscape   =   2,
                mobileportrait    =   1,
                resizeTimer       =   null;

        jQuery(window).load(function(){
            jQuery('div.slotholder').prepend('<div class="bk-responsive-slide"></div>');
        })
    </script>
</body>

<!-- Mirrored from demo.templaza.com/php/dekor/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Nov 2014 08:29:31 GMT -->
</html>