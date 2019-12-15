

<!DOCTYPE html>
<html>
<head>
	<title>Hotel Management system</title>

	<!-- bootstrap -->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
	<!-- bootstrap theme-->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap-theme.min.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css">

  <!-- custom css -->
  <link rel="stylesheet" href="custom/css/custom.css">	

  <!-- jquery -->
	<script src="assests/jquery/jquery.min.js"></script>
  <!-- jquery ui -->  
  <link rel="stylesheet" href="assests/jquery-ui/jquery-ui.min.css">
  <script src="assests/jquery-ui/jquery-ui.min.js"></script>

  <!-- bootstrap js -->
	<script src="assests/bootstrap/js/bootstrap.min.js"></script>
</head>
<body style=" background-image: url(images/img.jpg);background-size:cover;">
	<div class="container">
		<div class="row vertical">
			<div class="col-md-5 col-md-offset-4">
					<div class="card">
						  <div class="cardHeader">
							
							<h3 style="color:#fff;"> Hotel Management system</h3>
						  </div>

						 
					</div> 
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title"><i class="glyphicon glyphicon-user"></i> &nbsp Please Sign in</h3>
					</div>
					<div class="panel-body">

						<div class="messages">
							<?php 
require_once 'db.php';

session_start();



$errors = array();

if($_POST) {		

	$username = $_POST['username'];
	$password = $_POST['password'];

	if(empty($username) || empty($password)) {
		if($username == "") {
			echo "<b style='color:red;'> Username is required </b>";
		} 

		if($password == "") {
			echo  "<b style='color:red;'>Password is required </b>";
		}
	} else {
		$sql = "SELECT * FROM marchant_login WHERE username = '$username'";
		$result = $con->query($sql);

		if($result->num_rows == 1) {
			$password = $password;
			// exists
			$mainSql = "SELECT * FROM marchant_login WHERE username = '$username' AND password = '$password'";
			$mainResult = $con->query($mainSql);

			if($mainResult->num_rows == 1) {
				$value = $mainResult->fetch_assoc();
				$user_id = $value['id'];
				$name = $value['username'];

				// set session
				
				
				$_SESSION['userId'] = $user_id;
				$_SESSION['name'] = $name;
				
				
				
				
	
	if(isset($_SESSION['userId']) )
					
					{
						header('location: index.php');	
					}
					
	
	
	


				
			} else{
				
				echo  "<b style='color:red;'>Incorrect username/password combination </b>";
			} // /else
		} else {		
			echo "<b style='color:red;'> Username doesnot exists </b>";		
		} // /else
	} // /else not empty username // password
	
} // /if $_POST
?>
						</div>

						<form class="form-horizontal" action="" method="post" id="loginForm">
							<fieldset>
								<div class="form-group">
									<label for="username" class="col-sm-2 control-label">Username</label>
									<label for="password" class="col-sm-1 control-label">:</label>
									<div class="col-sm-9">
									  <input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off" />
									</div>
								</div>
								<div class="form-group">
									<label for="password" class="col-sm-2 control-label">Password</label>
									<label for="password" class="col-sm-1 control-label">:</label>
									<div class="col-sm-9">
									  <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off" />
									</div>
								</div>
                         Not A member? <a href="registration.php" > Register Now </a>								
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
									  <button type="submit" class="btn btn-default"> <i class="glyphicon glyphicon-log-in"></i> Sign in</button>
									</div>
								</div>
							
							</fieldset>
						</form>
						
						
					</div>
					<!-- panel-body -->
					
				</div>
				<!-- /panel -->
				<div class="panel panel-success">
						<div class="panel-heading">
						<center>Copyright@Hotel Management system  <br/>
	  Designed by- Farzana Sultana </center>
						</div>
					</div>
					
				
				
					
			</div>
			<!-- /col-md-4 -->
		</div>
		<!-- /row -->
	</div>
	<!-- container -->	
</body>
</html>







	