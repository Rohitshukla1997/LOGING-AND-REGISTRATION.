<?php
session_start();
if(empty($_SESSION['email']))
{
	header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>WELCOME</title>
</head>
<body>
	<div align="center">
		<h1>WELCOME TO THE WORLD OF PEOPLE CONNECTION</h1> <br><br>
		<p>
			HELLO.
			
			
		</p><br>
		

		<button><a href="logout.php">LOGOUT</a></button>

</body>
</html>