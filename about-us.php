<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from demo.templaza.com/html/dekor/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Nov 2014 08:36:24 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dekor - About us</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="fonts/awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300,100,200,800" rel="stylesheet" />
    <link href="css/owl.carousel.css" rel="stylesheet" />
    <link href="css/owl.theme.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Support for HTML5 -->
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Enable media queries on older bgeneral_rowsers -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link href="style.css" rel="stylesheet" />
</head>
<body>
    <div class="loading-page">
        <img src="demos/loading.gif" alt="loading">
    </div>
    <header class="tz-header tz-header3 theme-white">
        <div class="container">
            <h3 class="tz-logo pull-left">
                <a href="index.php">
                    <img src="demos/logo2.png" alt="dekor">
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
            <li><a href="#"><i class="fas fa-shopping-cart"> My Cart</a></i></li>
            <?php 
                if(empty($_SESSION['user']))
                {        
            ?>
            <li><a href="#"><i class="fas fa-user" ></i> Account</a>
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

    <section class="tzheader-background">
        <img src="demos/aboutus.jpg" alt="We Are Shinning On Woods">
        <h1 class="about-title">
            <span>We Are Shinning On Woods</span>
        </h1>
    </section><!--end class tzpages-->

    <section class="tz-about4 theme-white tz-about4-padding">
        <h3 class="tz-title-bold-3">
            OUR FEATURES
        </h3>
        <div class="container top-padding">
            <div class="row">
                <div class="col-lg-4 colg-md-4 col-sm-6 col-xs-12">
                    <ul class="tz-collection collection-left tz-collection2 no-padding">
                        <li>
                            <figure class="item-collection">
                                <img src="demos/item-collection5.png" alt="responsive">
                                <figcaption>
                                    <h6>Responsive</h6>
                                    <p>DEKOR is fully responsive and perfectly fits on any device.</p>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 colg-md-4 col-sm-6 col-xs-12">
                    <ul class="tz-collection collection-left tz-collection2 no-padding">
                        <li>
                            <figure class="item-collection">
                                <img src="demos/item-collection7.png" alt="parallax sections">
                                <figcaption>
                                    <h6>Parallax Sections</h6>
                                    <p>DEKOR is fully responsive and perfectly fits on any device.</p>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 colg-md-4 col-sm-6 col-xs-12">
                    <ul class="tz-collection collection-left tz-collection2 no-padding">
                        <li>
                            <figure class="item-collection">
                                <img src="demos/item-collection8.png" alt="dummy content">
                                <figcaption>
                                    <h6>Dummy Content</h6>
                                    <p>DEKOR is fully responsive and perfectly fits on any device.</p>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 colg-md-4 col-sm-6 col-xs-12">
                    <ul class="tz-collection collection-left tz-collection2 no-padding">
                        <li>
                            <figure class="item-collection">
                                <img src="demos/item-collection9.png" alt="clean Code">
                                <figcaption>
                                    <h6>Clean Code</h6>
                                    <p>DEKOR is fully responsive and perfectly fits on any device.</p>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 colg-md-4 col-sm-6 col-xs-12">
                    <ul class="tz-collection collection-left tz-collection2 no-padding">
                        <li>
                            <figure class="item-collection">
                                <img src="demos/item-collection10.png" alt="section header">
                                <figcaption>
                                    <h6>Section Header</h6>
                                    <p>DEKOR is fully responsive and perfectly fits on any device.</p>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 colg-md-4 col-sm-6 col-xs-12">
                    <ul class="tz-collection collection-left tz-collection2 no-padding">
                        <li>
                            <figure class="item-collection">
                                <img src="demos/item-collection2.png" alt="font awesome icons">
                                <figcaption>
                                    <h6>Font Awesome Icons</h6>
                                    <p>DEKOR is fully responsive and perfectly fits on any device.</p>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
            </div><!--end class row-->
        </div><!--end class container-->
    </section><!--end class tz-about-->

    <section class="parallax parallax_bk1">
        <div class="tz-overlay-skill">
            <h3 class="tz-title-3">OUR SKILLS</h3>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tz-rotate-skill">
                           <span class="chart" data-percent="75">
                                <span class="percent"></span>
                            </span>
                            <p>Branding</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tz-rotate-skill">
                           <span class="chart" data-percent="90">
                                <span class="percent"></span>
                            </span>
                            <p>Illustration</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tz-rotate-skill">
                           <span class="chart" data-percent="60">
                                <span class="percent"></span>
                            </span>
                            <p>php/CSS</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tz-rotate-skill">
                           <span class="chart" data-percent="90">
                                <span class="percent"></span>
                            </span>
                            <p>Web design</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end class over-skill-->
    </section><!--end class parallax-->

    <section class="tz-our-team theme-white">
        <div class="container">
            <h3 class="tz-title-bold-3">
                MEET OUR TEAM
            </h3>
            <ul class="tz-team-slider">
                <li>
                    <div class="tz-team-item">
                        <div class="tz-team-overlay">
                            <div class="tz-team-img">
                                <img src="demos/team1.jpg" alt="Jordan Henrion">
                                <img class="img-hover" src="demos/team1.jpg" alt="Jordan Henrion">
                                <div class="tz-team-overlay-bk"></div>
                            </div>
                        </div>
                        <div class="tz-team-ds">
                            <h6>Van Van Nguyen</h6>
                            <span>Founder</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="tz-team-item">
                        <div class="tz-team-overlay">
                            <div class="tz-team-img">
                                <img src="demos/team2.jpg" alt="Catherine Doe">
                                <img class="img-hover" src="demos/team2.jpg" alt="Catherine Doe">
                                <div class="tz-team-overlay-bk"></div>
                            </div>
                        </div>
                        <div class="tz-team-ds">
                            <h6>Vân Nguyễn</h6>
                            <span>CEO & Founder</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="tz-team-item">
                        <div class="tz-team-overlay">
                            <div class="tz-team-img">
                                <img src="demos/team3.jpg" alt="Marion Doe">
                                <img class="img-hover" src="demos/team3.jpg" alt="Marion Doe">
                                <div class="tz-team-overlay-bk"></div>
                            </div>
                        </div>
                        <div class="tz-team-ds">
                            <h6>Vân Vân</h6>
                            <span>Marketing</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="tz-team-item">
                        <div class="tz-team-overlay">
                            <div class="tz-team-img">
                                <img src="demos/team4.jpg" alt="Mary Jane Doe">
                                <img class="img-hover" src="demos/team4.jpg" alt="Mary Jane Doe">
                                <div class="tz-team-overlay-bk"></div>
                            </div>
                        </div>
                        <div class="tz-team-ds">
                            <h6>Thịnh Nguyễn</h6>
                            <span>Founder</span>
                        </div>
                    </div>
                </li>
                
            </ul>
            <div class="tzview-team">
                <a href="#">
                    <span>ALL TEAM</span>
                </a>
            </div>
        </div><!--end class container-->
    </section><!--end class tz-our-team-->

    <section class="tz-our-facts theme-gray">
        <div class="container">
            <h3 class="tz-title-bold-3">
                OUR FACTS
            </h3>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tz-facts-item">
                        <strong class="color-darkturquoise">8500</strong>
                        <span>Coffee Cups</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tz-facts-item">
                        <strong class="color-orange">8500</strong>
                        <span>Coffee</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tz-facts-item">
                        <strong class="color-darkorange">69</strong>
                        <span>Letters</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tz-facts-item">
                        <strong class="color-darkcyan">36k</strong>
                        <span>Happy Clients</span>
                    </div>
                </div>
            </div>
        </div><!--end class container-->
    </section><!--end class tz-our-facts-->

    <section class="theme-white tz-our-office">
        <h3 class="tz-title-bold-3">OUR OFFICE</h3>
        <ul class="tz-offfice-slider">
            <li>
                <img src="demos/office1.jpg" alt="office1">
            </li>
            <li>
                <img src="demos/office2.jpg" alt="office2">
            </li>
            <li>
                <img src="demos/office3.jpg" alt="office3">
            </li>
            <li>
                <img src="demos/office4.jpg" alt="office4">
            </li>
            <li>
                <img src="demos/office1.jpg" alt="office1">
            </li>
            <li>
                <img src="demos/office2.jpg" alt="office2">
            </li>
            <li>
                <img src="demos/office3.jpg" alt="office3">
            </li>
            <li>
                <img src="demos/office4.jpg" alt="office4">
            </li>
        </ul>
    </section><!--end class tz-our-office-->

    <section class="tz-the-say tz-the-say-overlay parallax parallax_bk2">
        <button class="say_prev"><i class="fa fa-angle-left"></i></button>
        <button class="say_next"><i class="fa fa-angle-right "></i></button>
        <div class="container">
            <h3 class="tz-title-bold-3">WHAT THEY SAY</h3>
            <div class="row">
                <ul class="tz-say-slider">
                    <li>
                        <img class="tz-avata" src="demos/say1.jpg" alt="JOHNNY W">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor at neque et imperdiet. Praesent et eleifend magna, at efficitur metus. Ut quis tortor in justo venenatis.</p>
                        <span class="color-1">JOHNNY W.</span>
                        <small>Graphic Designer</small>
                    </li>
                    <li>
                        <img class="tz-avata" src="demos/say2.jpg" alt="WENDY P">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor at neque et imperdiet. Praesent et eleifend magna, at efficitur metus. Ut quis tortor in justo venenatis.</p>
                        <span class="color-2">WENDY P.</span>
                        <small>Marketer</small>
                    </li>
                    <li>
                        <img class="tz-avata" src="demos/say3.jpg" alt="JAMES HENRY">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor at neque et imperdiet. Praesent et eleifend magna, at efficitur metus. Ut quis tortor in justo venenatis.</p>
                        <span class="color-3">JAMES HENRY</span>
                        <small>CEO</small>
                    </li>
                    <li>
                        <img class="tz-avata" src="demos/say1.jpg" alt="JOHNNY W">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor at neque et imperdiet. Praesent et eleifend magna, at efficitur metus. Ut quis tortor in justo venenatis.</p>
                        <span class="color-1">JOHNNY W.</span>
                        <small>Graphic Designer</small>
                    </li>
                    <li>
                        <img class="tz-avata" src="demos/say2.jpg" alt="WENDY P">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor at neque et imperdiet. Praesent et eleifend magna, at efficitur metus. Ut quis tortor in justo venenatis.</p>
                        <span class="color-2">WENDY P.</span>
                        <small>Marketer</small>
                    </li>
                    <li>
                        <img class="tz-avata" src="demos/say3.jpg" alt="JAMES HENRY">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor at neque et imperdiet. Praesent et eleifend magna, at efficitur metus. Ut quis tortor in justo venenatis.</p>
                        <span class="color-3">JAMES HENRY</span>
                        <small>CEO</small>
                    </li>
                    <li>
                        <img class="tz-avata" src="demos/say1.jpg" alt="JOHNNY W">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor at neque et imperdiet. Praesent et eleifend magna, at efficitur metus. Ut quis tortor in justo venenatis.</p>
                        <span class="color-1">JOHNNY W.</span>
                        <small>Graphic Designer</small>
                    </li>
                    <li>
                        <img class="tz-avata" src="demos/say1.jpg" alt="WENDY P">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor at neque et imperdiet. Praesent et eleifend magna, at efficitur metus. Ut quis tortor in justo venenatis.</p>
                        <span class="color-2">WENDY P.</span>
                        <small>Marketer</small>
                    </li>
                    <li>
                        <img class="tz-avata" src="demos/say1.jpg" alt="JAMES HENRY">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor at neque et imperdiet. Praesent et eleifend magna, at efficitur metus. Ut quis tortor in justo venenatis.</p>
                        <span class="color-3">JAMES HENRY</span>
                        <small>CEO</small>
                    </li>
                </ul>
            </div><!--end class row-->
        </div><!--end class container-->
    </section><!--end class tz-the-say-->

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
        </div>
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
                                <img src="demos/last-1.jpg" alt="Lorem ipsum dolor sit amet">
                                <div class="tz-recent-content">
                                    <a href="singlePost-image.php">Lorem ipsum dolor sit amet.</a>
                                    <span>
                                        Jul 24, 2014
                                    </span>
                                </div>
                            </li>
                            <li>
                                <img src="demos/last-12.jpg" alt="Donec quam eros, bibendum sed egestas">
                                <div class="tz-recent-content">
                                    <a href="singlePost-image.php">Donec quam eros, bibendum sed egestas ...</a>
                                    <span>
                                        Jul 24, 2014
                                    </span>
                                </div>
                            </li>
                            <li>
                                <img src="demos/last-3.jpg" alt="Sit amet varius quam">
                                <div class="tz-recent-content">
                                    <a href="singlePost-image.php">Sit amet varius quam.</a>
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
    <script src="js/jquery.easypiechart.min.js"></script>
    <script src="js/custom.js"></script>
</body>

<!-- Mirrored from demo.templaza.com/php/dekor/about-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Nov 2014 08:41:00 GMT -->
</html>