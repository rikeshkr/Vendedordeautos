<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body  style= "background: url(login2.jpeg); background-repeat:no-repeat;background-size: cover;">
	<div class="loginbox" id="frm" style = "background:black;">
		<img src="avatar1.png" class="avatar">
		<h1 style="color: blue">LOGIN</h1>
		<form action="process.php" method="POST">
			 <p style = "color:white;">Name</p>
			 <input type="text" id="misc" name="misc" placeholder="Enter NAME">
			 <p style = "color:white;">Email id</p>
			 <input type="text" id="dept" name="dept" placeholder="Enter Email">
			 <p style = "color:white;">PASSWORD</p>
			 <input type="password" name="pass" id="pass" placeholder="Enter PASSWORD"></br>
			 <a href="forgot.php">forgot your password?</a></br>
			 <a href="change.php">change password</a></br></br>
			 <input type="submit" name="btn" id="btn" value="LOGIN">
		</form>
	</div>
</body>
</html>