<?php
include("loginc.php"); // Include loginserv for checking username and password
?>
 
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<style>
.login{
	background-color: grey;
width:360px;
margin:50px auto;
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
margin-top:70px; 
}
input[type=text], input[type=password]{
width:99%;
	padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
}
input[type=submit]{
width:100%;
background-color:green;
color:#fff;
border:2px solid #06F;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px; 
}
	body{
            background-image: url('pic/fashion.jpg');
            background-size: 1500px;
            margin-left: 0px;
            background-repeat: no-repeat;
            
            height: 500px;
	}
		.container{
   
   width: 400px;
   margin: auto;
   margin-top: 200px;
	   margin-right: 200px;
			
		}
</style>
</head>
<body>
<div class="container">
<div class="login">
<h1 align="center">Login</h1>
<form action="loginc.php" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
<input type="submit" value="Login" name="submit">
<a href="storeadd.php">Create Account<br>
	
	<a href="product.php">Back to page
	</form>
	
<!-- Error Message -->
<span><?php echo $error; ?></span>
</body>
</html>