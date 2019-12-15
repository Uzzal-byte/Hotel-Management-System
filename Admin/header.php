<?php 
include ('db.php'); 
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	
	<style>
	.drplist{
	background-color:#70707a;	
	padding-left:10px;	
	color:#fff;	
	}
	
	.drplist:hover{
	background-color:green;	
	padding-left:10px;	
	color:#fff;	
	}
	li:hover{
		background-color:#938367;
	}
	</style>

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"> Admin </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
					<div class="sidebar-collapse">
						<ul class="nav" id="main-menu">
							<li><a class="active-menu" href="home.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
							<li><a href="monitoring.php"><i class="fa fa-bar-chart-o"></i>Manage User Details</a></li>
							<li>
									<a href="hotel.php"><i class="fa fa-desktop"></i> Room Management </a>
									<ul>
											<a href="viewhotel.php">
													<li class="drplist">
															View Hotels
													</li>
											</a>

											<a href="addhotel.php">
													<li class="drplist">
															Add Hotel
													</li>
											</a>

											<a href="viewroom.php">
													<li class="drplist">
															View Rooms
													</li>
											</a>

											<a href="room.php">
													<li class="drplist">
															Add Rooms
													</li>
											</a>

											<a href="roomdel.php">
													<li class="drplist">
															Delete Rooms
													</li>
											</a>

											<a href="viewbed.php">
													<li class="drplist">
															View Beds
													</li>
											</a>
											<a href="addbed.php">
													<li class="drplist">
															Add beds
													</li>
											</a>
											<li class="drplist" >
									<a href="booking.php" style="color:white;"> Bed-Room Booking</a>
							</li>

									</ul>

							</li>
							
							<li><a href="cus_bill.php"><i class="fa fa-bar-chart-o"></i> Manage user bill </a></li>
							<li><a href="marchants.php"><i class="fa fa-bar-chart-o"></i> Manage Employee </a></li>

							<li>
									<a href="criminal.php"><i class="fa fa-bar-chart-o"></i> Manage security</a>
									<ul>
											<a href="viewcriminal.php">
													<li class="drplist">
															View criminals
													</li>
											</a>
											<a href="addcriminal.php">
													<li class="drplist">
															Add criminal to list
													</li>
											</a>
									</ul>
							</li>

							
							<li>
									<a href="checkout.php"><i class="fa fa-bar-chart-o"></i> Recent Checkin & Checkout</a>
							</li>
							<li>
									<a href="cus_bill.php"><i class="fa fa-bar-chart-o"></i> Report</a>
									
							</li>
							
							<li><a href="account.php"><i class="fa fa-bar-chart-o"></i> accounts </a></li>
							<li>
									<a href="messages.php"><i class="fa fa-bar-chart-o"></i> message</a>
							</li>
							<li>
									<a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
							</li>
						</ul>
					</div>
        </nav>