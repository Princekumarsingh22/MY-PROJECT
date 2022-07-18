<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from pixelgeeklab.com/html/realestast/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Sep 2018 16:01:11 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Flatize - Shop HTML5 Responsive Template">
	<meta name="author" content="pixelgeeklab.com">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- title image -->
    
	<title>SQUAT - Real Estate</title>
	<link rel="icon" href="images/logo.png" type="image">

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Libs CSS -->
	<link href="css/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css" media="screen">
	<link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css" media="screen">
	<link rel="stylesheet" href="vendor/flexslider/flexslider.css" media="screen">
	<link rel="stylesheet" href="vendor/chosen/chosen.css" media="screen">

	<!-- Theme -->
	<link href="css/theme-animate.css" rel="stylesheet">
	<link href="css/theme-elements.css" rel="stylesheet">
	<link href="css/theme-blog.css" rel="stylesheet">
	<link href="css/theme-map.css" rel="stylesheet">
	<link href="css/theme.css" rel="stylesheet">
	
	<!-- Style Switcher-->
	<link rel="stylesheet" href="style-switcher/css/style-switcher.css">
	<link href="css/colors/red/style.html" rel="stylesheet" id="layoutstyle">

	<!-- Theme Responsive-->
	<link href="css/theme-responsive.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<header>
	<div id="top">
		<div class="container">
			<p class="pull-left text-note hidden-xs"><i class="fa fa-phone"></i> Need Support? +91 9304574542</p>
			<ul class="nav nav-pills nav-top navbar-right">
						<li class="login"><a href="login.php"><i class="fa fa-user"></i></a></li>
						<li><a href="mailto:squat931@gmail.com" title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Email"><i class="fa fa-envelope-o"></i></a></li>
						<li><a href="https://m.facebook.com/111371964977205/" title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.instagram.com/squat6999/" title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Google+"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://www.google.com/" title="" data-placement="bottom" data-toggle="tooltip" data-original-title="Google+"><i class="fa fa-google-plus"></i></a></li>	
					</ul>
		</div>
	</div>
			<nav class="navbar navbar-default pgl-navbar-main" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
						<a class="logo" href="index.php"><img src="images/logo.png" height="90px" alt="Flatize"></a> </div>
					
					<div class="navbar-collapse collapse width">
						<ul class="nav navbar-nav pull-right">
							<li class="dropdown active"><a href="index.php" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
								<!-- <ul class="dropdown-menu">
									<li><a href="index-map.html">Home Map</a></li>
									<li class="active"><a href="index.html">Home Slider</a></li>
								</ul> -->
							</li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Service</a>
								<ul class="dropdown-menu">
									<li><a href="buy.php">Buy</a></li>
									<li><a href="rent.php">Rent</a></li>
									<li><a href="sell.php">Sell</a></li>
								</ul>
							</li>
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Properties</a>
								<ul class="dropdown-menu">
									<li><a href="3-BHK-Flat.php">3 BHK Flat </a></li>
									<li><a href="4-BHK-flat.php">4 BHK flat</a></li>
									<li><a href="property-details.php">Property Detail</a></li>
								</ul>
							</li>
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Agents</a>
								<ul class="dropdown-menu">
									<li><a href="ouragents.php">Our Agents</a></li>
								</ul>
							</li>
							<li><a href="contact.php">Contact Us</a></li>
							
							<li class="dropdown">
								<a class="dropdown-toggle" style="background: #fff; color: grey;" data-toggle="dropdown">
								<?php
								if(isset($_SESSION['auth']))
								{
									echo $_SESSION['auth_user']['user_name'];
								}
								else
								{
									echo "NOt Logged in";
								}
									?>

								</a>
								<ul class="dropdown-menu">
									<li><a href="signup.php">Signup</a></li>
									<li><a href="admin/index.php">Admin</a></li>
									<li><a><form action="code.php" method="post">
										<button type="submit" class="dropdown-item btn btn-dark" style="background:#151515; color:white;" name="logout_btn">Logout</button>
									</form></a></li>
								</ul>
							</li>	
						</ul>
					</div><!--nav-collapse -->
				</div><!--/.container-fluid --> 
			</nav>
		</header>