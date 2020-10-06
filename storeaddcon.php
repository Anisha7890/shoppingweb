<?php
$username=$_POST["username"];
$email=$_POST["email"];
$address=$_POST["address"];
$pincode=$_POST["pincode"];
$contact=$_POST["contact"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
$con=mysqli_connect("localhost:3307","root","","project");
if(!$con)
	die("Server not connected");
$s="insert into stores(username,email,address,pincode,contact,password,cpassword)values('".$username."','".$email."','".$address."','".$pincode."','".$contact."','".$password."','".$cpassword."')";
$value=mysqli_query($con,$s);
if($value!=0)
echo "Added Sucessfully";
else
echo "unable to add";
?>


