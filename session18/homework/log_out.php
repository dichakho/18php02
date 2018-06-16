<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		session_start(); 
	 
		if (isset($_SESSION['username'])){
		    unset($_SESSION['username']);
		}
	?>
	<a href="log_in.php">Log In</a>
</body>
</html>

