	<?php

		include 'dbh.inc.php';

		$mealid = $_POST['meal_id'];

		$mealname = $_POST['meal_name'];

		$mealdesc = $_POST['meal_desc'];

		$pricepermeal =$_POST['price_per_meal'];

		$eType = $_POST['eType'];

		$gallery_link = $_POST['gallery_link'];


		// Error handlers
		// check inputs are empty

		/*	if (empty($uid) || empty($pwd) || empty($mealid) ||  empty($mealname) ||  empty($mealdesc) || empty($pricepermeal) ||  empty($eType)) {

			} */

		$sql = "INSERT INTO foods (food_id, food_name,food_desc,category_name,unit_price1,gallery_link) VALUES('$mealid','$mealname','$mealdesc','$eType','$pricepermeal','$gallery_link');";
		mysqli_query($conn,$sql);
		header("Location: ../addnew_meal.php?meal_added_success");
 	