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
				
					<!-- Bootstrap CSS -->
					<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

					<!--java script-->
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	   
		</head>
 
		<!--Content-->
		<body>
			<nav class="navbar navbar-light" style="background-color:#16242D;"><!--nav bar -->
				<!-- Navbar content -->
				<div class="container" style="font-family:navfont; font-color:White;">
					<img src="Images/logo.png" alt="Dulsara logo">
						<div id="navcontent">
							<a class="navbar-brand" style="color:White;" href="#">Home</a>
							<a class="navbar-brand" style="color:White;" href="#">Customers </a>
							<a class="navbar-brand" style="color:White;"href="admin_meals.php"> Meals</a>
							<a class="navbar-brand" style="color:White;"href="orders.php">Orders</a>
							<a class="navbar-brand" style="color:White;"href="tables.php">Tables</a>
							<a class="navbar-brand" style="color:White;"href="viewreserv.php">Reservations</a>
							<a class="navbar-brand" style="color:White;"href="Ad_Feedack.php">Feedbacks</a>
							<a class="navbar-brand" style="color:White;"href="staffs.php">Staffs</a>
							<a class="navbar-login" href="login.html">Logout </a>
						</div>
				</div>
			</nav>


			<div class="w3-card-4 w3-col s12 w3-margin">
				<div class="w3-container w3-padding ">
					<div class="row  w3-xxxlarge " style="padding-left:16px"> &nbsp;&nbsp;</i> Staff Members </div>
				</div>
				<div class="w3-container w3">


				</div>
						
					<div class="row  w3-margin" >
						<button  class="w3-btn w3-block w3-green  col-md-3" type="button" onClick= "window.location.href = 'a_staff_member_add.php';" ><i class="fa fa-plus"></i>&nbsp;Add New Staff Member</button>

						<div class="w3-col s2 "style="margin-left:22px">
							<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST"> 
								<input class="w3-input w3-border " name="keyname" type="text" placeholder="Name" id="meal_name">
								<input class="btn btn-success" type="submit" value="Search" name="submit">


							</form>
							
						</div>

					</div>
										
					
										
					<div id="result"></div>
					<div class="row  w3-margin" >
						<table class="table table-striped table-bordered" id="example">
								<thead>
									<tr>
										<th>ID</th>
										<th>First name</th>
										<th>Last name</th>
										<th>Mobile</th>
										<th>Email</th>
										<th>Salary</th>
										<th>User type</th>
									</tr>

										
									<?php 
									if(isset($_POST["submit"])) {

												include 'includes/dbh.inc.php';

												$sql = "SELECT * FROM staff WHERE staff_id LIKE '%{$_POST["keyname"]}%' OR first_name LIKE '%{$_POST["keyname"]}%' OR last_name LIKE '%{$_POST["keyname"]}%' OR mobile LIKE '%{$_POST["keyname"]}%' OR type LIKE '%{$_POST["keyname"]}%' OR salary LIKE '%{$_POST["keyname"]}%'";

											$result = $conn -> query($sql);

					
											if ($result->num_rows>0 ) {


												$i=0;


									while($row = $result->fetch_assoc()) {
											 
											$i++;

												echo "<tr>";
											echo "<td>"; echo $row['staff_id'];  echo "</td>";
											echo "<td>"; echo $row['first_name'];  echo "</td>";
											echo "<td>"; echo $row['last_name'];  echo "</td>";
											echo "<td>"; echo $row['mobile'];  echo "</td>";
											echo "<td>"; echo $row['email'];  echo "</td>";
											echo "<td>"; echo $row['salary'];  echo "</td>";
											echo "<td>"; echo $row['type'];  echo "</td>";

											echo "</tr>";
											}
										}


											}
?>











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