<?php session_start();
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="fonts/awesome/css/font-awesome.min.css" rel="stylesheet" />
  <link href="http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300,100,200,800" rel="stylesheet" />
  <link href="css/owl.carousel.css" rel="stylesheet" />
  <link href="css/owl.theme.css" rel="stylesheet" />
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <link href="style.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./add_address.php">
              <i class="nc-icon nc-bank"></i>
              <p>ADD Address</p>
            </a>
          </li>
          <li class="active ">
            <a href="./user.php">
              <i class="nc-icon nc-single-02"></i>
              <p>Product</p>
            </a>
          </li>
          <li>
            <a href="./tables.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Table List</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">



     <section class="tzportfolio-wrap">
        <div class="container">
            <h3 class="tz-title-portfolio">
                PRODUCTS
            </h3>
            <div data-option-key="filter" class="tzfilter">
                <a class="selected" data-option-value="*" href="#show-all">All</a>
                <a data-option-value=".chair" href="#">CHAIR</a>
                <a data-option-value=".lounge" href="#">LOUNGE</a>
                <a data-option-value=".sofa" href="#">SOFA</a>
                <a data-option-value=".accessories" href="#">ACCESSORIES</a>
            </div>
            <div class="tzportfolio-pages tz-no-mansory">
                            
<!-- bat dau sua tu day -->
<?php
        
        $sql= "select * from  product where category = 'chair'" ;
        $run=mysqli_query($conn, $sql);
        while($row=mysqli_fetch_array($run))
        {
?>
                <div class="element chair ">
                    <div class="tz-inner">
                        <div class="tz-image-item">
                            <!-- <img alt="Aliquam a sollicitudin" src="demos/portfolio/portfolio-grid-4.jpg"> -->
                                    
                            <img alt="Aliquam a sollicitudin" src="demos\portfolio/<?php echo $row['picture'] ?>">
                            <a href="single-portfolio-full-width-slider.php" class="tzfa-search"><i class="fa fa-search"></i></a>
                            <a href="#" class="tzfa-heart"><i class="fa fa-heart"></i></a>
                        </div>
                        <h6><a href="single-portfolio-full-width-slider.php">Aliquam a sollicitudin</a></h6>
                        <span style="text-decoration: none;">
                          <a href="edit_sp.php?sua=<?php echo $row['p_ID']; ?>">Edit</a>
                          <a href="delete_product.php?xoa=<?php echo $row['p_ID']; ?>">Remove</a>
                        </span>
                    </div>
                </div>
<?php }?>
                            <?php
                                    
                                    $sql= "select * from  product where category = 'lounge'" ;
                                    $run=mysqli_query($conn, $sql);
                                    while($row=mysqli_fetch_array($run))
                                    {
                            ?>
                <div class="element lounge">
                    <div class="tz-inner">
                        <div class="tz-image-item">
                            <!-- <img alt="Phasellus blandit enim" src="demos/portfolio/portfolio-grid-4-1.jpg"> -->
                                    
                                        <img alt="Aliquam a sollicitudin" src="demos\portfolio/<?php echo $row['picture'] ?>">    
                                
                            
                            <a href="single-portfolio-full-width-slider.php" class="tzfa-search"><i class="fa fa-search"></i></a>
                            <a href="#" class="tzfa-heart"><i class="fa fa-heart"></i></a>
                        </div>
                        <h6><a href="single-portfolio-full-width-slider.php">Aliquam a sollicitudin</a></h6>
                        <span style="text-decoration: none;">
                          <a href="edit_sp.php?sua=<?php echo $row['p_ID']; ?>">Edit</a>
                          <a href="delete_product.php?xoa=<?php echo $row['p_ID']; ?>">Remove</a>
                        </span>
                        
                    </div>
                </div>
<?php }?>
<?php
                    
                    $sql= "select * from  product where category = 'sofa'" ;
                    $run=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($run))
                    {
            ?>
                <div class="element sofa">
                     
                    <div class="tz-inner">
                        <div class="tz-image-item">
                            <!-- <img alt="Curabitur in fermentum" src="demos/portfolio/portfolio-grid-4-2.jpg"> -->
                           
                                    
                                        <img alt="Aliquam a sollicitudin" src="demos\portfolio/<?php echo $row['picture'] ?>">    
                                
                            
                            <a href="single-portfolio-full-width-slider.php" class="tzfa-search"><i class="fa fa-search"></i></a>
                            <a href="#" class="tzfa-heart"><i class="fa fa-heart"></i></a>
                        </div>
                        <h6><a href="single-portfolio-full-width-slider.php">Curabitur in fermentum</a></h6>
                        <span style="text-decoration: none;">
                          <a href="edit_sp.php?sua=<?php echo $row['p_ID']; ?>">Edit</a>
                          <a href="delete_product.php?xoa=<?php echo $row['p_ID']; ?>">Remove</a>
                        </span>
                    </div>
                
                </div>
<?php }?>


<?php
    
    $sql= "select * from  product where category = 'accessories'" ;
    $run=mysqli_query($conn, $sql);
    while($row=mysqli_fetch_array($run))
    {
?>
                <div class="element accessories">
                    <div class="tz-inner">
                        <div class="tz-image-item">
                            <!-- <img alt="Nullam viverra enim" src="demos/portfolio/portfolio-grid-4-3.jpg"> -->
                            <img alt="Aliquam a sollicitudin" src="demos\portfolio/<?php echo $row['picture'] ?>">
                            <a href="single-portfolio-full-width-slider.php" class="tzfa-search"><i class="fa fa-search"></i></a>
                            <a href="#" class="tzfa-heart"><i class="fa fa-heart"></i></a>
                        </div>
                        <h6><a href="single-portfolio-full-width-slider.php">Nullam viverra enim </a></h6>
                        <span style="text-decoration: none;">
                          <a href="edit_sp.php?sua=<?php echo $row['p_ID']; ?>">Edit</a>
                          <a href="delete_product.php?xoa=<?php echo $row['p_ID']; ?>">Remove</a>
                        </span>
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

  </div>
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
      <!--   Core JS Files   -->
      <script src="../assets/js/core/jquery.min.js"></script>
      <script src="../assets/js/core/popper.min.js"></script>
      <script src="../assets/js/core/bootstrap.min.js"></script>
      <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
      <!--  Google Maps Plugin    -->
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
      <!-- Chart JS -->
      <script src="../assets/js/plugins/chartjs.min.js"></script>
      <!--  Notifications Plugin    -->
      <script src="../assets/js/plugins/bootstrap-notify.js"></script>
      <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
      <script src="../assets/demo/demo.js"></script>
    </body>

    </html>