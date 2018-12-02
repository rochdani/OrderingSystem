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