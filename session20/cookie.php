<?php
	//khoi tao cookie
	
	setcookie("myName", "Khoi", time() + 15);
	//goi gia tri cookie
	echo $_COOKIE["myName"];
	//xoa cookie
	// setcookie("myName", "Khoi", time() - 10);
// 	$myName = "Khoi";

// 	echo $myName;
// ?>