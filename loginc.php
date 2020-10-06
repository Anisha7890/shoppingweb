<?php
$error=''; 
if(isset($_POST['submit'])){
 if(empty($_POST['user']) || empty($_POST['pass'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
 
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 
 $conn = mysqli_connect("localhost:3307", "root", "");
 
 $db = mysqli_select_db($conn, "project");
 
 $query = mysqli_query($conn, "SELECT * FROM stores WHERE pass='$pass' AND user='$user'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 0){
 header("Location: product.php"); 
 }
 else{
 $error = "Username of Password is Invalid";
 }
 mysqli_close($conn); 
 }
}
 
?>