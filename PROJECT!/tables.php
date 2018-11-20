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
					
		</head>
		<!--content-->
		<body>
		<!--nav bar -->
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


			<div class="w3-card-4 w3-col s12 w3-margin">
				<div class="w3-container w3-padding ">
					<div class="row  w3-xxxlarge " style="padding-left:16px"><img src="imgs/tablelogo.jpg" style="width:15%; height:15%">&nbsp;&nbsp;</i> Tables </div>
				</div>
				<div class="w3-container w3">						
				<!--searching bar-->
					<div class="row  w3-margin" >
						<button  class="w3-btn w3-block w3-green  col-md-3" type="button" onClick= "window.location.href = 'edittable.php';" ><i class="fa fa-plus"></i>&nbsp;Add New Table</button>
					</div>							
					<div class="row  w3-margin "style="margin-top:0px">
						<div class="w3-col s2 w3-centre ">
							<h5 class="" style="margin-top:0px"><em class="fa fa-search" style="font-size:30px"></em><b>Search By :</b></h5>
						</div>
						<div class="w3-col s2 "style="margin-left:50px">
							<input class="w3-input w3-border " name="Table_id" type="text" placeholder="Table_id" id="Table_id">
						</div>
										
					</div>
						<div id="result"></div>
					<!--end search bar-->
						<div class="row  w3-margin" >
							<table class="table table-striped table-bordered" id="example">
								<thead>
									<tr class="w3-light-grey">
										<th>Table_id</th>
										<th>Table_type</th>
										<th>Action</th>
									</tr>
								</thead>		
							</table>
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