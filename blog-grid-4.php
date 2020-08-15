<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from demo.templaza.com/php/dekor/blog-grid-4.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Nov 2014 08:54:58 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dekor - Blog Grid 4 </title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="fonts/awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300,100,200,800" rel="stylesheet" />
    <link href="css/owl.carousel.css" rel="stylesheet" />
    <link href="css/owl.theme.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Support for php5 -->
    <!--[if lt IE 9]>
    <script src="//php5shim.googlecode.com/svn/trunk/php5.js"></script>
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
    <header class="tz-header tz-header3">
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
            <li><a href="#"><i class="fas fa-shopping-cart" > My Cart</a></i></li>
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

    <section class="tzblog-wrap">
        <div class="container">
            <h1 class="tz-title-bold-3">BLOG</h1>
            <div class="row gird-margin">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <article class="blog-gird-item blog-item">
                        <div class="pageblog-thumb">
                            <img src="demos/blog/blog1.jpg" alt="Cheese Shop">
                            <a href="singlePost-image.php" class="tzblog-view"><i class="fa fa-search"></i></a>
                        </div>
                        <h4><a href="shop-fullwidth.php">Harper - Cheese Shop</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi...
                        </p>
                        <span class="tzblog-meta">
                            <em>Apr 18, 2014</em>
                            <a href="#"><i class="fa fa-heart-o"></i> 20</a>
                            <a href="#"><i class="fa fa-comments"></i> 15</a>
                        </span>
                    </article>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <article class="blog-gird-item blog-item">
                        <div class="pageblog-thumb">
                            <img src="demos/blog/blog2.jpg" alt="Tincidunt elementum">
                            <a href="shop-fullwidth.php" class="tzblog-view"><i class="fa fa-search"></i></a>
                        </div>
                        <h4><a href="shop-fullwidth.php">Tincidunt elementum</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi...
                        </p>
                        <span class="tzblog-meta">
                            <em>Apr 18, 2014</em>
                            <a href="#"><i class="fa fa-heart-o"></i> 20</a>
                            <a href="#"><i class="fa fa-comments"></i> 15</a>
                        </span>
                    </article>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <article class="blog-gird-item blog-item">
                        <div class="pageblog-thumb">
                            <img src="demos/blog/blog3.jpg" alt="Vestibulum auctor tortor">
                            <a href="shop-fullwidth.php" class="tzblog-view"><i class="fa fa-search"></i></a>
                        </div>
                        <h4><a href="shop-fullwidth.php">Vestibulum auctor tortor</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi...
                        </p>
                        <span class="tzblog-meta">
                            <em>Apr 18, 2014</em>
                            <a href="#"><i class="fa fa-heart-o"></i> 20</a>
                            <a href="#"><i class="fa fa-comments"></i> 15</a>
                        </span>
                    </article>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <article class="blog-gird-item blog-item">
                        <div class="pageblog-thumb">
                            <img src="demos/blog/blog4.jpg" alt="Aenean aliquet mi ligula">
                            <a href="shop-fullwidth.php" class="tzblog-view"><i class="fa fa-search"></i></a>
                        </div>
                        <h4><a href="shop-fullwidth.php">Aenean aliquet mi ligula</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi...
                        </p>
                        <span class="tzblog-meta">
                            <em>Apr 18, 2014</em>
                            <a href="#"><i class="fa fa-heart-o"></i> 20</a>
                            <a href="#"><i class="fa fa-comments"></i> 15</a>
                        </span>
                    </article>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <article class="blog-gird-item blog-item">
                        <div class="pageblog-thumb">
                            <img src="demos/blog/blog5.jpg" alt="Curabitur pretium tincidunt">
                            <a href="shop-fullwidth.php" class="tzblog-view"><i class="fa fa-search"></i></a>
                        </div>
                        <h4><a href="shop-fullwidth.php">Curabitur pretium tincidunt</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi...
                        </p>
                        <span class="tzblog-meta">
                            <em>Apr 18, 2014</em>
                            <a href="#"><i class="fa fa-heart-o"></i> 20</a>
                            <a href="#"><i class="fa fa-comments"></i> 15</a>
                        </span>
                    </article>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <article class="blog-gird-item blog-item">
                        <div class="pageblog-thumb">
                            <img src="demos/blog/blog6.jpg" alt="Sed posuere vestibulum nisl">
                            <a href="shop-fullwidth.php" class="tzblog-view"><i class="fa fa-search"></i></a>
                        </div>
                        <h4><a href="shop-fullwidth.php">Sed posuere vestibulum nisl</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi...
                        </p>
                        <span class="tzblog-meta">
                            <em>Apr 18, 2014</em>
                            <a href="#"><i class="fa fa-heart-o"></i> 20</a>
                            <a href="#"><i class="fa fa-comments"></i> 15</a>
                        </span>
                    </article>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <article class="blog-gird-item blog-item">
                        <div class="pageblog-thumb">
                            <img src="demos/blog/blog7.jpg" alt="Consectetur elit">
                            <a href="shop-fullwidth.php" class="tzblog-view"><i class="fa fa-search"></i></a>
                        </div>
                        <h4><a href="shop-fullwidth.php">Consectetur elit</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi...
                        </p>
                        <span class="tzblog-meta">
                            <em>Apr 18, 2014</em>
                            <a href="#"><i class="fa fa-heart-o"></i> 20</a>
                            <a href="#"><i class="fa fa-comments"></i> 15</a>
                        </span>
                    </article>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <article class="blog-gird-item blog-item">
                        <div class="pageblog-thumb">
                            <img src="demos/blog/blog8.jpg" alt="Sed blandit risus">
                            <a href="shop-fullwidth.php" class="tzblog-view"><i class="fa fa-search"></i></a>
                        </div>
                        <h4><a href="shop-fullwidth.php">Sed blandit risus</a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi...
                        </p>
                        <span class="tzblog-meta">
                            <em>Apr 18, 2014</em>
                            <a href="#"><i class="fa fa-heart-o"></i> 20</a>
                            <a href="#"><i class="fa fa-comments"></i> 15</a>
                        </span>
                    </article>
                </div>
            </div><!--end class row-->

            <div class="tzpagenavi-blog">
                <a class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
            </div>
        </div><!--end class container-->
    </section><!--end class tzblog-wrap-->

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
                                <img src="demos/last-12.jpg" alt="Donec quam eros">
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
    <script src="js/owl.carousel.js"></script>
    <script src="js/resize.js"></script>
    <script src="js/off-canvas.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/blog.js"></script>
</body>

<!-- Mirrored from demo.templaza.com/php/dekor/blog-grid-4.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Nov 2014 08:56:31 GMT -->
</html>