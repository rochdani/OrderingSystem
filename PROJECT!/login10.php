<?php 
 $user_name=$_POST['user_name'];
 $password=$_POST['password'];

 $user_name=stripcslashes($user_name);
 $password=stripcslashes($password);
 $user_name=mysql_real_escape_string($user_name);
 $password=mysql_real_escape_string($password);

 mysql_connect("localhost","root"," ");
 mysql_select_db("restaurant");

 $result=mysql_query("select * from customer where user_name='$user_name' and password='$password' ")or die("failed to query database".mysql_error());
 $row=mysql_fetch_array($result);
 if($row['user_name']==$user_name && $row['password']==$password){
 	echo "login success!!! welcome".$row['user_name'];
 }else{
 	echo "failed to login";
 }
?>