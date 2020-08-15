<?php
session_start();
?>
<?php
include('connect.php');
if(isset($_POST['ok']))
{
	$_SESSION['email']= $_POST['txtname'];
	$ten=$_POST["txtname"];
	$pass=$_POST["txtpass"];
	if(empty($ten) || empty($pass))
	{
		echo "Chưa nhập dữ liệu";
	}
	else
	{
		$sql="select * from login where Name = '$ten'";
		$run=mysqli_query($conn,$sql);
		$num=mysqli_num_rows($run);
		if ($num==1)
		{
			$row = mysqli_fetch_array($run);
			$ad=$row['Name'];
			$pw=$row['Password'];   
			if ($pass==$pw) 
			{
				if ($ad=='admin')
				{
					header('location:index.php');
				}
				else
				{
					header('location:shop-fullwidth.php');
				}
			}
			else echo "Sai mật khẩu";
		}
		else echo "Sai tên đăng nhập!";
	}
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dekor - Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="fonts/awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300,100,200,800" rel="stylesheet" />
	<link href="css/owl.carousel.css" rel="stylesheet" />
	<link href="css/owl.theme.css" rel="stylesheet" />
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
					<li>
						<a href="#">Pages</a>
						<div class="nav-child dropdown-menu mega-dropdown-menu">
							<div class="mega-dropdown-inner">
								<div class="row">
									<div data-width="12" class="col-md-12 mega-col-nav">
										<div class="mega-inner">
											<ul class="mega-nav level1">
												<li>
													<a href="page-EditUserProfile.php">Edit User Profile</a>
												</li>
												<li>
													<a href="page-login.php">Login</a>
												</li>
												<li>
													<a href="page-register.php">Register</a>
												</li>
												<li>
													<a href="page-remindUser.php">Remind User</a>
												</li>
												<li>
													<a href="page-weblink.php">Weblink</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
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
					<li class="active"><a href="page-login.php">LOG IN</a></li>
					<li><a href="page-register.php">REGISTER</a></li>
					<li><a href="page-remindUser.php">REMIND USERNAME</a></li>
					<li><a href="#">RESET PASS</a></li>
					<li ><a href="page-EditUserProfile.php">EDIT USER PROFILE</a></li>
				</ul>
			</nav>
			<div class="joom-login">
				<h4 class="joom-title">YOUR ADDRESS</h4>
				<p>I am a returning customer</p>
				<div class="row">
					<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
						<form class="form-horizontal" method="post">
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
									<label>Username:</label>
								</div>
								<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
									<input type="text" value="" name="txtname">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
									<label>Password:</label>
								</div>
								<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
									<input type="password" value="" name="txtpass">
								</div>
							</div>
							<div class="controls">
								<button class="btn btn-primary" type="submit" name="ok"> Log in</button>
							</div>
						</form>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
						<ul class="joom-form-meta">
							<li><a href="#">Forgotten Password?</a></li>
							<li><a href="#">Forgot your username?</a></li>
							<li><a href="page-register.php">Don’t have an account?</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
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
<!-- Mirrored from demo.templaza.com/php/dekor/page-login.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Nov 2014 09:04:38 GMT -->
</html>