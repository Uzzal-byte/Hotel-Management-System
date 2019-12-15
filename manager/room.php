<?php  
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
    <title>SUNRISE HOTEL</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                <a class="navbar-brand" href="home.php">MAIN MENU </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
			
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
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

                  <li>
                        <a class="active-menu" href="viewroom.php"><i class="fa fa-dashboard"></i>Room Status</a>
                    </li>
					 <li>
                        <a class="active-menu" href="viewbed.php"><i class="fa fa-dashboard"></i>Bed Status</a>
                    </li>
					<li>
                        <a  href="room.php"><i class="fa fa-plus-circle"></i>Add room </a>
                    </li>
					<li>
                        <a  href="addbed.php"><i class="fa fa-plus-circle"></i>Add Bed </a>
                    </li>
                    <li>
                        <a   href="delhotel.php"><i class="fa fa-pencil-square-o"></i> Delete Room </a>
                    </li>
					
					 <li>
                        <a   href="delbed.php"><i class="fa fa-pencil-square-o"></i> Delete Bed </a>
                    </li>

                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
       
        
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           NEW ROOM <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-12 col-sm-5">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            ADD NEW ROOM
                        </div>
                        <div class="panel-body"> 
						<form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                            <label>Avialable Hotel*</label>
                                            <select name="hotelname"  class="form-control" required>
												<option value selected >select hotel</option>
												<?php 
												include ('db.php');
						$sql = "select * from hotel";
						$re = mysqli_query($con,$sql);
						while($row= mysqli_fetch_array($re))
										{
												$id = $row['id'];
												$name = $row['name'];
												
												
											?>
						
                                                <option value="<?php echo $id ;?>"> <?php echo $name ;?></option>
                                               
											   <?php
											   
										}
										?>
										
										
                                            </select>
                              </div>
							 <div class="col-md-6">   
							<div class="form-group">
                                            <label>Room name *</label>
                                    <input type="text" name="roomname" class="form-control" value="" placeholder="example: RDA109" required />         
                                            
                             </div>
							</div> 
							 
							  <div class="col-md-6">   
							<div class="form-group">
                                            <label>Bed cost *</label>
                                    <input type="text" name="bedcost" class="form-control" value="" placeholder="enter bed cost" required />         
                                            
                             </div>
							</div> 
							 
							  
							 
							 
							 
							 
							  <div class="col-md-6"> 
							<div class="form-group">
                                            <label>Bed price *</label>
                                    <input type="text" name="price" class="form-control" value="" placeholder="enter hotel name" required />         
                                            
                             </div>
							 
							 </div>
							 
							 <div class="col-md-6"> 
							<div class="form-group">
                                            <label>Room Featured image *</label>
                                    <input type="file" name="image" class="form-control" value="" placeholder="enter location" required />        
                                            
                             </div>
							 
							 </div>
							 
							 
							 
							  <div class="col-md-12"> 
							<div class="form-group">
                                         <center>   <label><h4><b> Room Services </b> </h4> </label> </center> <hr/>
                                <div class="col-md-6">
								
								<label>Free Services</label> <br>
								<div class="form-check">
										
									<input type="checkbox" class="form-check-input" name="wifi" value="yes" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Wifi</label>
								 </div>  
								 
                                


								</div>
								
								<div class="col-md-6">
								<label>paid Services</label> <br>
								
									<div class="col-md-3">
										<div class="form-check">
									
											<input type="checkbox" class="form-check-input" name="ac" value="yes" id="exampleCheck1">
											<label class="form-check-label" for="exampleCheck1">Ac</label>
										</div>
									
									</div>
									<div class="col-md-9">
										<div class="form-group">
                                            <label>Daily charge</label>
												<input type="text" name="ac_price" class="form-control" value="" placeholder="enter price" />        
														
										</div>
									</div>
								
								
								<div class="col-md-3">
										<div class="form-check">
									
											<input type="checkbox" class="form-check-input" name="meal" value="yes" id="exampleCheck1">
											<label class="form-check-label" for="exampleCheck1">Daily meal</label>
										</div>
									
									</div>
									<div class="col-md-9">
										<div class="form-group">
                                            <label>Daily charge</label>
												<input type="text" name="meal_price" class="form-control" value="" placeholder="enter price" />        
														
										</div>
									</div>
								
								  
								<div class="col-md-3">
										<div class="form-check">
									
											<input type="checkbox" class="form-check-input" name="body_massage" value="yes" id="exampleCheck1">
											<label class="form-check-label" for="exampleCheck1">Body massage (spa) </label>
										</div>
									
									</div>
									<div class="col-md-9">
										<div class="form-group">
                                            <label>Daily charge</label>
												<input type="text" name="body_massage_price" class="form-control" value="" placeholder="enter price" />        
														
										</div>
									</div>
								 
								
                                 


								</div>
								 
                             </div>
							  
							 </div>
							 
							 
							 
							 
							 <input type="submit" name="add" value="Add New" class="btn btn-primary"> 
							</form>
							<?php
							 include('db.php');
							 if(isset($_POST['add']))
							 {
										$hotelname = $_POST['hotelname'];
										$roomname = $_POST['roomname'];
										$price = $_POST['price'];
										$bedcost = $_POST['bedcost'];
										
										
										
										
										$wifi = $_POST['wifi'];
										
										$ac = $_POST['ac'];
										$meal = $_POST['meal'];
										$body_massage = $_POST['body_massage'];
										
										$ac_price = $_POST['ac_price'];
										$meal_price = $_POST['meal_price'];
										$body_massage_price = $_POST['body_massage_price'];
										
										
										
										$product_query = "SELECT * FROM add_room WHERE name = '$roomname' ";
	                                         $run_query = mysqli_query($con,$product_query);
											
											$number= mysqli_num_rows($run_query);
										if($number > 0) {
												echo "
															<center> <div class='alert alert-danger'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>This Room already in exist</b>
															</div></center>";
										}

										else
										{
							 
										$errors= array();
										 
										 
										  $file_name = $_FILES['image']['name'];
										  $file_size =$_FILES['image']['size'];
										  $file_tmp =$_FILES['image']['tmp_name'];
										  $file_type=$_FILES['image']['type'];
										  $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
										  
										  $expensions= array("jpeg","jpg","png");
										  
										  if(in_array($file_ext,$expensions)=== false){
											 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
										  }
										  
										  if($file_size > 2097152){
											 $errors[]='File size must be excately 2 MB';
										  }
										  
										  if(empty($errors)==true){
											 move_uploaded_file($file_tmp,"../images/room/".$file_name);
											 echo "success";
										  }else{
											 print_r($errors);
										  }	
										  
										  
										  
										  
										  
										  
										  
										 
										  
										  
										$sql ="INSERT INTO `add_room`( `name`, `hotel_id`,`price`, `wifi`,`ac`,`ac_per_day`, `body_message`,`body_message_per_day`, `meal`,`meal_per_day`,`image`,`bedcost`) VALUES ('$roomname','$hotelname','$price','$wifi','$ac','$ac_price','$body_massage','$body_massage_price','$meal','$meal_price','$file_name','$bedcost')" ;
										if(mysqli_query($con,$sql))
										{
										 echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>This Room added successfullly</b>
															</div></center>";
										}else {
											 echo "
															<center> <div class='alert alert-info'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Room add failed</b>
															</div></center>";
										}
							 }
							}
							
							?>
                        </div>
                        
                    </div>
                </div>
                
                  
            
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
