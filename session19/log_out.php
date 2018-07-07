<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	session_start();
	// session_unset();
	session_destroy();
	header("Location: log_in.php");
	?>
</body>
</html>

