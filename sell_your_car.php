<html>
<head>
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.header{
	background-color:#051147;
	color:#fff;
	border-color:#080808;
	min-height:50px;
    border:1px solid transparent;
    padding:0px;
}

.inner-header{
	width:80%;
	margin:auto;
}

.logo{
    float:left;
	height:50px;
	padding:15px;
	font-size:20px;
	font-weight:bold;
}

.header-link{
	float:right;
	font-size:14px;
	height:50px;
	padding:15px 15px;
	font-size:16px;
	font-weight:bold;
}

a{
	text-decoration:none;
	background-color:transparent;
    color:#ededed;
    padding:10px;
    font-family: Arial, Helvetica, sans-serif;
    margin: 0px;
}

#bt1{
    box-shadow:inset 0 3px 5px rgba(0, 0, 0, .125);     
    border-color:#ac2925;     
    border-radius: 5px;
    background-color: #051147;
    color:white;
}

* {
  box-sizing: border-box;
}

select { 
  width: 200px;
  height: 30px;
  margin-right:400px;
}
  
input[type=text] {
  width: 200px;
  height: 30px;
  margin-left:15px;
}
input[type=file]{
  margin-left:50px;
}
label { 
  font-color: black;
  display: inline-block;
  font-size: 22px;
  float: left;
  clear: left;
  width: 300px;
  text-align: right;
  margin-left:150px;
}
input { 
  display: inline-block;
  float: left;
}
h2 { 
  margin-left:550px;
  color: black;
  font-size: 250% 
}
.bg-image {
  /* The image used */
  background-image: url("c2.jpg");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}


.bg-text {
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0, 0.4);
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}

.btn {
  background-color: purple;
  border: none;
  color: white;
  padding: 8px 16px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 1;
  transition: 0.3s;
  float:right;
  margin-right: 100px;
}

.btn:hover {
  opacity: 0.6
}

footer{
	background-color:#000;
	color:#fff;
	font-size:14px;
}
    
.container{
	width:90%;
	margin:auto;
	overflow:hidden;
}
.body1{
    padding:0px;
    margin:0px;
}
</style>
</head>
<title>Sell Your Car</title>
</head>
<body class="body1">
	<div class="header">
                <div class="inner-header">
                <div class="logo">
                    <a href="front.php">Vendedor De Autos </a>
                </div>
                <div class="header-link">
                    <a href="sell_your_car.php">Sell Your Car</a>
                    <a  href="car_rental.html">Cars for Rent</a>
                    <a href="Service.html">Service & Repair</a>
                    <a href="products.html">Cars For Sale</a>
                  
                </div>
                </div>
        </div>
		<h2>Sell Your Car</h2>
    <div class="bg-image"></div>
    <div class="bg-text">
        <form action="process9.php" method="post">
            <p>
                <label>Select Car :</label>
                <input type="text" name="price" value="Car Type"><br/><br/>
    
                <label>KMs Driven :</label>
                <input type="text" name="dept" value="0 KMs"><br><br>
    
                <label>Car Year :</label>
                <input type="text" name="pass" value="Car Year"><br><br>
    
                <label>City :</label>
                <input type="text" name="conpass1" value="City Name"><br><br>
    
                <label>Expected Price :</label><input type="text" name="conpass2" value="0"><br><br>
				
				<input type="submit" name="reg_user" id="btn" value="DONE">
            </form>
          
            </p>
    </div>
	<footer>
                <div class="container">
                <p style="text-align:center;">Copyright © Vendedor de Autos. All Rights Reserved | Contact Us: +91 90000 00000</p>
                </div>
        </footer>
</body>
</html>