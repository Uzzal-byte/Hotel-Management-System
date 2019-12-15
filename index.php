<?php include"header.php";?>

	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/index_1.jpg)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content text-center">
										<div class="home_title">A Luxury Stay</div>
										<div class="booking_form_container">
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				

			</div>
			
			<!-- Home Slider Dots -->
			
			
		</div>
	</div>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				
				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
						<div class="icon_box_icon"><img src="images/pic.jpg" class="svg"alt="https://www.flaticon.com/authors/monkik"></div>
						<div class="icon_box_title"><h2>Tour guide</h2></div>
						<div class="icon_box_text">
							<p>In our hotel there are so many experienced tour guide.They work sincerity,honesty and very much helpful.They always try to give there best services.They always egarly waiting for welcomming new guest</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
						<div class="icon_box_icon"><img src="images/icon_2.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
						<div class="icon_box_title"><h2>Swimming Pool</h2></div>
						<div class="icon_box_text">
							<p>The beautiful swimming pool in our hotel,at our hotel we will find a beautiful outdoor swimming pool and reserved to our guest.In our hotel with swimming pool in cesenatico we can have fun with games and fun dives from the diving board.Everything always under the watchful eye of a qualified lifeguard,ready to intervene in the case of need for children and adults. </p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
						<div class="icon_box_icon"><img src="images/icon_3.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
						<div class="icon_box_title"><h2>Luxury Rooms</h2></div>
						<div class="icon_box_text">
							<p>Our Luxury Rooms offer our guests all the comfort and mordern design of a hotel,with a little extra touch of higher standards.Luxury rooms offer all the facilities of Deluxe room,with additional luxury touches; Bath amenities,contemporary furnishings,luxury beddins,24-hour room service,satelite TV,internet accessand individually-controlled air conditioning to ensure a perfect stay</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Gallery -->

	<div class="gallery">
		<div class="gallery_slider_container">
			<div class="owl-carousel owl-theme gallery_slider">
				
				<!-- Slide -->
				<div class="gallery_item">
					<div class="background_image" style="background-image:url(images/gallery_1.jpg)"></div>
					<a class="colorbox" href="images/gallery_1.jpg"></a>
				</div>

				<!-- Slide -->
				<div class="gallery_item">
					<div class="background_image" style="background-image:url(images/gallery_2.jpg)"></div>
					<a class="colorbox" href="images/gallery_2.jpg"></a>
				</div>

				<!-- Slide -->
				<div class="gallery_item">
					<div class="background_image" style="background-image:url(images/gallery_3.jpg)"></div>
					<a class="colorbox" href="images/gallery_3.jpg"></a>
				</div>

				<!-- Slide -->
				<div class="gallery_item">
					<div class="background_image" style="background-image:url(images/gallery_4.jpg)"></div>
					<a class="colorbox" href="images/gallery_4.jpg"></a>
				</div>

			</div>
		</div>
	</div>

	<!-- About -->

	

	<!-- Booking -->

	<div class="booking">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="booking_title text-center"><h2>Book a room</h2></div>
				
					<!-- Booking Slider -->
					<div class="booking_slider_container">
						<div class="owl-carousel owl-theme booking_slider">
						

						<?php 	
						
				
						$sql = "SELECT bed.sl_id,bed.bed_no,bed.room_id,bed.status,bed.bed_image,add_room.name,add_room.price from bed INNER JOIN add_room on bed.room_id = add_room.id";
						$re = mysqli_query($con,$sql);	
						while($row= mysqli_fetch_array($re))
										{
												$id = $row['sl_id'];
												$bedname = $row['bed_no'];
												
												$bedstatus = $row['status'];
												
												$image = $row['bed_image'];
												$roomno = $row['name'];
												$price = $row['price'];
												
											?>




						
							<!-- Slide -->
							<div class="booking_item" style="height:350px;">
								<div class="background_image" style="background-image:url(images/bed/<?php echo $image;?>)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_price">BDT <?php echo $price;?>/Night</div>
								<div class="booking_link"><a href="view_details.php?id=<?php echo $id ;?>" ><?php echo $bedname;?></a></div>
							</div>
						
										<?php }
										
										?>
				
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blog -->


	<!-- Footer -->
<?php include"footer.php";?>