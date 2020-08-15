<?php 
    session_start();
    include('connect.php');
    if(empty($_SESSION['user']))
    {
        header('location: page-login.php');
    }
    else
    {
        $email=$_SESSION['user'];
    }

?>
<!DOCTYPE html>
<html>

<!-- Mirrored from demo.templaza.com/php/dekor/page-EditUserProfile.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Nov 2014 09:04:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dekor - Edit User Profile</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="fonts/awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300,100,200,800" rel="stylesheet" />
    <link href="css/owl.carousel.css" rel="stylesheet" />
    <link href="css/owl.theme.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<style>
.inputfile {
    /* width: 0.1px;
    height: 0.1px;
    opacity: 0; */
    overflow: hidden;
    position: absolute;
    z-index: -1;
}
.inputfile + label {
    font-size: 1.25em;
    font-weight: 700;
    color: white;
    /* background-color: black; */
    display: inline-block;
    cursor: pointer;
}

/* .inputfile:focus + label,
.inputfile + label:hover {
    background-color: red;
} */
</style>
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

    <section class="tzpage-user-profile">
        <h3 class="tz-title-bold-3">USER PAGES</h3>
        <div class="container">
            <nav class="joom-controller">
                <ul>
                 <!--    <li><a href="page-login.php">LOG IN</a></li>
                    <li><a href="page-register.php">REGISTER</a></li> -->
                    <li><a href="page-remindUser.php">CHANGE PASSWORD</a></li>
                    <li class="active"><a href="page-EditUserProfile.php">EDIT USER PROFILE</a></li>
                </ul>
            </nav>
        </div><!--end class container-->
        <div class="joom-userprofiler">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="user-info">
                            <h3>ABOUT ME</h3>
                            <?php
                                    
                                    $sql= "select * from  register where email = '$email'" ;
                                    $run=mysqli_query($conn, $sql);
                                    while($row=mysqli_fetch_array($run))
                                    {
                            ?>
                            <form method="post">
                                    <input type="text" style="border: none;" value ="<?php echo $row['discription'] ?>" name='txtdis'>
                                    <span class="entry-meta">
                                    
                                    <button type="submit" name="ok_save" style=" width: 80px; height: 22px;" ><i class="fas fa-pencil-alt"></i>SAVE</button>
                            </span>
                            </form>
<?php 
if(isset($_POST['ok_save']))
{ 
        $discription=$_POST['txtdis'];
        $sql="update register set discription ='$discription' where email='$email'";
        $run=mysqli_query($conn, $sql);
        if ($run) {
                header('location:page-EditUserProfile.php');
             }     
}
?>
                            <?php }?>
                            
                        </div>
                        <div class="user-interest">
                            <h6>INTEREST </h6>
                             <div class="user-interest-attr">
                                 <ul>
                                     <li>
                                         <i class="fa fa-chevron-circle-down"></i> <a href="#">Furniture</a>
                                     </li>
                                     <li>
                                         <i class="fa fa-chevron-circle-down"></i> <a href="#">Office</a>
                                     </li>
                                     <li>
                                         <i class="fa fa-chevron-circle-down"></i> <a href="#">Chairs</a>
                                     </li>
                                 </ul>
                                 <ul>
                                     <li>
                                         <i class="fa fa-chevron-circle-down"></i> <a href="#">Tables</a>
                                     </li>
                                     <li>
                                         <i class="fa fa-chevron-circle-down"></i> <a href="#">Accessories</a>
                                     </li>
                                 </ul>
                             </div>
                             <span class="entry-meta">
                                <i class="fas fa-pencil-alt"></i>
                                <a href="#"> Edit</a>
                            </span>
                        </div>
                        <div class="user-photo">
                            <h6>PHOTOS</h6>
                            <ul>
                                <li>
                                    <img src="demos/user-photo1.jpg" alt="photo1">
                                </li>
                                <li>
                                    <img src="demos/user-photo2.jpg" alt="photo2">
                                </li>
                                <li>
                                    <img src="demos/user-photo3.jpg" alt="photo3">
                                </li>
                                <li>
                                    <img src="demos/user-photo4.jpg" alt="photo4">
                                </li>
                                <li>
                                    <img src="demos/user-photo5.jpg" alt="photo5">
                                </li>
                                <li>
                                    <img src="demos/user-photo1.jpg" alt="photo6">
                                </li>
                                <li>
                                    <img src="demos/user-photo2.jpg" alt="photo7">
                                </li>
                                <li>
                                    <img src="demos/user-photo4.jpg" alt="photo8">
                                </li>
                            </ul>
                        </div>
                    </div><!--end class 9-->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="TzUserProfiler">
                            <!-- <img src="demos/team3.jpg" alt="name is dekor"> -->
<?php 
        $sql= "select * from  register where email = '$email'";
        $run=mysqli_query($conn, $sql);
        while($row=mysqli_fetch_array($run))
        {       
?>             
            <form method="post" enctype="multipart/form-data">
                <input type="file" name="file" id="file" class="inputfile" />
                <label for="file"><img src="img/<?php echo $row['img'] ?>"></label>
                <span class="entry-meta">
                <button type="submit" name="ok" style="margin-left: 80px; width: 120px; height: 30px;" ><i class="fas fa-pencil-alt"></i>SAVE</button>
                </span>
            </form>
<?php 
if(isset($_POST['ok']))
{ 
        $tmp=$_FILES['file']['tmp_name'];
        $name=$_FILES['file']['name'];
        $upload=move_uploaded_file($tmp, 'img/'.$name);
        $sql="update register set img='$name' where email='$email'"; echo $sql;
        $run=mysqli_query($conn, $sql);
        if ($run) {
                header('location:page-EditUserProfile.php');
             }     
}
?>
                <h6 style="padding-left: 80px; "><?php echo $row['firstname'];echo' ';echo $row['lastname'] ;?></h6>
                <p style="padding-left: 80px;">
                    <?php echo $row['address'] ;?>
                    <span><?php echo $row['telephone']; ?></span>
                </p>
<?php }?>
                           <!--  <ul>
                                <li>
                                    <i class="fa fa-chevron-circle-down"></i> <a href="#">Furniture</a>
                                </li>
                                <li>
                                    <i class="fa fa-chevron-circle-down"></i> <a href="#">Office</a>
                                </li>
                                <li>
                                    <i class="fa fa-chevron-circle-down"></i> <a href="#">Chairs</a>
                                </li>
                            </ul> -->
                             <span class="entry-meta">
                                 <i class="fas fa-pencil-alt"></i>
                                <a href="#"> Edit</a>
                            </span>
                            <div class="contact-button">
                                <a href="#">CONTACT ME</a>
                            </div><!--end class contact-button-->
                        </div><!--end class user-avata-->
                    </div><!--end class 3-->
                </div><!--end class row-->
            </div><!--end class container-->
        </div><!--end joomEdit-->
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

<!-- Mirrored from demo.templaza.com/php/dekor/page-EditUserProfile.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Nov 2014 09:04:38 GMT -->
</html>