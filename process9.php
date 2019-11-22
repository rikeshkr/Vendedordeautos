<?php
	$host="localhost";
	$db="sell2";
	$con= mysqli_connect($host,"root","","sell2");
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
	$password=mysqli_real_escape_string($con,$_POST["pass"]);
	$staffid=mysqli_real_escape_string($con,$_POST["price"]); 
	
	$staffdept=mysqli_real_escape_string($con,$_POST["dept"]);
	$price = mysqli_real_escape_string($con,$_POST["conpass2"]);
	$city = mysqli_real_escape_string($con,$_POST["conpass1"]);

	$staffid=stripcslashes($staffid);
	$password=stripcslashes($password);
	$staffdept=stripcslashes($staffdept);
	$price = stripcslashes($price);
	$city = stripcslashes($city);
	$sql = "INSERT INTO sell2(car, year, km, price,city) VALUES ('$password','$staffid','$staffdept','$price','$city')";
	//header('location: loginpage.php');
	if ($con->query($sql) === TRUE) {
    //echo "New record created successfully";
	header('location: imagecheck.php');
	
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
