<?php
	include "includes/dbh.inc.php";
	$sql="DELETE from foods where food_id=".$_GET["id"]";
	if($conn->query($sql))
	{
		echo "<script>window.open('admin_meals_search.php?mes=Meals Details Deleted','_self')</script>";
	}
	else
	{
		echo "<script>window.open('admin_meals_search.php','_self')</script>";
	}
?>
