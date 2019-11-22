<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body  style= "background: url(login2.jpeg); background-repeat:no-repeat;background-size: cover;">
	<div class="loginbox" id="frm" style = "background:black;">
		<img src="avatar1.png" class="avatar">
		<h1 style="color: blue">Sellyour car</h1>
		<form action="process9.php" method="POST">
			 <p style = "color:white;">car</p>
			 <input type="text" id="misc" name="price" placeholder="Enter  CAR NAME">
			 <p style = "color:white;">kms driven</p>
			 <input type="text" id="dept" name="dept" placeholder="Enter Kms driven">
			 <p style = "color:white;">year</p>
			 <input type="text" name="pass" id="pass" placeholder="Enter Year"></br>
			 <p style = "color:white;">city</p>
			 <input type="text" name="conpass1" id="conpass" placeholder="Enter City"></br>
			 <p style = "color:white;">Expected price</p>
			 <input type="text" name="conpass2" id="conpass" placeholder="Enter price"></br>
			 
			 <input type="submit" name="reg_user" id="btn" value="SIGNUP">
		</form>
	</div>
</body>
</html>