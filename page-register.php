<?php
    session_start();
    ob_start();
    include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dekor - Register</title>
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
    <section class="tzpage-default">
        <h3 class="tz-title-bold-3">USER PAGES</h3>
        <div class="container">
            <nav class="joom-controller joom-controller-style2">
                <ul>
                    <li><a href="page-login.php">LOG IN</a></li>
                    <li class="active"><a href="page-register.php">REGISTER</a></li>
                    <!-- <li><a href="page-remindUser.php">CHANGE PASSWORD</a></li>
                    <li><a href="page-EditUserProfile.php">EDIT USER PROFILE</a></li> -->
                </ul>
            </nav>
            <div class="joom-registration">
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <h4 class="joom-title">YOUR PERSONAL DETAILS</h4>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <label>First Name: *</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <input type="text" value="" name="first"> <!-- <?php echo $_POST['first'] ?> -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <label>Last Name: *</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <input type="text" value="" name="last">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <label>E-Mail: *</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <input type="email" value="" name="email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <label>Telephone: *</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <input type="text" value="" name="telephone">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <label>Address:</label>
                                        
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <!-- <input type="text" value="" name="address"> -->
                                        <select name="address" style="width: 335px;height: 30px;">
                                            <option>Select Address</option>
                                            <?php
                                                $sql_option="select * from address";
                                                $run_option=mysqli_query($conn,$sql_option);
                                                while($row_option=mysqli_fetch_array($run_option))
                                                {
                                             ?>
                                             <option value="<?php echo $row_option['Address'];?>">
                                             <?php echo $row_option['Address']; ?>
                                             </option>
                                             <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <p class="form-ds">I have read and agree to the Privacy Policy </p>
                            </div><!--end class 6-->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <h4 class="joom-title">YOUR AVATAR</h4>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <label>Upload Avatar</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <input type="file" name="img">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <label>Description:</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                        <input type="text" value="" name="description">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <label>Password:</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                        <input type="password" value="" name="pass">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <label>Repassword:</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                        <input type="password" value="" name="repass">
                                    </div>
                                </div>
                                <div class="controls">
                                    <button class="btn btn-primary" type="submit" name="ok"> REGISTER</button>
                                </div>
                            </div><!--end class 6-->
                            <?php
    include('connect.php');
    if(isset($_POST['ok']))
    {
        $firstname=$_POST["first"];
        $lastname=$_POST["last"];
        $email=$_POST["email"];
        $telephone=$_POST["telephone"];
        $address=$_POST["address"];
        $pass=$_POST["pass"];
        $repass=$_POST["repass"];
        $discription=$_POST["description"];
        // $img=$_POST["img"];
        if(empty($firstname) || empty($lastname) || empty($email) || empty($telephone) || empty($pass))
        {
            echo "Chưa nhập dữ liệu";
        }
        else
        {

            //kiem tra email trung nhau
            $sql_checkemail = "select * from register where email ='$email'";
            $run_checkemail = mysqli_query($conn,$sql_checkemail);
            $row=mysqli_fetch_array($run_checkemail);
            if ($row['email'] == $email) echo "<script>alert('Email đã tồn tại')</script>";
            else
                {
                    if($pass==$repass)
                    {
                        //upload anh
                        $tmp=$_FILES['img']['tmp_name'];
                        $name=$_FILES['img']['name'];
                        $upload=move_uploaded_file($tmp,'img/'.$name);
                        $sql="insert into register (firstname,lastname,email,telephone,address,pass,discription,img)
                        values('$firstname','$lastname','$email','$telephone','$address','$pass','$discription','$name')";
                        $sql_dn="insert into login (Name, Password) values('$email','$pass')";
                        $run_dn=mysqli_query($conn,$sql_dn);
                        $run=mysqli_query($conn,$sql);

                        if($run)

                        {  
                                            
                            if($run_dn) {   
                                            
                                            // echo '<script language="javascript">';
                                            // echo 'alert("Thêm mới thành công!")';
                                            // echo '</script>';
                                            // header("location: exit.php");
                                            header("location: page-login.php");
                                            // echo "<script>alert('Thêm mới thành công!')</script>";
                                        }
                        }
                        else 
                        {
                            echo "Không thêm mới dược!";
                        }
                    }
                    else
                    {
                        echo  "Nhập lại mật khẩu không chính xác";
                    }
                
                } 
        }
    }
ob_end_flush();
?>
                    </div><!--end class row-->
                </form>
            </div><!--end class joom-->
        </div><!--end class container-->
    </section><!--end class page default-->
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
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/off-canvas.js"></script>
    <script src="js/resize.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.easypiechart.min.js"></script>
    <script src="js/custom.js"></script>
</body>

<!-- Mirrored from demo.templaza.com/php/dekor/page-register.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Nov 2014 09:04:38 GMT -->
</html>