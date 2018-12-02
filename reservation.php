<!doctype html>
<html lang="en">
	<head>
		<title>Dulsara Restaurant</title>
		<!-- Required meta tags -->
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<!--home CSS-->
			<link rel="stylesheet" type="text/css" href="css/home.css" media="screen" />
			
		



<body>
				
				<nav class="navbar navbar-light" style="background-color:#16242D;">
				<!-- Navbar content -->
					<div class="container" style="font-family:navfont; font-color:White;">
						<img src="Images/logo.png" alt="Dulsara logo">
							<div id="navcontent">
								<a class="navbar-brand" style="color:White;" href="home.php">Home</a>
								<a class="navbar-brand" style="color:White;" href="orderss.php">Order Now</a>
								<a class="navbar-brand" style="color:White;" href="reservation.php">Reserve Table</a>
								<a class="navbar-brand" style="color:White;"href="AboutUs.php"> About Dulsara</a>
								<a class="navbar-login" href="login.html">Login </a>
							
							</div>
					</div>
			</nav>
<!--form-->
						<form class="w3-container" action="" id="room-reservation-form" method="POST">

							<br>
							<!--select bedroom type-->
							<label><b><i class="fa fa-bed"></i>Table type</b></label>
							<select class="w3-select w3-border " name="option">
							<option value="" disabled selected>Choose table type </option>
							 
							
							</select>

							<!--select check in date-->
							<br><br>
							<label><b><i class="fa fa-calendar-o"></i>Check in</b></label>
							<input type="date" style="width:500px"class="form-control" name="check_in" required placeholder="Enter date of check in" 
							value="">
						
							

							<!--for passs cus_id-->
							<input type="hidden"  name="cus_id" value="">


							<br>
							
											
 
					  
						<label for="fname"><b>First Name</b></label>
						<input type="text" placeholder="Enter FirstName" name="fname" required>

					</br>
						<label for="lname"><b>Last Name</b></label>
						<input type="lname" placeholder="Enter LastName" name="lname" required>
							
						</br>
						
						<label for="email"><b>Email</b></label>
						<input type="email" placeholder="email" name="email" required>
							
						</br>
						
						<label for="phone No"><b>Phone No</b></label>
						<input type="phone No" placeholder="Enter phone No" name="phone No" required>
							
						</br>
						
						<button class="btn w3-green" name="room-reservation" type="submit" style="width:100px">Reserve</button>
																<button class="btn w3-red" name="room-reservation-cancel" type="reset" style="width:100px">Cancel</button>
						
					  

					  
					</form>



			<!-- Footer -->

			<div id="footer">
				<!--nav bar -->
					<nav class="navbar navbar-dark bg-dark" style="padding-top: 30px;">  
				
						<!-- Navbar content -->
						<div class="container">
							<div class="row">
								<div class="col1">
									<img src="Images/logo.png" alt="Dulsara Logo"></br></br>
								</div>
				
								<div class="col2">Dulsara Restaurant
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
	  
			</div>
					</nav>

</body>
</html>
										
										</body>
										</html>