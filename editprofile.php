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
				<link rel="stylesheet" type="text/css" href="css/home.css" media="screen" />
				<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

				<!--java script-->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				
						<!-- Optional JavaScript -->
				<!-- jQuery first, then Popper.js, then Bootstrap JS -->
				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
				
			
		</head>
		<body>
			<!--Content-->
	
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

			<div class="site-main container"style="margin-top:90px;margin-bottom:30px;">
				<div class="section-page-content row" style="">
					<div class="col-md-12 col-lg-10 col-lg-offset-1 w3-display-container "style="">
						<div class=" w3-border w3-row">
							<div class="w3-col  w3-bar-block" style="width:30%; margin-top:2%;" >
								<h5 class="w3-bar-item w3-xlarge">My Profile</h5>
									<button style="margin:4%; width:90%;" class="w3-bar-item w3-button tablink   w3-hover-light-grey" onclick="openLink(event, 'ep')">Edit Profile</button>
									<button  style="margin:4%;width:90%;"class="w3-bar-item w3-button tablink  w3-hover-light-grey" onclick="openLink(event, 'pc')">Change Password</button>
							</div>
                    
							<div class="w3-col w3-border-left" style="width:70%">
								<!--******************edit profile form*****************************-->
								<div id="ep" class="w3-container city w3-animate-right" style="display:">
									<div class=" w3-center">
											<form class="form-horizontal w3-left   w3-padding-16" id="register-form" method="post" action="./config/customer.php" style="width:90%;"  >
												<input type="hidden"  name="user_id" value="1">
													<input type="hidden"  name="user_type" value="3">
														<div class="">
															<div class="w3-row " style="margin-bottom:40px;">
																<div class="w3-quarter fw3-left" style="">
																	<button class="" title="Change Profile Photo" style="border: 0;cursor: pointer; padding: 0;">
																		<img src="imgs/adminnew.jpg" alt="Change Profile Photo" style="height: 25%; left:10%;position: absolute;top: 1%;width: 15%;" class="w3-left" > 
																	</button>
																</div>
																<div class="w3-rest w3-left w3-padding">
																	<h1>admin</h1>
																	<a class="">Change profile photo</a>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-sm-2" for="firstname">First name:</label>
																	<div class="col-sm-10">
																		<input type="text" value=""class="form-control" name="fname"  placeholder="Enter first name" id="fname"  >
																		<span class="error_form" id="fname_error_message"> </span>
																	</div>
															</div>                  
															<div class="form-group">
																<label class="control-label col-sm-2" for="lastname">Last name:</label>
																<div class="col-sm-10"> 
																	<input type="text" value=""class="form-control" name="lname"  placeholder="Enter last name" id="lname">
																</div>
															</div>    
															<div class="form-group">
																<label class="control-label col-sm-2" for="email">Email:</label>
																	<div class="col-sm-10"> 
																		<input type="text"value="" class="form-control" name="email"   placeholder="Enter email" id ="email">
																	</div>
															</div>
															<div class="form-group">
																<label class="control-label col-sm-2" for="contact number">Contact no:</label>
																	<div class="col-sm-10"> 
																		<input type="text" value=""class="form-control" name="contactno" placeholder="Enter conatact number" id="contactno">
																	</div>
															</div>
															<div class="form-group">
																<label class="control-label col-sm-2" for="username">Username:</label>
																	<div class="col-sm-10">
																		<input type="text"value="" class="form-control" name="username" placeholder="Enter username"  id="username">
																	</div>
															</div>
											   
												
															<div class="form-group"> 
																<div class="col-sm-offset-2 col-sm-10 ">
																	<button type="submit" class="button w3-green" name="updateuser" id="updateuser" style="width:100%; height:40px"	>Update</button> 
																</div>
															</div>
														</div> 
											</form>
									</div>
								</div>
								<!--*********************************************change password form************************************ -->
								<div id="pc" class="w3-container city w3-animate-right" style="display:none">
									<form class="form-horizontal w3-left   w3-padding-16" id="change-pwd-form" method="post" action="./config/customer.php" style="width:90%;"  >
										<input type="hidden"  name="user_id" value="1">
				
											<div class="">
												<div class="w3-row " style="margin-bottom:40px;">
													<div class="w3-quarter w3-left" style="">
														<button class=""  style="border: 0;cursor: pointer; padding: 0;">
															<img src="assets/img/main/usericon.ico" style="height: 23%;left:10%;position: absolute;top:5%;width: 15%;" class="w3-left" > 
														</button>
													</div>
													<div class="w3-rest w3-left w3-padding">
														<p></p>
														<h1>admin</h1>
													</div>    
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-2" for="opwd">Old Password:</label>
													<div class="col-sm-10">          
														<input type="password" class="form-control" name="opwd" placeholder="Old password" id="opwd"  >
													</div>
											</div>    
											<div class="form-group">
												<label class="control-label col-sm-2" for="npwd">New Password:</label>
													<div class="col-sm-10">          
														<input type="password" class="form-control" name="npwd" placeholder="New password" id="npwd"  >
													</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-2" for="confirmpwd">Confirm Password:</label>
													<div class="col-sm-10">          
														<input type="password" class="form-control" name="con_pwd"  placeholder="Confirm password" id="con_pwd" >
													</div>
											</div>
											<div class="form-group"> 
												<div class="col-sm-offset-2 col-sm-10 ">
													<button type="submit" class="button w3-green" name="changepwduser" id="changepwd" style="width:100%; height:40px"	>Change Password</button> 
												</div>
											</div>
										
									</form>    
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
			
			





