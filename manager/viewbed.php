<?php include"header.php";?>
        <!-- /. NAV SIDE  -->
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                          All Rooms 
                        </h1>
                    </div>
                </div> 
                 
                                 
            <?php
						include ('db.php');
						$sql = "SELECT bed.sl_id,bed.bed_no,bed.room_id,bed.status,bed.bed_image,add_room.id,add_room.name,add_room.price from bed INNER JOIN add_room on bed.room_id = add_room.id";
						$re = mysqli_query($con,$sql);
				?>
                <div class="row">
						<div class="panel panel-info">
                        <div class="panel-heading">
                           List of available Rooms
                        </div>
                        <div class="panel-body">
				
				<?php
										while($row= mysqli_fetch_array($re))
										{
												$id = $row['sl_id'];
												$bedname = $row['bed_no'];
												
												$bedstatus = $row['status'];
												
												$image = $row['bed_image'];
												$roomno = $row['name'];
												$price = $row['price'];
												
												
												
											?>
												<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-blue'>
														<div class='panel-body'>
															<img src="../images/bed/<?php echo $image ;?>" height="100x;" width="150px;"/>
															<h3><?php echo $bedname;?></h3><br>
															Room No : <?php echo $roomno;?><br>
															Staus : <?php 
															
															if($bedstatus ==0)
															{ ?>
																<b style="color:green;">  Available  </b>
														<?php	}
															?>
															
															<?php 
															
															if($bedstatus ==1)
															{ ?>
																<b style="color:red;">  Not Available  </b>
														<?php	}
															?><br>
															
															
														</div>
														<div class='panel-footer back-footer-blue'>
															Price: <?php echo $price;?>

														</div>
													</div>
												</div>
												
												
												
												
												
										<?php
										
											
										}
										
										
									?>
                    </div>
					
					</div>
                </div>
                <!-- /. ROW  -->
                
                                
                  
            
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
