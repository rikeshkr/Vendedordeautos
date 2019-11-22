<?php
	$host="localhost";
	$db="login";
	$con= mysqli_connect($host,"root","","login");
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
	$staffid=mysqli_real_escape_string($con,$_POST["misc"]); 
	$password=mysqli_real_escape_string($con,$_POST["pass"]);
	$staffdept=mysqli_real_escape_string($con,$_POST["dept"]);

	$staffid=stripcslashes($staffid);
	$password=stripcslashes($password);
	$staffdept=stripcslashes($staffdept);
	$sql = "INSERT INTO login(misc, pass, dept, conpass) VALUES ($staffid,'$password','$staffdept','$password')";
	//header('location: loginpage.php');
	if ($con->query($sql) === TRUE) {
    //echo "New record created successfully";
	header('location: loginpage.php');
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
