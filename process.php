<?php
	$host="localhost";
	$db="login";
	$con=mysqli_connect($host,"root","","login");
	$staffid=mysqli_real_escape_string($con,$_POST["misc"]); 
	$password=mysqli_real_escape_string($con,$_POST["pass"]);
	$staffdept=mysqli_real_escape_string($con,$_POST["dept"]);

	$staffid=stripcslashes($staffid);
	$password=stripcslashes($password);
	$staffdept=stripcslashes($staffdept);

	$result=mysqli_query($con,"select * from login where misc='$staffid' and pass='$password' and dept='$staffdept'") or die("Failed to query database".mysqli_error($con));
	$row=mysqli_fetch_array($result);
	if ($row['misc']==$staffid && $row['pass']==$password && $row['dept']==$staffdept) {
		header('location: index3.php#user');
	} 
	else 
	{
		echo ("not a user of vendedor de autos");
	}
?>