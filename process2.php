<?php
session_start();

// initializing variables
$misc = "";
$dept   = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'login');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $misc = mysqli_real_escape_string($db, $_POST['misc']);
  $dept = mysqli_real_escape_string($db, $_POST['dept']);
  $password_1 = mysqli_real_escape_string($db, $_POST['pass']);
  $password_2 = mysqli_real_escape_string($db, $_POST['conpass']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($misc)) { array_push($errors, "Username is required"); }
  if (empty($dept)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  $user_check_query = "SELECT * FROM login WHERE misc='$misc' OR dept='$dept' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['misc'] === $misc) {
      array_push($errors, "Username already exists");
    }

    if ($user['dept'] === $dept) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO login (misc dept, pass) 
  			  VALUES('$misc', '$dept', '$pass')";
  	mysqli_query($db, $query);
  	$_SESSION['misc'] = $misc;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: loginpage.php');
  }
}
?>
