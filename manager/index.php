<?php  
 session_start();  
 if(isset($_SESSION["user"]))  
 {  
      header("location:home.php");  
 }  
 
 ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Hotel Reservation</title>
  
  
     
      <link rel="stylesheet" href="css/style.css">
	   <link rel="stylesheet" href="css/bootstrap.min.css">

  
</head>

<body>
  <div id="clouds">
	<div class="cloud x1"></div>
	<!-- Time for multiple clouds to dance around -->
	<div class="cloud x2"></div>
	<div class="cloud x3"></div>
	<div class="cloud x4"></div>
	<div class="cloud x5"></div>
</div>

 <div class="container">
 
 
 
 
 
 
 
	<div class="container">
		<div class="row vertical">
			<div class="col-md-5 col-md-offset-4">
					<div class="card">
						  <div class="cardHeader">
												
							<h3 style="color:green;text-align:center;margin-left:60px;">Manager Login</h3>
						  </div>

						 
					</div> 
				<div class="panel panel-primary" style="width:600px;">
					<div class="panel-heading">
						<h3 class="panel-title" style="color:skyblue;"><i class="glyphicon glyphicon-user"></i> &nbsp Please Sign in</h3>
					</div>
					<div class="panel-body">

						
					
						<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="loginForm">
							<fieldset>
								<div class="form-group">
									<label for="username" class="col-sm-2 control-label">Username</label>
									<label for="password" class="col-sm-1 control-label">:</label>
									<div class="col-sm-9">
									  <input type="text" class="form-control" id="username" name="user" placeholder="Username" autocomplete="off" />
									</div>
								</div>
								<div class="form-group">
									<label for="password" class="col-sm-2 control-label">Password</label>
									<label for="password" class="col-sm-1 control-label">:</label>
									<div class="col-sm-9">
									  <input type="password" class="form-control" id="password" name="pass" placeholder="Password" autocomplete="off" />
									</div>
								</div>							
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
									  <button type="submit" class="btn btn-default"style="background-color:skyblue;color:white;width:120px;" name="sub">Login in</button>
									</div>
								</div>
							
							</fieldset>
						</form>
						
						
					</div>
					<!-- panel-body -->
					
				</div>
				<!-- /panel -->
				<div class="panel panel-info" style="width:600px;">
						<div class="panel-heading">
						<center>Copyright @room sharing<br/>
	 </center>
						</div>
					</div>
					
				
				
					
			</div>
			<!-- /col-md-4 -->
		</div>
		<!-- /row -->
	</div>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 


       <!-- end login -->

    </div>
    
  
  
</body>
</html>

<?php
   include('db.php');
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['user']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pass']); 
      
      $sql = "SELECT id FROM login WHERE usname = '$myusername' and pass = '$mypassword' and type = '0'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['user'] = $myusername;
         
         header("location: home.php");
      }else {
         echo '<script>alert("Your Login Name or Password is invalid") </script>' ;
      }
   }
?>
