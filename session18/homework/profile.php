<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile</title>
</head>
<body>
	<?php
		session_start();
		echo "Đăng nhập thành công. Xin chào ".$_SESSION['username'];
		echo "<br>";
		echo "<a href='log_out.php'>Log Out</a>";
	?>

</body>
</html>