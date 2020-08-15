<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from demo.templaza.com/php/dekor/shop-Categories.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Nov 2014 09:01:54 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dekor - Shop Category </title>
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
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li><a href="shop-Checkout.php"><i class="fas fa-shopping-cart" style="color: white"> My Cart</a></i></li>
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

    <div class="tzcategory-shop-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tzshop-aside">
                    <aside class="widget_categories widget">
                        <h3 class="module-title title-widget"><span>Category</span></h3>
                        <ul>
                            <li>
                                <i class="fa fa-chevron-right"></i>
                                <a href="shop-Categories.php"> Living Room</a>
                            </li>
                            <li>
                                <i class="fa fa-chevron-down"></i>
                                <a href="shop-Categories.php"> Bedroom</a>
                                <ul class="children">
                                    <li>
                                        <i class="fa fa-chevron-circle-right"></i>
                                        <a href="shop-Categories.php">Wardrobes</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-circle-right"></i>
                                        <a href="shop-Categories.php">Mirrors</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-circle-right"></i>
                                        <a href="shop-Categories.php">Bedroom Sets</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-circle-right"></i>
                                        <a href="shop-Categories.php">Bedside Tables</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-circle-right"></i>
                                        <a href="shop-Categories.php">Chest of Drawers</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-circle-right"></i>
                                        <a href="shop-Categories.php">Mattresses</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <i class="fa fa-chevron-right"></i>
                                <a href="shop-Categories.php">Dining & Kitchen</a>
                            </li>
                            <li>
                                <i class="fa fa-chevron-right"></i>
                                <a href="shop-Categories.php">Bathroom</a>
                            </li>
                            <li>
                                <i class="fa fa-chevron-right"></i>
                                <a href="shop-Categories.php">Workspaces</a>
                            </li>
                            <li>
                                <i class="fa fa-chevron-right"></i>
                                <a href="shop-Categories.php">Bar</a>
                            </li>
                        </ul>
                    </aside>
                    <aside class="widget_bestsellers">
                        <h3 class="module-title title-widget"><span>BESTSELLERS</span></h3>
                        <ul>
                        <?php 
							include('function_prod.php'); 
							$run_best = prod_limit(5);
							while($row_best = mysqli_fetch_array($run_best))
							{
						?>
                            <li>
                                <div class="as_bestsellers_thumb">
                                    <img src="demos/<?php echo $row_best['picture'] ?>" width="80" height="80" alt="<?php echo $row_best['p_Name'] ?>">
                                </div>
                                <div class="as_bestsellers_content">
                                    <a href="shop-productdetails.php?id=<?php echo $row_best['p_ID']?>"><?php echo $row_best['p_Name'] ?></a>
                                    <span>$<?php echo $row_best['price']?></span>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="tzshopcat-description">
                        <h1 class="tz-title-bold-3">CHAIRS</h1>
                        <img src="demos/category-img.jpg" alt="Chairs">
                        <p>
                            Vestibulum viverra pellentesque nisl non adipiscing. Sed vel auctor purus. Sed semper non dui id congue. Vivamus laoreet arcu scelerisque, consectetur orci ut, lacinia justo. Sed diam ipsum, aliquet et vulputate ut, semper ut mi. Fusce tempor ultrices massa, dapibus sagittis elit consectetur at. Praesent vitae arcu mauris.
                        </p>
                        <p>
                            Vestibulum dignissim risus ut diam interdum, eget porta neque semper. Praesent consequat ac lorem eget fermentum. Etiam at sem elit. Sed ultricies eu justo ac vulputate. Maecenas est leo, feugiat sed facilisis non, sodales eu neque. Donec tincidunt ullamcorper nisl id semper. Nulla consequat metus sit amet porttitor scelerisque. Maecenas viverra sodales urna, eu porttitor mauris aliquam non.
                        </p>
                    </div>
                    <div class="row">
                    	<?php 
							include('connect.php');
							$run = prod();
							$total = mysqli_num_rows($run);
							if(isset($_GET['page']))
							{
								$current_page = $_GET['page'];
							}
							else
							{
								$current_page = 1;	
							}
							$limit = 6;
							
							//Tính tổng số trang
							$total_page = ceil($total/$limit);
							//điều kiện khi nhap trang
							if($current_page<1)
							{
								$current_page =1;
							}
							else if($current_page>$total_page)
							{
								$current_page = $total_page;
							}
							//tạo start
							$start = ($current_page- 1) * $limit ;
							$recordset_page = prod_start($start,$limit);
							while($row = mysqli_fetch_array($recordset_page))
							{
						?>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 laster-shop-item">
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
                            <h6><a href="shop-productdetails.php?id=<?php echo $row['p_ID']?>"><?php echo $row['p_Name'] ?></a></h6>
                            <small>$<?php echo $row['price']?></small>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="tzpagenavi-shop">
                    <?php
                    	for($i = 1; $i<=$total_page; $i++)
						{
							if($i==$current_page)
							{
								echo "<a class='active'>".$i."</a>";	
							}
							else
							{
								echo '<a href="shop-Categories.php?page='.$i.'">'.$i.'</a>';
							}
						}
					?>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end class tzblog-wrap-->

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
    <script src="js/custom.js"></script>

</body>

<!-- Mirrored from demo.templaza.com/php/dekor/shop-Categories.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Nov 2014 09:03:05 GMT -->
</html>