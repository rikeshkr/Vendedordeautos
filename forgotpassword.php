<?php
	session_start();
	$host="localhost";
	$db="login";
	$con=mysqli_connect($host,"root","","login");
	$password=mysqli_real_escape_string($con,$_POST["pass"]); 
	$newpassword=mysqli_real_escape_string($con,$_POST["conpass"]);
	$password=stripcslashes($password);
	$newpassword=stripcslashes($newpassword);
	$staff=$_SESSION["uid"];
	//$time=date("Y-m-d H:i:s");
	if(preg_match( '/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{8,16}/', $password))
	{
		if($password==$newpassword)
		{
			mysqli_query($con,"update login SET pass='$newpassword' where misc='$staff'") or die("Failed to query database".mysqli_error($con));
			//mysqli_query($con,"update login SET timestamp='$time' where misc='$staffid'") or die("Failed to query database".mysqli_error($con));
			echo "Success";
			header('location:loginpage.php');
		}
	}
	else
	{
		echo "PLEASE CHECK THE CREDENTIALS";
	}	
?> 