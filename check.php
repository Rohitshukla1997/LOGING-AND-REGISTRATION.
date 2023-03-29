<?php
$email=$_POST['email'];
$password=$_POST['password'];
$con=new mysqli("localhost","root","","pro");
$query="SELECT * FROM customers WHERE email='$email' AND password='$password'";
$result=$con->query($query);
$data=mysqli_num_rows($result);
if($data==1)
{
	session_start();
	$_SESSION['email']=$email;
	header('location:main.php');
}	
else
{
	header('location:reg.php');
}	

  ?>