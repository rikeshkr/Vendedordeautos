<!DOCTYPE html>
<html>
<head>
	<title>change password</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body  style= "background: url(login2.jpeg); background-repeat:no-repeat;background-size: cover;">
	<div class="loginbox" id="frm">
		<h1 style="color: blue">CHANGE PASSWORD</h1>
		<form action="forgotpassword.php" method="POST">
			 <p> ENTER THE NEW PASSWORD</p>
			 <input type="password" name="pass" id="pass" placeholder="Enter NEW PASSWORD"></br>
			 <p> CONFIRM PASSWORD</p>
			 <input type="password" name="conpass" id="conpass" placeholder="CONFIRM PASSWORD"></br>
			 <input type="submit" name="btn" id="btn" value="CONFIRM">
		</form>
	</div>
</body>
</html>