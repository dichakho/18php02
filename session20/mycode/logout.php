<?php 
	session_start();
	// unset($_SESSION['myUserName']);
	session_unset();
	//$_SESSION['myUserName'] = 'apple.luong1905';
	//echo $_SESSION['myUserName'];
	//exit();
	session_destroy(); 
	$_SESSION['myUserName'] = 'apple.luong1905';
	echo $_SESSION['myUserName'];
?>