<?php 
	session_start();
	if(!isset($_SESSION['username'])){
		header("Location: login.php");
	}
	echo "Hello ".$_SESSION['username'].' ban co the mua hang!';
	echo "<a href='logout.php'>Logout here!</a>";
?>