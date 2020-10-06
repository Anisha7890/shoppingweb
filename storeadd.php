<html>
<html lang ="en">
<head> 
   <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>All Products- MYStore</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2family=poppins:wght@300;400;500;600;700&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
	<style type="text/css">
		
   .container{
    border: 2px solid black;
   width: 500px;
   margin: auto;
   margin-top: 10px;
	   margin-right: 20px;
  
	 
   background-color: grey;
   }
		body{
            background-image: url('pic/fashion.jpg');
            background-size: 1500px;
            margin-left: 0px;
            background-repeat: no-repeat;
            
            height: 500px;
        }
		input{
			padding: 10px;
			height: 30px;
			width: 300px;
			border-radius: 10px;
			margin: 2px;
			margin-left: 60px;
		}
		.navabar{
			margin: 10px;
		}
		
	</style>
	
	<body>
	 
        <div class="navbar">
    <div class="logo">
       <img src= " images/download.png" width="125px">
			</div>
        <nav class="b">
            <ul id="MenuItems"> 
            <li><a href="project.php">Home</a></li>
            <li><a href="product.php">Products</a></li>
            <li><a href="about.php">About Us</a></li> 
            <li><a href="">Contact Us</a></li>
            <li><a href="storeadd.php">Account</a></li>
             <li><a href="">Search</a></li>
            
            </ul>
            </nav>
			</div>
		
	
	 <div class ="container">
            
  
          
           
	<form action="storeaddcon.php" method="post">
		<table align="center" cellspacing="20">
			<tr><td><center><h1>Create Account</h1></center></td></tr>
			
			<tr><td><input type="text" placeholder="Username" name="username" required></td></tr>
			<tr><td><input type="email"placeholder="Enter EmailId"name="email"required></td></tr>
			<tr><td><input type="text"placeholder="Address"name="address"required></td></tr>
			<tr><td><input type="text"placeholder="Enter Pincode"name="pincode"required></td></tr>
			<tr><td><input type="text" placeholder="Contact no" name="contact" required></td></tr>
			<tr><td><input type="password" placeholder="Password" name="password" required></td></tr>
			
			
			<tr><td><input type="Password" placeholder="CPassword" name="cpassword" required></td></tr>
			<tr><td>
			<input type="submit" value="Submit"></td></tr>
			<tr><td><a href="login.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Already have an Account?Login</td></tr>
		</table>
    </form>

	</form>
	</body>
</div>

	
</html>