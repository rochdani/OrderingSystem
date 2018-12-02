<!doctype html>
	<html lang="en">
  
		<head>
			 <title>Dulsara Restaurant</title>
					<!-- Required meta tags -->
					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

					<!-- Bootstrap CSS -->
					<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

					<!--home CSS-->
								<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

					<!-- Bootstrap CSS -->
					
					<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

					<!--java script-->
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
					
					<!-- Optional JavaScript -->
					<!-- jQuery first, then Popper.js, then Bootstrap JS -->
					<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
					
		</head>
 
	<!--Content-->
		<body>
			<nav class="navbar navbar-light" style="background-color:#16242D;"><!--nav bar -->
		  <!-- Navbar content -->
			   <div class="container" style="font-family:navfont; font-color:White;">
					<img src="Images/logo.png" alt="Dulsara logo">
					<div id="navcontent">
						<a class="navbar-brand" style="color:White;" href="Adhome.php">Home</a>
						<a class="navbar-brand" style="color:White;" href="Customers.php">Customers </a>
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

				<div class="section-page-content row">
					<div class="col-lg-10 col-lg-offset-1 w3-white">
						<!--my coding here-->
						<div class="container no-padding w3-border-black">
						    <div class="row">
							    <div class="">
								    <!--<div style="margin-left:12%;">-->
								    <div >
									    <!--<div class="container" style="padding-top:50px">-->
									     <div class="container" >
										    <div class="w3-row">
											    <div class=" w3-col s12 w3-margin">
												    <div class="w3-card-4 w3-col s12 w3-margin w3-border-black">			
													    <div class="w3-container w3-padding ">	
														    <div class="row w3-margin w3-xxxlarge "><img src="imgs/img10.jpg" style="width:21%; height:20%;">&nbsp;</i>Enter table
                                                            </div>
													    </div>
													    <div class="w3-container w3">
														    <form   id="room-add" method="post" action="#" enctype="multipart/form-data">
			
															    <div class="w3-half w3-padding">      
                                                                    <!--select bedroom type-->
                                                                    <select class="w3-select w3-border " name="option">
                                                                    <option value="">Choose table type </option>
                                                                                    
																	<option value='1'>Table with 4 chairs</option><option value='2'>Table with 5 chairs</option><option value='3'>Table with 6 chairs</option><option value='8'>Table with 7 chairs</option>                                                                    </select>
                                                                </div>

																<div class="w3-row-padding w3-margin-bottom">	
																	<div class="w3-half">						
																		<input type="submit" class="w3-btn w3-green w3-block " name="room-add" value="Add Table">
																	</div> 
																	<div class="w3-half">
																		<input type="reset" class="w3-btn w3-red w3-block " name="customer-add-cancel" value="Cancel">
																	</div>								
																</div>
														    </form>	
													    </div>
												    </div>
													
															
												</div>							
											</div> 
										</div>
									</div>    
								</div>
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