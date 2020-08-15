<?php session_start();
include('connect.php');

?>
<!DOCTYPE html>
<html>

<!-- Mirrored from demo.templaza.com/php/dekor/portfolio-grid-4.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Nov 2014 08:42:47 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dekor - Portfolio Grid 4 </title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="fonts/awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300,100,200,800" rel="stylesheet" />
    <link href="css/owl.carousel.css" rel="stylesheet" />
    <link href="css/owl.theme.css" rel="stylesheet" />
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
    <link href="style.css" rel="stylesheet" />
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
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

    <section class="tzportfolio-wrap">
        <div class="container">
            <h3 class="tz-title-portfolio">
                PORTFOLIO
            </h3>
            <div data-option-key="filter" class="tzfilter">
                <a class="selected" data-option-value="*" href="#show-all">All</a>
                <a data-option-value=".chair" href="#">CHAIR</a>
                <a data-option-value=".book" href="#">BOOK</a>
                <a data-option-value=".sofa" href="#">SOFA</a>
                <a data-option-value=".accessorie" href="#">ACCESSORIE</a>
            </div>
            <div class="tzportfolio-pages tz-no-mansory">
                            
<!-- bat dau sua tu day -->
<?php
        include('function_prod.php');
		$run_chair = prod_category("CHAIR");
        while($row_chair=mysqli_fetch_array($run_chair))
        {
?>
                <div class="element chair ">
                    <div class="tz-inner">
                        <div class="tz-image-item">
                            <!-- <img alt="Aliquam a sollicitudin" src="demos/portfolio/portfolio-grid-4.jpg"> -->
                                    
                            <img alt="<?php echo $row_chair['p_Name'] ?>" src="demos\<?php echo $row_chair['picture'] ?>">
                            <a href="shop-productdetails.php?id=<?php echo $row_chair['p_ID']?>" class="tzfa-search"><i class="fa fa-search"></i></a>
                            <a href="#" class="tzfa-heart"><i class="fa fa-heart"></i></a>
                        </div>
                        <h6><a href="shop-productdetails.php?id=<?php echo $row_chair['p_ID']?>"><?php echo $row_chair['p_Name'] ?></a></h6>
                    </div>
                </div>
<?php }?>
<?php
        $run_book = prod_category("BOOK");
        while($row_book=mysqli_fetch_array($run_book))
        {
?>
                <div class="element book">
                    <div class="tz-inner">
                        <div class="tz-image-item">
                            <!-- <img alt="Aliquam a sollicitudin" src="demos/portfolio/portfolio-grid-4.jpg"> -->
                                    
                            <img alt="<?php echo $row_book['p_Name'] ?>" src="demos\<?php echo $row_book['picture'] ?>">
                            <a href="shop-productdetails.php?id=<?php echo $row_book['p_ID']?>" class="tzfa-search"><i class="fa fa-search"></i></a>
                            <a href="#" class="tzfa-heart"><i class="fa fa-heart"></i></a>
                        </div>
                        <h6><a href="shop-productdetails.php?id=<?php echo $row_book['p_ID']?>"><?php echo $row_book['p_Name'] ?></a></h6>
                    </div>
                </div>
<?php }?>      
<?php
                    
		$run_sofa = prod_category("SOFA");
        while($row_sofa=mysqli_fetch_array($run_sofa))
        {
            ?>
                <div class="element sofa">
                     <div class="tz-inner">
                        <div class="tz-image-item">
                            <!-- <img alt="Aliquam a sollicitudin" src="demos/portfolio/portfolio-grid-4.jpg"> -->
                                    
                            <img alt="<?php echo $row_sofa['p_Name'] ?>" src="demos\<?php echo $row_sofa['picture'] ?>">
                            <a href="shop-productdetails.php?id=<?php echo $row_sofa['p_ID']?>" class="tzfa-search"><i class="fa fa-search"></i></a>
                            <a href="#" class="tzfa-heart"><i class="fa fa-heart"></i></a>
                        </div>
                        <h6><a href="shop-productdetails.php?id=<?php echo $row_sofa['p_ID']?>"><?php echo $row_sofa['p_Name'] ?></a></h6>
                    </div>
                </div>
<?php }?>
<?php
	$run_accessorie = prod_category("ACCESSORIE");
    while($row_accessorie=mysqli_fetch_array($run_accessorie))
    {
?>
                <div class="element accessorie">
                    <div class="tz-inner">
                        <div class="tz-image-item">
                            <!-- <img alt="Nullam viverra enim" src="demos/portfolio/portfolio-grid-4-3.jpg"> -->
                            <img alt="><?php echo $row_accessorie['p_Name'] ?>" src="demos\<?php echo $row_accessorie['picture'] ?>">
                            <a href="shop-productdetails.php?id=<?php echo $row_accessorie['p_ID']?>" class="tzfa-search"><i class="fa fa-search"></i></a>
                            <a href="#" class="tzfa-heart"><i class="fa fa-heart"></i></a>
                        </div>
                        <h6><a href="shop-productdetails.php?id=<?php echo $row_accessorie['p_ID']?>"><?php echo $row_accessorie['p_Name'] ?> </a></h6>

                    </div>
                </div>
<?php }?>               
            </div><!--end class tzportfolio-pages-->
            <div class="tzpagenavi">
                <button class="tzpage-left">
                    <i class="fa fa-angle-left"></i>
                </button>
                <button class="tzpage-right">
                    <i class="fa fa-angle-right"></i>
                </button>
            </div><!--end class tzpagenavi-->
        </div><!--end class container-->
    </section><!--end class tzportfolio-wrap-->

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
                                    <a href="singlePost-image.php">Lorem ipsum dolor sit amet.</a>
                                    <span>
                                        Jul 24, 2014
                                    </span>
                                </div>
                            </li>
                            <li>
                                <img src="demos/last-12.jpg" alt="recent post">
                                <div class="tz-recent-content">
                                    <a href="singlePost-image.php">Donec quam eros, bibendum sed egestas ...</a>
                                    <span>
                                        Jul 24, 2014
                                    </span>
                                </div>
                            </li>
                            <li>
                                <img src="demos/last-3.jpg" alt="recent post">
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
    <script src="js/portfolio.js"></script>
    <script src="js/custom.js"></script>
    <script>
            var Desktop           =   4,
                tabletportrait    =   3,
                mobilelandscape   =   2,
                mobileportrait    =   1,
                resizeTimer       =   null;
    </script>
</body>

<!-- Mirrored from demo.templaza.com/php/dekor/portfolio-grid-4.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Nov 2014 08:44:08 GMT -->
</html>