<?php
	//khoi tao session
	session_start();
	//gan gia tri cho SESSION
	$_SESSION['myUserName'] = 'dichakho';
	$_SESSION['myPhone'] = '0981234899';
	//goi gia tri session
	echo $_SESSION['myUserName'];
	echo "<br>";
	echo $_SESSION['myPhone'];
?>