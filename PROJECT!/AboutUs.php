<!doctype html>
	<html lang="en">
		 <head>
			<!-- Required meta tags -->
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
		<!--home CSS-->
			<link rel="stylesheet" type="text/css" href="css/home.css" media="screen" />
			
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<!-- font awesome -->
			<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
			<!-- rating star css -->
			<link rel="stylesheet" href="jss/ratingstar.css">  
			
			<!-- Latest compiled JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			
			<!-- star js -->
			<script src="jss/ratingstar.js"></script>
	
			<title>Dulsara Restaurant</title>
		</head>

		
		<body >
    
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

				
				<div class ="col-12" >
					<div class ="col-8">
						<h2>ABOUT US</h2>
							<p>Welcome to Badhula Dulsara restaurant. The Dulsara shows the diversity in means of Unique experiences in each of the restaurant with specified facilities, so order your food and we will deliver.

		Ideally, we are located Cocowatte road Badhula town.

							<p> Our restaurant takeway,food order,delivery,table reservation combine with service along with the inspired interior and nature aided surrounding.

		We facilitates the spaces for the private parties with the repetitive services.</p>

							<p>Dulsara delivers a great hospitality for the customers, with well trained and perfect staff members on time along the satisfaction.</p>
								</div>
								
					<div>
						<div class ="col-4">
							<h2>HOTEL FACILITIES</h2>
								<ul>
									<li> Takeaway Facilities</li>
									<li>Food Order</li>
									<li>Table reservation</li>
									<li>Food Delivery</li>
									<li>View Food items</li>
									<li>Celebrate Parties</li>
									
								</ul>
						</div>
					</div>
				</div>



				<div align ="center"  >
					<div class="col-12">

						<div class="form-group">
							<div class="form-group has-success has-feedback">
								<label for="name">Name :</label>
									<input type="text" class="form-control" id="name">		    
							</div>
							<div class="form-group has-success has-feedback">
								<label for="email">Email :</label>
									<input type="email" class="form-control" id="email">		    
							</div>	 
							<label for="email">Rating :</label>	  	
							<div class='starrr' id='rating-student'></div> 	<br>
								<input type="button" id="submit" class="btn btn-success" value="Register Student">
							<div class="msg"></div>
						</div>	

					</div>
				</div>
					<script>
						// rating
						var rate;
						$('#rating-student').starrr({
						  change: function(e, value){ 
							rate = value;  	       
							if (value) {
							  $('.your-choice-was').show();      
							} else {
							  $('.your-choice-was').hide();
							}
						  }
						});
						// ajax submit
						$("#submit").click(function(){	
							var name = $('#name').val();
							var email = $('#email').val();	
							$.ajax({		
								url: "rating.php",
								type: 'post',
								data: {v1 : name, v2 : email, v3 : rate},
								success: function (status) {
									if(status == 1){
										$('.msg').html('<b>Student Inserted !</b>');
									}else{
										$('.msg').html('<b>Server side error !</b>');        		
									}
								}
							});

						});
					</script>

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