<?php include"header.php";?>

<style>
	
	.nav-tabs { border-bottom: 2px solid #DDD; }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
    .nav-tabs > li > a { border: none; color: #ffffff;background: #5a4080; }
        .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none;  color: #5a4080 !important; background: #fff; }
        .nav-tabs > li > a::after { content: ""; background: #5a4080; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
    .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
.tab-nav > li > a::after { background: ##5a4080 none repeat scroll 0% 0%; color: #fff; }
.tab-pane { padding: 15px 0; }
.tab-content{padding:20px}
.nav-tabs > li  {width:20%; text-align:center;}
.card {background: #FFF none repeat scroll 0% 0%; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); margin-bottom: 30px; }
body{ background: #EDECEC; }

@media all and (max-width:724px){
.nav-tabs > li > a > span {display:none;}	
.nav-tabs > li > a {padding: 5px 5px;}
}

	
	
	</style>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header" style="color:green;">
                            Welcome To  Dashboard
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
				<span style="float:right;"> <a href="" data-toggle = "modal" data-target="#new" class="btn btn-warning">Add New Cost</a><a href="report.php"class="btn btn-primary"> View Selling report</a></span>
					<div class="row">
                <div class="col-md-12">
				
				
				
				
				<div class="card">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-home"></i>  <span>profit from selling</span></a></li>
          <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-user"></i>  <span>All cost</span> </a></li>
         
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="home">
		  
					  	
							 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
      <tr>
        <th>SL</th>
        <th>Customer name</th>
        <th>Marchants name</th>
		<th>checkin</th>
		<th>checkout</th>
		<th>bed cost </th>
		<th>bed price </th>
		
		<th>Profit</th>
		
      </tr>
    </thead>
    <tbody>

							<?php
									$sl = 0;
									$profit = 0;
									$netprofit = 0;
									$tsql = "select * from booking where statas BETWEEN 1 AND 2 ";
									$tre = mysqli_query($con,$tsql);
									while($row=mysqli_fetch_array($tre) )
									{	
										$id = $row['id'];
										$cusname = $row['cus_name'];
										
										$mobile = $row['mobile'];
										$image = $row['image'];
										$bedno = $row['bed_no'];
										$checkin = $row['check_in'];
										$checkout = $row['check_out'];
										$accnmbr = $row['account_number'];
										$tnxid = $row['transaction_id'];
										$user_id = $row['user_id'];
										$status = $row['statas'];
										$total = $row['total'];
										$bed_id =$row['bed_id'];
										$date =$row['date'];
										$date =$row['date'];
										$sl++;
										
										
										
										$sql = "select * from bed where sl_id = '$bed_id' ";
									$re = mysqli_query($con,$sql);
									while($row=mysqli_fetch_array($re) )
									{	
										$bid = $row['sl_id'];
										
										
										$broomid = $row['room_id'];
										
										
										
										
										
										$rsql = "select * from add_room where id = '$broomid' ";
									$rre = mysqli_query($con,$rsql);
									while($row=mysqli_fetch_array($rre) )
									{	
										$rbid = $row['id'];
										
										
										$brroomid = $row['bed_cost'];
										
										
										
									?>
							
							
							
										  <tr>
											<td><?php echo $sl; ?></td>
											
											<td><?php echo $cusname; ?></td>
											<td>1</td>
											<td><?php echo $checkin; ?></td>
											<td><?php echo $checkout; ?></td>
											<td><?php echo $brroomid; ?></td>
											<td><?php echo $total; ?></td>
											
											<td>
										
											<?php 
											$profit = ($total - $brroomid);
											
											$netprofit = $netprofit + $profit;
											echo $profit."TK";
											
											?></td>
											
											
										  </tr>
										  
							
							
							<?php
									}
									}
		}
							
							?>
				
					
					 </tbody>
  </table>
		 <center> <h3>  Net profit : BDT <?php echo $netprofit; ?> </h3> </center>
		  
		  </div>
          <div role="tabpanel" class="tab-pane" id="profile">
		  
		  
		  
		  			
							<table class="table">
										<thead>
										  <tr>
										  <th>SL</th>
											<th>Date</th>
											<th>Expenses type</th>
											<th>Amount</th>
											
											
										  </tr>
										  
										</thead>
								<tbody>
								
								
								<?php
								
								$totalcost = 0;
								$product_query = "SELECT * FROM cost  ";
								$run_query = mysqli_query($con,$product_query);
								if(mysqli_num_rows($run_query) > 0){
									
	
		while($row = mysqli_fetch_array($run_query)){
			$costid    = $row['id'];
			
			
			$vcost = $row['cost'];
			$vdate = $row['date'];
			$vdesc = $row['desc'];
			
             $totalcost	= $totalcost + 	$vcost;	
								?>
								
								
										<tr>
											<td> <?php echo $costid ;?></td>
											<td><?php echo $vdate ;?></td>
											<td><?php echo $vdesc ;?></td>
											<td><?php echo $vcost ;?></td>
											
											
										  </tr>	
										
								<?php }  }?>
			
								</tbody>
							</table>
		  <center> <h3>  Net profit : BDT <?php echo $totalcost; ?> </h3> </center>
										
		  
		  
		  </div>
          
        </div>
      </div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Statistics
                        </div>
                        <div class="panel-body">
                             <div class="panel panel-primary">
					
										<div class=" panel-heading">
									
										</div>
										
										<div class=" panel-body">
										
										
									
            <!-- /.row -->
			
			
			
			
			
			
			
			<div class="row">		
				<div class="col-md-6">
			
					<div class="panel panel-success">
																		<div class="panel-heading"> <i class="glyphicon glyphicon-calendar"></i> Sales report</div>
																		<div class="panel-body">
																			<div id="calendar"></div>
																		</div>	
																	</div>
			    </div>
				<div class="col-md-6">
			
					<div class="panel-success">
						<div class="panel-heading">
			
			                Revenue
					    </div>
						
						<div class="panel-body">
							 <b> Net profit: <?php echo $netprofit;?> TK <b>  <br>
								 <b> Total cost:<?php echo $totalcost;?> TK <b> <br/>
								 .......................................<br>
								 <b> Income: <?php echo $netprofit - $totalcost;?>TK <b>  
								 
								
								
								<?php
								if($netprofit>$totalcost)
								{
									?>
									<div class="panel-success">
									<div class="panel-heading">
			
			                You are in profit. Your total revenue <?php echo $netprofit - $totalcost;?> TK
					    </div>
							</div>		
									<?php
								}
							else
							{
								?>
								
								<div class="panel-danger">
								<div class="panel-heading">
			
			                You are in loss. Your total revenue <?php echo $netprofit - $totalcost;?> TK
					    </div>
						</div>
								<?php
								
							}
								?>
		                 

		
	
								 
					    </div>
			
			
					</div>
			    </div>
			
			</div>
			
			
			
        
			
			
			 
										
										
										
										
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
			
				<!-- DEOMO-->
			
                        </div>
				
				<!--DEMO END-->
				
										
                    

                <!-- /. ROW  -->
				
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
	
	
	 <div class = "modal fade" id = "new" role = "dialog">
            <div class = "modal-dialog modal-lg">
               <div class = "modal-content">
                  <div class = "modal-header ">      
                     <button type = "button" class="close" data-dismiss = "modal">×</button>
                     
                  </div>
                  <div class = "modal-body">
                     <form action="" method="post">
					    <div class="form-group">
							<label> Total cost  </label>
							<input type="number" name="cost" class="form-control"/>
						
						</div>
						 <div class="form-group">
							<label> Cost Description   </label>
							<textarea type="text" name="desc" class="form-control"> </textarea>
						
						</div>
						
						<div class="form-group">
							<label> Cost Date   </label>
							<input type="date" name="date" class="form-control"/>
						
						</div>
					 
                  </div>
                  <div class = "modal-footer">
				  <input type="submit" name="addcost" class = "btn btn-success" >
				  
				  </form>
                     <button type = "button" class = "btn btn-primary" data-dismiss = "modal">Close</button>
					 
					 
					 
					 
					 
					 <?php
					 if(isset($_POST["addcost"]))
						 
						 {
							 
							$cost =  $_POST["cost"];
							$desc =  $_POST["desc"];
							$date =  $_POST["date"];
							
								$sql ="INSERT INTO `cost`( `date`, `cost`,`desc`) VALUES ('$date','$cost','$desc')" ;
										if(mysqli_query($con,$sql))
										{
										 echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Cost is added successfullly</b>
															</div></center>";
										}
						 }
					 
					 ?>
                  </div>
               </div>
            </div>
         </div>
	
	
	
	
	
	  <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	<script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
	
	
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
<script language = "JavaScript">
         function drawChart() {
            // Define the chart to be drawn.
            var data = google.visualization.arrayToDataTable([
               ['Year', 'Cost', 'profit'],
               ['2012',  900,      390],
               ['455',  1000,      400],
               ['2014',  1170,      440],
               ['2015',  1250,       480],
               ['2016',  1530,      540]
            ]);

            var options = {title: 'Salling rate (monthly)'};  

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('calendar'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
      </script>	

</body>

</html>