<?php 
	session_start();
	if(!isset($_SESSION['username'])){
		header("Location: login.php");
	}
	echo "Login success!<br>";
	echo "Welcome ".$_SESSION['username']."<br>";
	echo "<a href='cart.php'>Mua hang!</a>";
?>