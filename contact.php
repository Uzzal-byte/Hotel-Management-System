	<?php include"header.php";?>
<br><br><br><br><br>
	<!-- Contact -->

	<div class="contact1">
		<div class="container">
			<div class="row">
				
				<!-- Contact Content -->
				<div class="col-lg-6">
					<div class="contact_content">
						<div class="contact_title"><h2>Get in touch</h2></div>
						<div class="contact_list">
							<ul>
								<li>87,BNS Center. </li>
								<li>+88 01717 482 848</li>
								<li>info@hotel.com</li>
							</ul>
						</div>
						
					</div>
				</div>

				<!-- Google Map -->
				<div class=" col-lg-6">
					<div class="contact_form_container">
						<form action="" method="post" class="contact_form" id="contact_form">
							
							<div class=" input_container">
								<input type="text" name ="name" class="contact_input" placeholder="Your name" required="required">
							</div>
							<div class="input_container">
								<input type="email" name="email" class="contact_input" placeholder="Your email address" required="required">
							</div>
							<div class="input_container">
								<input type="text" name="mobile" class="contact_input" placeholder="mobile">
							</div>
							<div class="input_container">
								<textarea class="contact_input contact_textarea" placeholder="Message" required="required" name="msg"></textarea>
							</div> 
							<div class="input_container">
								<button class="contact_button" type="submit" name="submit" >Send</button>
							</div>
						</form>
					</div>
					
					<?php
					include"db.php";
					if(isset($_POST["submit"]))
					{
					$name= 	$_POST["name"];
					$email= 	$_POST["email"];
					$mobile= 	$_POST["mobile"];
					$msg= 	$_POST["msg"];
					
					
					$sql1 = "INSERT INTO `contact`
													(`fullname`, `email`, `phoneno`, `msg`) 
																		VALUES ('$name','$email','$mobile','$msg')"; 
												if(mysqli_query($con,$sql1)){
															echo "<div class='alert alert-success'>
											<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
											<b>Message is sent </b>
									</div>";
												}
						
					}
					
					?>
				</div>

			</div>
		</div>
	</div>

	<!-- Footer -->
	
<?php include"footer.php";?>