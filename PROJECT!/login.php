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
					
					
   
					<style>
							input[type=text], input[type=password] {
								width: 100%;
								padding: 12px 10px;
								margin: 8px 0;
								display: inline-block;
								border: 1px solid #ccc;
								box-sizing: border-box;
							}

							button {
								background-color: #4CAF50;
								color: white;
								padding: 14px 20px;
								margin: 8px 0;
								border: none;
								cursor: pointer;
								width: 100%;
							}

							button:hover {
								opacity: 0.8;
							}

							

							.imgcontainer {
								text-align: center;
								margin: 24px 0 12px 0;
							}

							img.avatar {
								width: 50%;
								border-radius: 50%;
							}

							.container {
								padding: 1px;
							}

							span.psw {
								float: right;
								padding-top: 10px;
							}

							/* Change styles for span and cancel button on extra small screens */
							@media screen and (max-width: 300px) {
								span.psw {
								   display: block;
								   float: none;
								}
								
							}
							@font-face {
								font-family: navfont;
								src: url(fonts/BreeSerif-Regular.otf);
								
							}

					</style>
		</head>
		
		<!--Content-->
		<body>
			<nav class="navbar navbar-light" style="background-color:#16242D;">
				<!-- Navbar content -->
					<div class="container" style="font-family:navfont; font-color:White;">
						<img src="Images/logo.png" alt="Dulsara logo">
							<div id="navcontent">
								<a class="navbar-brand" style="color:White;" href="home.php">Home</a>
								<a class="navbar-brand" style="color:White;" href="Fooditems_view.php">Order Now</a>
								<a class="navbar-brand" style="color:White;" href="reservation.php">Reserve Table</a>
								<a class="navbar-brand" style="color:White;"href="AboutUs.php"> About Dulsara</a>
								<a class="navbar-login" href="login.html">Login </a>
							
							</div>
					</div>
			</nav>


			<div class="row">
				<div class="col-4">
					<center>
						<form  style ="width:400px; height:500px";  action="includes/login.inc.php">
							<div class="imgcontainer">
								<img src="loginicon.png" alt="Avatar" class="avatar" style="width:50px">
							</div>

							<label for="category">Category&nbsp&nbsp&nbsp </label> 
								<select name="category" style="width:172px">
									  <option value="patient"> Customer</option>
									  <option value="doctor">Primary_Staff</option>
									  <option value="admin"> Admin</option>
									  <option value="lab">Delivery_Staff</option>
									  <option value="lab">Tabla Reservation_Staff</option>
								</select>
		 
								<div class="container">
									<label for="uname"><b>Username</b></label>
									<input type="text" placeholder="Enter Username" name="uname" required>

									<label for="psw"><b>Password</b></label>
									<input type="password" placeholder="Enter Password" name="psw" required>
										
									<button type="submit">Login</button>
									<label>
									  <input type="checkbox" checked="checked" name="remember"> Remember me
									</label>
								</div>
						
								<div class="container" style="background-color:#f1f1f1">			   				
									<a href="register.php" ><span> <button type="button" class="button"   >Register Now</button></span></a>
								</div>
						</form>
					</center>
				</div>
					<div  class="form col-8">
						<img class="d-block w-100" src="Images/slide2.jpg" alt="First slide" width="700px" height="500">
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