<?php
	session_start();
	$host="localhost";
	$db="login";
	$con=mysqli_connect($host,"root","","login");
	$staffid=mysqli_real_escape_string($con,$_POST["misc"]); 
	$_SESSION["uid"]=$staffid;
	$staffdept=mysqli_real_escape_string($con,$_POST["dept"]);
	$staffid=stripcslashes($staffid);
	$staffdept=stripcslashes($staffdept);
	$result=mysqli_query($con,"select * from login where misc='$staffid' and dept='$staffdept'") or die("Failed to query database".mysqli_error($con));
	$row=mysqli_fetch_array($result);
	if ($row['misc']==$staffid && $row['dept']==$staffdept)
	{
		header('location:changehtml.php');
	} else {
		echo "INVALID DETAILS";
	}
?>