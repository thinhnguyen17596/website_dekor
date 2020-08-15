<?php
    session_start();
    include('connect.php'); 

    if(empty($_SESSION['user'])){
        header("Location: page-login.php");
    }else{
        $email = $_SESSION['user'];
    }

    if(isset($_POST["delete"])){
        $id = $_POST['id'];

        $sql = "DELETE FROM `cart` WHERE `cart`.`ID_C` = $id";
        $run = mysqli_query($conn,$sql);
        echo json_encode([ 'status' => true ]);
        return;
    }

    if(isset($_POST["edit"])){
        $id = $_POST['id'];
        $sl = $_POST['sl'];

        $sql = "UPDATE cart SET quantity = $sl WHERE ID_C = $id";
        $run = mysqli_query($conn,$sql);
        echo json_encode([ 'status' => $run ]);
        return;
    }
    
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from demo.templaza.com/php/dekor/shop-Checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Nov 2014 09:03:51 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dekor - Shop checkout</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="fonts/awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300,100,200,800" rel="stylesheet" />
    <link href="css/owl.carousel.css" rel="stylesheet" />
    <link href="css/owl.theme.css" rel="stylesheet" />
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

    <section class="tzcheckout-wrap">
        <h3 class="tz-title-bold-3 over-title">CONFIRM YOUR ORDER</h3>
        <div class="container">
            <form method="post" action="#">
                <table class="shop_table">
                    <thead>
                        <tr>
                            <th class="product-image">Image</th>
                            <th class="name">Product Name</th>
                            <th class="porduct-quantity">Quantity</th>
                            <th class="product-price">Unit Price </th>
                            <th class="product-total">Total</th>
                            <th class="product-remove">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql_best = "select p_ID,P_name,price,picture,quantity,ID_C from cart INNER JOIN product ON id_product=p_ID WHERE id_user='$email'";
                        $run_best = mysqli_query($conn,$sql_best);
                        $total = 0;
                        while($row_best = mysqli_fetch_array($run_best))
                        {
                            $total = $total + $row_best["quantity"]*$row_best["price"];
                    ?>
                        <tr class="cart_table_item">
                            <!-- Product Name -->
                            <td class="product-img">
                                <img alt="01" class="wp-post-image" src="demos/<?php echo $row_best["picture"]?>">
                            </td>
                            <!-- Product Code -->
                            <td class="product-name">
                                <a><?php echo $row_best["P_name"]?></a>
                            </td>
                            <!-- Quantity inputs -->
                            <td style="display: flex;flex-wrap: nowrap;" class="btn-group">
                                <button type="button" class="btn btn-info increase">+</button>
                                <button type="button" class="btn btn-light"><?php echo $row_best["quantity"]?></button>
                                <button type="button" class="btn btn-info reduction">-</button>
                            </td>
                            <!-- Quantity inputs -->
                            <td class="product-price">
                                <span class="price"><?php echo $row_best["price"]?> eur</span>
                            </td>

                            <!-- Product subtotal -->
                            <td class="product-subtotal">
                                <span class="price"><?php echo $row_best["quantity"]*$row_best["price"]?> eur</span>
                            </td>
                            <!-- Remove from cart link -->
                            <td class="product-remove" id-cart="<?php echo $row_best['ID_C']?>">
                                <a title="Remove this item" class="remove" href><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <?php };?>
                    </tbody>
                </table>
                <div class="text-right">
                    <h3 class="text-success">Total: <?php echo $total?> eur</h3>
                    <button type="button" class="btn btn-success">Buy</button>
                </div>

                
            </form>
            <div class="tzpayment">
                <h3 class="tz-title-bold-3 over-title">CONFIRM YOUR ORDER</h3>
                <span class="payment-title">Paypal Advance</span>
                <ul class="payment-method">
                    <li>
                        <a href="#"><img src="demos/payment1.jpg" alt="payment1"></a>
                    </li>
                    <li>
                        <a href="#"><img src="demos/payment2.jpg" alt="payment2"></a>
                    </li>
                    <li>
                        <a href="#"><img src="demos/payment3.jpg" alt="payment3"></a>
                    </li>
                    <li>
                        <a href="#"><img src="demos/payment4.jpg" alt="payment4"></a>
                    </li>
                    <li>
                        <a href="#"><img src="demos/payment5.jpg" alt="payment5"></a>
                    </li>
                    <li>
                        <a href="#"><img src="demos/payment6.jpg" alt="payment6"></a>
                    </li>
                </ul>
                <p>You can pay by credit card using this payment method</p>
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
    <script src="js/custom.js"></script>
    <script>
         $(".remove").click(function(event) {
            event.preventDefault();
            var Toprice = parseInt($(this).parents("tr").find("td:eq(3)").text().trim().split(" ")[0]);

            var data;
            data = new FormData();
            data.append('delete','');
            data.append('id',  $(this).parents("td").attr('id-cart'));
            $(this).parents("tr").remove();

            $.ajax({
                url: "shop-Checkout.php",
                data: data,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(response) {
                    var obj = JSON.parse(response);
                    if(obj.status){
                        total("delete",Toprice);
                    }
                }
            });
        });

        $(".increase").click(function(event) {
            event.preventDefault();

            var price = parseInt($(this).parents("tr").find("td:eq(3)").text().trim().split(" ")[0]);
            var increase = parseInt($(this).parents("td").find("button:eq(1)").text()) + 1;
            $(this).parents("td").find("button:eq(1)").text(increase);
            $(this).parents("tr").find("td:eq(4)").find("span").text(increase * price + " eur");

            var data;
            data = new FormData();
            data.append('edit','');
            data.append('id',  $(this).parents("tr").find("td:eq(5)").attr('id-cart'));
            data.append('sl',  increase);
            
            $.ajax({
                url: "shop-Checkout.php",
                data: data,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(response) {
                    var obj = JSON.parse(response);
                    if(obj.status){
                        total("increase",price);
                    }
                }
            });

        })

        $(".reduction").click(function(event) {
            event.preventDefault();

            var price = parseInt($(this).parents("tr").find("td:eq(3)").text().trim().split(" ")[0]);
            var reduction = parseInt($(this).parents("td").find("button:eq(1)").text()) - 1;

            if(reduction < 0) return;

            $(this).parents("td").find("button:eq(1)").text(reduction);
            $(this).parents("tr").find("td:eq(4)").find("span").text(reduction * price + " eur");

            var data;
            data = new FormData();
            data.append('edit','');
            data.append('id',  $(this).parents("tr").find("td:eq(5)").attr('id-cart'));
            data.append('sl',  reduction);
            
            $.ajax({
                url: "shop-Checkout.php",
                data: data,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(response) {
                    var obj = JSON.parse(response);
                    if(obj.status){
                        total("reduction",price);
                    }
                }
            });

        })

        function total(calculation,number){
            var total = parseInt($(".text-right").find("h3").text().split(" ")[1]);
            if(calculation == "increase"){  total += number }
            if(calculation == "reduction"){ total -= number }
            if(calculation == "delete"){ total -= number }
            $(".text-right").find("h3").text("Total: "+total+" eur");
        }
    </script>

</body>

<!-- Mirrored from demo.templaza.com/php/dekor/shop-Checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Nov 2014 09:04:16 GMT -->
</html>