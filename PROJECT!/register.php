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
			
				<!-- Optional JavaScript -->
				<!-- jQuery first, then Popper.js, then Bootstrap JS -->
				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
				
		 
		</head>

			<!--content-->
		<body>
	<nav class="navbar navbar-light" style="background-color:#16242D;">
				<!-- Navbar content -->
					<div class="container" style="font-family:navfont; font-color:White;">
						<img src="Images/logo.png" alt="Dulsara logo">
							<div id="navcontent">
								<a class="navbar-brand" style="color:White;" href="home.php">Home</a>
								<a class="navbar-brand" style="color:White;" href="Fooditems_view.php">Order Now</a>
								<a class="navbar-brand" style="color:White;" href="#">Reserve Table</a>
								<a class="navbar-brand" style="color:White;"href="AboutUs.php"> About Dulsara</a>
								<a class="navbar-login" href="login.html">Login </a>
							
							</div>
					</div>
			</nav>


				<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "restaurant";

				try{
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					echo("successful in connection");
				}

				catch(MySQLi_Sql_Exception $ex){
					echo("error in connection");
				}

				if(isset($_POST['register'])){
					$fname = $_POST['fname']; 
					$lname = $_POST['lname']; 
					$nic = $_POST['nic']; 
					$email = $_POST['email']; 
					$country = $_POST['country']; 
					$mobile = $_POST['mobile']; 
					$username = $_POST['username']; 
					$pwd = $_POST['pwd']; 
					
					$register_query = "INSERT INTO `customer`(`cus_fname`, `cus_lname`, `username`, `password`, `nic`, `country`, `mobile`, `email`) VALUES ('$fname', '$lname', '$username', '$pwd', '$nic', '$country', '$mobile', '$email')";

					try{
						$register_result = mysqli_query($conn, $register_query);
						if(mysqli_affected_rows($conn)>0){
							echo("registration successful");
						}
						else{
							echo("error in registration");
						}
						
					}
					catch(Exception $ex){
						echo("error".$ex->getMessage());
					}
					}

				?>
				<!--**********registration form****************-->

				<form class="form-horizontal w3-left w3-border w3-light-gray" id="register-form" method="post" action="./regiss.php">

					<div class="container">
						<h1>Registration Form</h1>
							<p>Please fill in this form to create an account.</p>                             
								<div class="form-group">
									<label class="control-label col-sm-2" for="firstname">First name:</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="fname" placeholder="Enter first name" id="fname" required >
											<span class="error_form" id="fname_error_message"> </span>
										</div>
								</div>  
						
								<div class="form-group">
									<label class="control-label col-sm-2" for="lastname">Last name:</label>
									<div class="col-sm-10"> 
										<input type="text" class="form-control" name="lname"  placeholder="Enter last name" id="lname">
									</div>
								</div>
						
								<div class="form-group">
									<label class="control-label col-sm-2" for="nic">nic</label>
									<div class="col-sm-10"> 
										<input  type="nic" class="form-control" name="nic" placeholder="Enter your NIC no"  id="nic">
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-2" for="country">Country:</label>
									<div class="col-sm-10"> 
										<input type="text" class="form-control" name="country"  placeholder="Enter country" id="country">
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-2" for="email">Email:</label>
									<div class="col-sm-10"> 
										<input type="text" class="form-control" name="email"   placeholder="Enter email" id ="email">
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-2" for="contact number">mobile:</label>
									<div class="col-sm-10"> 
										<input type="text" class="form-control" name="mobile" placeholder="Enter mobile number" id="mobile">
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-2" for="username">Username:</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="username" placeholder="Enter username"  id="username">
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-2" for="pwd">Password:</label>
									<div class="col-sm-10">          
										<input type="password" class="form-control" name="pwd" placeholder="Enter password" id="pwd">
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-2" for="confirmpwd">Confirm Password:</label>
									<div class="col-sm-10">          
										<input type="password" class="form-control" name="con_pwd"  placeholder="Confirm password" id="con_pwd">
									</div>
								</div>
						
									<p>By creating an account you agree to our Terms & Privacy.</p>
						
								<div class="form-group"> 
									<div class="col-sm-offset-2 col-sm-10 ">
										<button type="submit" class="button w3-green" name="register" id="submit-button" style="width:900px; height:40px"   >Register</button><br><br>
										<button type="reset" class="button w3-red" name="cancel" id="cancel-button" style="width:900px; height:40px"    >Cancel</button> 
									</div>
								</div>
						
								</br>
								</br>
								</br>
								</br>
						
								</br><p align="center">Already have an account? <a href="login.html"><lable class="w3-blue w3-padding">Sign in</lable></a></p>
					</div>					
				</form>

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