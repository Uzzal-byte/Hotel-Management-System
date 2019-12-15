<?php include"db.php";  session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Hotel Management system</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The River template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
			<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
				<nav class="main_nav">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li><a href="index.php">Home </a></li>
						<li><a href="about.php">About Us </a></li>						
						<li><a href="contact.php">Contact Us </a></li>
					</ul>
				</nav>
				
				<?php
				if(isset($_SESSION["userId"]))
				{ ?>
			     <div class="book_button"><a href="dashboard.php">Dashboard</a></div>
				<div class="book_button"><a href="logout.php">Logout</a></div>	
				<?php }
				?>
				
				<?php
				if(!isset($_SESSION["userId"]))
				{ ?>
				<div class="book_button"><a href="login.php">user Profile</a></div>	
				<div class="book_button"><a href="admin/home.php">Admin login</a></div>	
				
				<?php }
				?>
				
				

				<!-- Hamburger Menu -->
				<div class="hamburger"><i class="fa fa-bars" aria_hidden="true"></i></div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	