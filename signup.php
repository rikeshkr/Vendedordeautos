<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body  style= "background: url(login2.jpeg); background-repeat:no-repeat;background-size: cover;">
	<div class="loginbox" id="frm" style = "background:black;">
		<img src="avatar1.png" class="avatar">
		<h1 style="color: blue">LOGIN</h1>
		<form action="process3.php" method="POST">
			 <p style = "color:white;">Name</p>
			 <input type="text" id="misc" name="misc" placeholder="Enter NAME">
			 <p style = "color:white;">EMAIL</p>
			 <input type="text" id="dept" name="dept" placeholder="Enter EMAIL">
			 <p style = "color:white;">PASSWORD</p>
			 <input type="password" name="pass" id="pass" placeholder="Enter PASSWORD"></br>
			 <p style = "color:white;">CONFIRM PASSWORD</p>
			 <input type="password" name="conpass" id="conpass" placeholder="Enter PASSWORD"></br>
			 
			 <input type="submit" name="reg_user" id="btn" value="SIGNUP">
		</form>
	</div>
</body>
</html>