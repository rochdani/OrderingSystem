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
			
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			
	</head>
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

		<div class="w3-container w3-padding ">
			<div class="row  w3-xxxlarge " style="padding-left:16px"><img src="images/slide2.jpg" style="width:50%; height:15%">&nbsp;&nbsp;</i> CUSTOMERS </div>
		</div>
		
			<div class="w3-container w3">
				<!--searching bar-->	
				<div class="row  w3-margin" >
					<button  class="w3-btn w3-block w3-green  col-md-3" type="button" onClick= "window.location.href = 'customer.php';" ><i class="fa fa-plus"></i>&nbsp;View Customers</button>
				</div>
															
				<div class="row  w3-margin "style="margin-top:0px">
					<div class="w3-col s2 w3-centre ">
						<h5 class="" style="margin-top:0px"><em class="fa fa-search" style="font-size:30px"></em><b>Search By :</b></h5>
					</div>
					<div class="w3-col s2 "style="margin-left:22px">
						<input class="w3-input w3-border " name="cus_id" type="text" placeholder="customer id" id="cus_id">
					</div>
					<div class="w3-col s2 "style="margin-left:22px">
						<input class="w3-input w3-border " name="cus_name" type="text" placeholder="customer name" id="cus_name">
					</div>
					<div class="w3-col s2 "style="margin-left:22px">
						<input class="w3-input w3-border " name="cus_email" type="text" placeholder="Customer email" id="cus_email">
					</div>
					<div class="w3-col s2 "style="margin-left:22px">
						<input class="w3-input w3-border " name="cus_country" type="text" placeholder="Customer country" id="cus_country">
					</div>
				</div>
				
				<div id="result"></div>
					<div class="row  w3-margin" >
						<table class="table table-striped table-bordered" id="example">
							<thead>
								<tr class="w3-light-grey">
									<th>ID</th>
									<th>First name</th>
									<th>Last name</th>
									<th>DOB</th>
									<th>Country</th>
									<th>Email</th>
									<th>Mobile</th>
									<th>Action</th>
								</tr>
							</thead>

																										
							<tbody>
								<tr>
									<td><span id="id"></span></td>
									<td><span id="firstname"></span></td>
									<td><span id="lastname"></span></td>
									<td><span id="dob"></span></td>	
									<td><span id="country"></span></td>
									<td><span id="email"></span></td>
									<td><span id="mobile"></span></td>

									<td><a name="view" value="View" id="88" class=" view_data"><i class="fa fa-eye" style="font-size:20px;color:black;" ></i></a>&nbsp; 
										<a name="edit" value="Edit" id="88" class=" edit_data"><i class="fa fa-pencil" style="font-size:20px;color:blue;" ></i></a>&nbsp; 
										<a class="remove" onclick="myFunction(88)"   title="Remove This Customer" id="myDiv1" value="" ><i class="fa fa-trash-o" aria-hidden="true" style="font-size:20px;color:red;"></i></a>	
									</td>	
								</tr>
							</tbody>
						</table>
					</div>	
			</div>
					
										
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
									<h2><i class="fa fa-eye"></i> View Customer Details</h2>
								</div>
							</h5>
						</div>	
						<div class="modal-body">
							
								<div id="modal-content">
									<div class="container " style="width:600px">
									
										<input type="hidden" name="eecus_id" id="eecus_id" />

											<p>
												<input  disabled class="w3-input" name="eefirstname" value=""  id="eefirstname">
												<label>First Name</label></p>
											</p>

											<p>
												<input  disabled class="w3-input" name="eelastname" value=""  id="eelastname">
												<label>Last Name</label></p>
											</p>

											<p>
												<input  disabled class="w3-input" name="eebirthdate" value=""  id="eebirthdate">
												<label>Birthdate</label></p>
											</p>

											<p>
												<input  disabled class="w3-input" name="eecountry" value=""  id="eecountry">
												<label>Country</label></p>
											</p>		

											<p>
												<input  disabled class="w3-input" name="eeemail" value=""  id="eeemail">
												<label>Email</label></p>
											</p>	
												
											<p>
												<input  disabled class="w3-input" name="eecontactno" value=""  id="eecontactno">
												<label>Conatct no</label></p>
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