<?php 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$con=new mysqli("localhost","root","","pro");
$query="INSERT INTO customers VALUES(NULL,'$fname','$lname','$email','$password')";
if($con->query($query))
{
	header('location:login.php');
}
else
{
	echo mysqli_error($con);
}