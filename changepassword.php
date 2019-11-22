<?php
	$host="localhost";
	$db="login";
	$con=mysqli_connect($host,"root","","login");
	$staffid=mysqli_real_escape_string($con,$_POST["misc"]);
	$oldpassword=mysqli_real_escape_string($con,$_POST["pass"]);
	$password=mysqli_real_escape_string($con,$_POST["conpass"]); 
	$newpassword=mysqli_real_escape_string($con,$_POST["conpass"]);
	$staffid=stripcslashes($staffid);
	$oldpassword=stripcslashes($oldpassword);
	$password=stripcslashes($password);
	//$newpassword=stripcslashes($newpassword);
	//$time=date("Y-m-d H:i:s");
	if(preg_match( '/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{8,16}/', $password))
	{
		if($password==$newpassword)
		{
			mysqli_query($con,"update login SET pass='$newpassword' where misc='$staffid' and pass='$oldpassword'") or die("Failed to query database".mysqli_error($con));
			//mysqli_query($con,"update login SET timestamp='$time' where misc='$staffid' and pass='$oldpassword'") or die("Failed to query database".mysqli_error($con));
			echo "Success";
			header('location:loginpage.php');
		}
	}
	else
	{
		echo "INVALID CREDENTIALS, PLEASE CHECK AND TRY AGAIN";
	}
?>