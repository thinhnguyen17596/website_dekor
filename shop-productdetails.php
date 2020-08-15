<?php
    session_start();
    include('connect.php');     

    if(isset($_POST["buy"])){
        if(empty($_SESSION['user'])){
            echo json_encode([ 'status' => false ]);
            return;
        }
        $name = $_POST['userName'];
        $sp = intval($_POST['sp']);
        $sl = intval($_POST['sl']);

        $sql = "select * from cart where id_user = '$name' AND id_product = $sp";
        $runs = mysqli_query($conn,$sql);
        if($runs->num_rows){
            $runs = mysqli_fetch_array($runs);
            $sl = $sl + $runs["quantity"];
            $id = $runs["ID_C"];
            $sql = "UPDATE `cart` SET `quantity` = '$sl' WHERE `cart`.`ID_C` = $id";
            $res = mysqli_query($conn,$sql);
            echo json_encode([ 'status' => true ]);
            return;
        }

        $sql = "INSERT INTO `cart` (`ID_C`, `id_user`, `id_product`, `quantity`) VALUES (null, '$name', $sp, $sl)";
		$run = mysqli_query($conn,$sql);
        echo json_encode([ 'status' => true ]);
        return;
    }
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from demo.templaza.com/html/dekor/shop-productdetails.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Nov 2014 09:03:05 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dekor - Shop Product Details </title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="fonts/awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300,100,200,800" rel="stylesheet" />
    <link href="css/owl.carousel.css" rel="stylesheet" />
    <link href="css/owl.theme.css" rel="stylesheet" />
    <link href="css/flexslider.css" rel="stylesheet" />
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
                                <a href="#"> Living Room</a>
                            </li>
                            <li>
                                <i class="fa fa-chevron-down"></i>
                                <a href="#"> Bedroom</a>
                                <ul class="children">
                                    <li>
                                        <i class="fa fa-chevron-circle-right"></i>
                                        <a href="#">Wardrobes</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-circle-right"></i>
                                        <a href="#">Mirrors</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-circle-right"></i>
                                        <a href="#">Bedroom Sets</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-circle-right"></i>
                                        <a href="#">Bedside Tables</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-circle-right"></i>
                                        <a href="#">Chest of Drawers</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-circle-right"></i>
                                        <a href="#">Mattresses</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <i class="fa fa-chevron-right"></i>
                                <a href="#">Dining & Kitchen</a>
                            </li>
                            <li>
                                <i class="fa fa-chevron-right"></i>
                                <a href="#">Bathroom</a>
                            </li>
                            <li>
                                <i class="fa fa-chevron-right"></i>
                                <a href="#">Workspaces</a>
                            </li>
                            <li>
                                <i class="fa fa-chevron-right"></i>
                                <a href="#">Bar</a>
                            </li>
                        </ul>
                    </aside>
                    <aside class="widget_bestsellers">
                        <h3 class="module-title title-widget"><span>BESTSELLERS</span></h3>
                        <ul>
                            <?php 
							$sql_best = "select * from product where p_ID<6"; 
							$run_best = mysqli_query($conn,$sql_best);
							while($row_best = mysqli_fetch_array($run_best))
							{
						?>
                            <li>
                                <div class="as_bestsellers_thumb">
                                    <img src="demos/<?php echo $row_best['picture']?>" width="80" height="80" alt="<?php echo $row_best['p_Name'] ?>">
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
                <div id="tz-wp-content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                		<?php
							if(isset($_GET['id']))
							{
								$id_prod = $_GET['id'];
							}
							else
							{
								$id_prod = 1;
							}
							$sql_prod = "select * from product where p_ID = $id_prod";
							$run_prod = mysqli_query($conn,$sql_prod);
							$row_prod = mysqli_fetch_array($run_prod);
						?>
                    <h3 class="tz-title-bold-3"><?php echo $row_prod['category']?></h3>
                    <div class="row" >                   	
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <div id="slider" class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="demos/<?php echo $row_prod['picture']?>" width="370" height="370" alt="<?php echo $row_prod['p_Name'] ?>"/>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="tzshop-summary">
                                <h3><?php echo $row_prod['p_Name'] ?></h3>
                                <span class="tzproduct-single-price">
                                    $<?php echo $row_prod['price']?> <a href="#">Reviews (2)</a>
                                </span>
                                <h6 class="tz-title-details">PRODUCT DETAILS</h6>
                                <ul class="tzshop-status">
                                    <li>
                                        <span>Availability:</span> In Stock
                                    </li>
                                    <li>
                                        <span>Product Code:</span> Product <?php echo $row_prod['p_ID']?>
                                    </li>
                                    <li>
                                        <span>Reward Points: </span> 0
                                    </li>
                                    <li>
                                        <span>Brand: </span> Product Canon
                                    </li>
                                </ul>
                                <p>
                                    <?php echo $row_prod['description']?>
                                </p>
                                <div class="tzqty">
                                    Q.ty: <input type="number" style="width:50px" name="qty" value="1">
                                </div>
                                 <span class="tz-shop-detail-meta" 
                                    <?php 
                                        if(!empty($_SESSION['user']))
                                        {        
                                            $a = $row_prod['p_ID'];
                                            $b = $_SESSION['user'];
                                            echo "id-sp='$a' id-name='$b'";
                                            
                                        }
                                    ?>
                                    
                                    >
                                    <a class="tzshopping" id="buy" href>
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                    <a class="tzheart" href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a class="tztasks" href="#">
                                        <i class="fa fa-tasks"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="tzshop-detail-tab">
                        <ul class="tznav-product">
                            <li class="active">
                                <a href="#">DESCRIPTION</a>
                            </li>
                            <li>
                                <a href="#">SPECIFICATION</a>
                            </li>
                            <li>
                                <a href="#">REVIEWS (5)</a>
                            </li>
                        </ul>
                        <div class="tztab-content">
                            <p>
                                Mauris placerat rutrum ante, vel elementum justo posuere eu. Suspendisse ultricies arcu et consequat dignissim. Phasellus facilisis sem nec bibendum tristique. Vestibulum ut nisi laoreet, eleifend tellus ornare, euismod orci. Curabitur congue arcu sed mollis consectetur. Duis vel dolor vitae velit volutpat viverra nec vel lorem. Maecenas sit amet ornare eros. Maecenas cursus tortor sollicitudin imperdiet malesuada.
                                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec molestie mattis ipsum, luctus lacinia orci luctus in. Nam consectetur, mauris at aliquet tempus, felis ligula blandit felis, ultrices condimentum nisl lorem ac nulla. Curabitur molestie nisi dolor, ac sollicitudin odio tincidunt eu. Vestibulum eget est laoreet, lacinia velit ac, sodales turpis. Curabitur at dapibus odio. Nunc scelerisque bibendum augue, a blandit sapien mattis eget. Sed iaculis mi vel metus luctus, sed dictum diam eleifend.
                            </p>
                        </div>
                    </div>
                    <div class="tzrelated-shop">
                        <h3 class="tz-title-bold-3">RELATED PRODUCTS</h3>
                        <div class="row">
                            <?php 
								$sql = "select * from product where p_ID<=3";
								$run = mysqli_query($conn,$sql);
								while($row = mysqli_fetch_array($run))
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
                    		<h6><a href="shop-productdetails.php?id=<?php echo $row['p_ID'] ?>"><?php echo $row['p_Name'] ?></a></h6>
                    		<small>$<?php echo $row['price']?> </small>
                			</div>
           				 <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end class container-->
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="js/jquery.min.js"></script>
    <script>
        jQuery.noConflict();
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/resize.js"></script>
    <script src="js/off-canvas.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/custom.js"></script>
   <script>
       // jQuery for flexslider------------------
       jQuery(window).load(function() {
           // The slider being synced must be initialized first
           jQuery('#carousel').flexslider({
               animation: "slide",
               controlNav: false,
               animationLoop: false,
               slideshow: false,
               directionNav: false,
               autoHeight: true,
               itemWidth: 80,
               itemMargin: 80,
               asNavFor: '#slider'
           });

           jQuery('#slider').flexslider({
               animation: "slide",
               controlNav: false,
               animationLoop: false,
               directionNav: false,
               autoHeight: true,
               slideshow: false,
               sync: "#carousel"
           });

       });
   </script>

    <script>
         $("#buy").click(function(event) {
            event.preventDefault();
            var data;
            var name = $(this).parents("span").attr('id-name');
            var sp = $(this).parents("span").attr('id-sp');

            data = new FormData();
            data.append('buy','');
            data.append('userName', name);
            data.append('sp', sp);
            data.append('sl', $(".tzqty").find("input").val());

            $.ajax({
                url: "shop-productdetails.php",
                data: data,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(response) {
                    var obj = JSON.parse(response);
                    if(obj.status){
                        alert("Them thanh cong vao gio hang");
                    }
                    if(obj.status == false){
                        window.location.href = 'page-login.php';
                    }
                    console.log(obj);
                    
                }
            });
        });
    </script>

</body>

<!-- Mirrored from demo.templaza.com/php/dekor/shop-productdetails.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Nov 2014 09:03:51 GMT -->
</html>