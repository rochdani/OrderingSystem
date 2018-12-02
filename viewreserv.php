<!doctype html>
	<html lang="en">
		<head>
			<!-- Required meta tags -->
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

			<!-- Bootstrap CSS -->
				   
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
			<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

			<!--java script-->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
			<!-- Optional JavaScript -->
			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

				<title>Dulsara Restaurant</title>
		</head>
		<body>
			<nav class="navbar navbar-light" style="background-color:#16242D;"><!--nav bar -->
				<!-- Navbar content -->
					<div class="container" style="font-family:navfont; font-color:White;">
						<img src="Images/logo.png" alt="Dulsara logo">
							<div id="navcontent">
								<a class="navbar-brand" style="color:White;" href="#">Home</a>
								<a class="navbar-brand" style="color:White;" href="#">Customers </a>
								<a class="navbar-brand" style="color:White;"href="meals.php"> Meals</a>
								<a class="navbar-brand" style="color:White;"href="orders.php">Orders</a>
								<a class="navbar-brand" style="color:White;"href="tables.php">Tables</a>
								<a class="navbar-brand" style="color:White;"href="viewreserv.php">Reservations</a>
								<a class="navbar-brand" style="color:White;"href="Ad_Feedack.php">Feedbacks</a>
								<a class="navbar-brand" style="color:White;"href="staffs.php">Staffs</a>
								<a class="navbar-login" href="#">Logout </a>
							</div>
					</div>
			</nav>

			<div class="site-main container">
				<div class="section-page-heading row  ">
					<div class="section-page-content row">
						<div class="col-lg-10 col-lg-offset-1 w3-white">
							<!--my coding here-->
								<div class="w3-card-4 w3-col s12 w3-margin">
									<div class="w3-container w3-padding ">
										<div class="row  w3-xxxlarge " style="padding-left:16px"><img src="imgs/reserv.png" style="width:35%; height:10%">&nbsp;&nbsp;</i> RESERVATIONS</div>
									</div>
									<div class="w3-container w3">
								
											<!--searching bar-->									
											<div class="row  w3-margin" >
												<h3 class="w3-btn w3-block w3-green  col-md-3"><i class="fa fa-plus"></i>&nbsp;View Reservations</h3>
											</div>
															
											<div class="row  w3-margin "style="margin-top:0px">
												<div class="w3-col s2 w3-centre ">
													<h5 class="" style="margin-top:0px"><em class="fa fa-search" style="font-size:30px"></em><b>Search By :</b></h5>
												</div>
												<div class="w3-col s1 "style="margin-left:18px">
													<input class="w3-input w3-border " name="reservation_no" type="text" placeholder="Reservation No" id="reservation_no">	
												</div>
												<div class="w3-col s2 "style="margin-left:18px">
													<input class="w3-input w3-border " name="checkin" type="text" placeholder="Checkin date" id="checkin">
												</div>
												<div class="w3-col s2 "style="margin-left:18px">
													<input class="w3-input w3-border " name="checkout" type="text" placeholder="Checkout date" id="checkout">
												</div>
												<div class="w3-col s1 "style="margin-left:18px">
													<input class="w3-input w3-border " name="room_no" type="text" placeholder="Room no " id="room_no">
												</div>
												<div class="w3-col s2 "style="margin-left:18px">
													<input class="w3-input w3-border " name="date" type="text" placeholder="Reservation date " id="date">
												</div>
											</div>
										<div id="result"></div>
										<!--end search bar-->
											<div class="row  w3-margin" >
												<table class="table table-striped table-bordered" id="example">
													<thead>
														<tr class="w3-light-grey">
															<th>reservation_id</th>
															<th>Check_in</th>
															<th>Check_out</th>
															<th>table_id</th>
															<th>customer_id</th>
															<th>customer_id</th>
															<th>Action</th>
															<th>reserv_status</th>
														</tr>
													</thead>
												<tbody>
													<tr>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td><span id="cus_id"> </span>
														</td>
														<td></td>		
														<td><a name="view" value="View" id="67" class=" view_data"><i class="fa fa-eye" style="font-size:20px;color:black;" ></i></a>&nbsp; 
															
															<a class="remove" onclick="myFunction(67)"   title="Remove This Room Category" id="myDiv1" value="" ><i class="fa fa-trash-o" aria-hidden="true" style="font-size:20px;color:red;"></i></a>	
														</td>
													</tr>
																	

												</tbody>
											</table>
										</div>	
									</div>
								</div>
								<!--end my coding-->

								<!--view model-->
								<div  class="modal fade"  id="view">
									<div class="modal-dialog">
										<div class="modal-content" >
											<div class="modal-header">
												<button type="button" class="close " data-dismiss="modal" aria-label="Close">
													<span class="w3-text-black w3-xxlarge" aria-hidden="true">&times;</span>
												</button>
													<h5 class="modal-title" id="exampleModalLabel">
														<div class="w3-container" style="background-color: #8cd98c">
															<h2><i class="fa fa-eye"></i> View Room Reservations</h2>
														</div>
													</h5>
											</div>	
											<div class="modal-body">
												<div id="modal-content">
													<div class="container " style="width:600px">
														<input type="hidden" name="eereserve_no" id="eereserve_no" />
															<p>
																<input  disabled class="w3-input" name="eereservation_no" value=""  id="eereservation_no">
																<label>Reservation Number</label></p>
															</p>

															<p>
																<input  disabled class="w3-input" name="eecheckin" value=""  id="eecheckin">
																<label>Checkin date</label></p>
															</p>

															<p>
																<input  disabled class="w3-input" name="eecheckout" value=""  id="eecheckout">
																<label>Checkout date</label></p>
															</p>

															<p>
																<input  disabled class="w3-input" name="eeroom_no" value=""  id="eeroom_no">
																<label>Room No</label></p>
															</p>		

															<p>
																<input  disabled class="w3-input" name="eecus_id" value=""  id="eecus_id">
																<label>Customer ID</label></p>
															</p>	
																
															<p>
																<input  disabled class="w3-input" name="eedate" value=""  id="eedate">
																<label>Reservation date</label></p>
															</p>	
													
													</div> 
												</div>
											</div>	
											
											<div class="modal-footer">	
												<button type="button" name="" class="w3-btn  w3-red w3-margin-bottom w3-padding" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!--end view model-->

								<!--edit model-->
								<div  class="modal fade"  id="edit">
									<div class="modal-dialog">
										<div class="modal-content" >
											<div class="modal-header">
												<button type="button" class="close " data-dismiss="modal" aria-label="Close">
													<span class="w3-text-black w3-xxlarge" aria-hidden="true">&times;</span>
												</button>
												<h5 class="modal-title" id="exampleModalLabel">
													<div class="w3-container" style="background-color: #8cd98c">
														<h2><i class="fa fa-pencil"></i> Edit Room Reservations</h2>
													</div>
												</h5>
											</div>	
											<div class="modal-body">
												<!--customer details update form-->
												<form id="room-reservation-form" method="post" action="./config/system_user.php" >
												
													<div id="modal-content">
														<div class="container " style="width:600px">
															<input type="hidden" name="ereserve_no" id="ereserve_no" />

																<p>
																	<input  disabled class="w3-input" name="ereservation_no" value=""  id="ereservation_no">
																	<label>Reservation Number</label></p>
																</p>
															
																<p>
																	<input type="date" class="w3-input" name="echeckin" value=""  id="echeckin">
																	<label>Checkin date</label></p>
																</p>

																<p>
																	<input type="date" class="w3-input" name="echeckout" value=""  id="echeckout">
																	<label>Checkout date</label></p>
																</p>

																<p>
																	<input  class="w3-input" name="eroom_no" value=""  id="eroom_no">
																	<label>Room No</label></p>
																</p>

																<p>
																	<input   class="w3-input" name="ecus_id" value=""  id="ecus_id">
																	<label>Customer ID</label></p>
																</p>		

																<p>
																	<input type="date"  class="w3-input" name="edate" value=""  id="edate">
																	<label>Reservation Date</label></p>
																</p>	
																	
														</div> 
													</div>
												<!--end-->
											</div>	
													<div class="modal-footer">
													<input type="submit" class="w3-btn  w3-green w3-margin-bottom w3-padding" id="update-reservation" value="Update" name="update-reservation" > 
												</form>
													<button type="button" name="" class="w3-btn  w3-red w3-margin-bottom w3-padding" data-dismiss="modal">Close</button>
													</div>
										</div>
									</div>
								</div>
						<!--end model-->
						</div>
					</div> 
				</div> 	

			</div> 
   
			<!-- Footer -->
			<div id="footer">

				<nav class="navbar navbar-dark bg-dark" style="padding-top: 30px;">  <!--nav bar -->
				<!-- Navbar content -->
					<div class="container">
						<div class="row">
							<div class="col1">
								<img src="Images/logo.png" alt="Dulsara Logo"></br></br>
							</div>
							<div class="col2">
			
								Dulsara Restaurant
								<address> No. 26, Cocowatte Road,</br>Badulla</address> 
							</div>
							<div class="col3">
								055 222 8215 <br>
								Coordinate<br> <a href="https://www.google.com/maps/place/6.9853025,81.058579" target="_blank" style="color:white;"> 6.9853025, 81.058579</a>
							</div>

							<div class="col4">         
								<p class="icons">
									<a href="#" class="normaltip" title="Facebook"><img src="Images/icon1.gif" alt=""></a>
									<a href="#" class="normaltip" title="Twitter"><img src="Images/icon3.gif" alt=""></a>
								</p>
										weekday      7:30 AM – 10:30 PM <br>
											weekend    7:30 AM – 10:30 PM
							</div>
						</div>
					</div>
				</nav>		  
			</div>
		</body>
	</html>