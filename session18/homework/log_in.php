<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In</title>
	<style>
		label{
			display: inline-block;
			width: 100px;
		}

	</style>
</head>
<body>
	<?php
		session_start();
		if (isset($_POST['submit'])) {
			include("connect_db.php");
			$username = $_POST['username'];
			$pwd = $_POST['pwd'];
			if (empty($username) || empty($pwd)) {
				echo "Bạn chưa nhập username hoặc pwd";
			}
			$sql = "SELECT *FROM accounts WHERE user_name = '$username' and password ='$pwd'";
			$result = mysqli_query($conn, $sql);
			$check = $result->num_rows;
			if ($check == 0) {
				echo "Tên đăng nhập không tồn tại hoặc mật khẩu không đúng";
			}else{
				$_SESSION['username'] = $username;
				echo "Đăng nhập thành công. Xin chào ".$username;
				header('Location:profile.php');
			}
		}
	?>
	<h1>Log In</h1>
	<form action="" method="POST">
		<label for="username">Username: </label>
		<input type="text" id="username" name="username">
		<br><br>
		<label for="pwd">Password: </label>
		<input type="password" id="pwd" name="pwd">
		<br><br>
		<input type="submit" value="Log In" name="submit">
		<br><br>
		<a href="register.php">Register</a>
	</form>
</body>
</html>