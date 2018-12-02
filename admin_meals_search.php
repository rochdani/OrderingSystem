<?php 
session_start();
if(!isset($_SESSION['admin_id'])){
  header("location:./login.php");
}
?>
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
				
				<!-- jQuery first, then Popper.js, then Bootstrap JS -->
				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
				<style>
						@font-face {
    font-family: navfont;
    src: url(fonts/BreeSerif-Regular.otf);
    
}
@font-face {
    font-family:domine;
    src: url(fonts/Domine-Regular.ttf);
}
				</style>
		</head>
 
		<!--Content-->
		<body>





			<nav class="navbar navbar-light" style="background-color:#16242D;"><!--nav bar -->

		  <!-- Navbar content -->
		  <img src="Images/logo.png">
			   <div class="navbar-left" style="font-family:navfont; font-color:White;">
			  
					
			 <div id="navcontent">

						<a class="navbar-brand" style="color:White;" href="Customer.php">Customers </a>
						<a class="navbar-brand" style="color:White;"href="meals.php"> Meals</a>
						<a class="navbar-brand" style="color:White;"href="orders.php">Orders</a>
						<!-- <a class="navbar-brand" style="color:White;"href="tables.php">Tables</a> -->
						<a class="navbar-brand" style="color:White;"href="viewreserv.php">Reservations</a>
						<a class="navbar-brand" style="color:White;"href="Ad_Feedack.php">Feedbacks</a>
						<a class="navbar-brand" style="color:White;"href="staffs.php">Staffs</a> 
						<?php  if (isset($_SESSION['admin_id'])) {
			                     $row= $_SESSION['admin_fname'];}  ?>
                           <select name="forma" onchange="location=this.value;">
                          <option value=""> <a class="navbar-brand" href=" " style="color:Red;"><?php echo $row; ?></a></option>
                          <option value="./logout.php"> <a class="navbar-brand"  style="color:Red;">logout</a></option>
											
						
						
					</div>

				</div>


				<img src="Images/user.png" style="padding-top:px;">
				Username
		</nav>

					


			

<!--
			<div class="w3-card-4 w3-col s12 w3-margin">
				<div class="w3-container w3-padding ">
					<div class="row  w3-xxxlarge " style="padding-left:16px"><img src="imgs/meals.jpg" style="width:40%" "height:10%">&nbsp;&nbsp;</i> Meals </div>
				</div> -->
									
				<div class="w3-container w3">											
				<!--searching bar-->										
					<div class="row  w3-margin" >
						<button  class="w3-btn w3-block w3-green  col-md-3" type="button" onClick= "window.location.href = 'Addnewmeal.html';" ><i class="fa fa-plus"></i>&nbsp;Add New Meal</button>
					</div>																	
					<div class="row  w3-margin "style="margin-top:0px;" >






										
						<div class="w3-col s2 "style="margin-left:22px">
							<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST"> 
								<input class="w3-input w3-border " name="keyname" type="text" placeholder="Name" id="meal_name">
								<input class="btn btn-success" type="submit" value="Search" name="submit">


							</form>
							
						</div>
		


												
					</div>
											
					<div id="result">
						


					</div>										
					<!--end search bar-->																	
						<div class="row  w3-margin" >
							<table class="table table-striped table-bordered" id="example">
								<thead>
									<tr>
										<th>Meal ID</th>
										<th>Meal Name</th>
										<th>Meal Description</th>
										<th>Meal image</th>
										<th>Meal type</th>
										<th>Price</th>
										<th>Action</th>		
									</tr>

										<?php 
											if(isset($_POST["submit"])) {

												include 'includes/dbh.inc.php';

												$sql = "SELECT * FROM foods WHERE food_name LIKE '%{$_POST["keyname"]}%' OR food_desc LIKE '%{$_POST["keyname"]}%' OR unit_price1 LIKE '%{$_POST["keyname"]}%' OR category_name LIKE '%{$_POST["keyname"]}%'";

											$result = $conn -> query($sql);

					
											if ($result->num_rows>0 ) {


												$i=0;


											  while($row = $result->fetch_assoc()) {
											  		$i++;

													echo "<tr>";
														  echo "<td>"; echo $row['food_id'];  echo "</td>";
														  echo "<td>"; echo $row['food_name'];  echo "</td>";
														  echo "<td>"; echo $row['food_desc'];  echo "</td>";
														  echo "<td>"; echo "<img src=Images/".$row['food_id'].".png>"; echo "</td>";
														  echo "<td>"; echo $row['category_name'];  echo "</td>";
														  echo "<td>"; echo $row['unit_price1'];  echo "</td>";
														  echo "<td><a href='admin_delete.php?id={$row["food_id"]}'>Delete</a></td>";





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