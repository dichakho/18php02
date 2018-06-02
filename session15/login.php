<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<form action="" method="post">
		<label for="email">Email: </label>
		<input type="Email" id="email" name="email"><br><br>
		<label for="pwd">Password: </label>
		<input type="Password" id="pwd" name="pwd"><br><br>
		<input type="submit" name="login" value="Login">
	</form>
	<?php
		$file = file_get_contents("textuser.txt");
		$info = explode("-", $file);
		if (isset($_POST["login"])) {
			$email = $_POST["email"];
			$pwd = $_POST["pwd"];
			if (empty($email)||empty($pwd)) {
				echo "Bạn chưa nhập đủ thông tin";
			}
			else
			{
				if ($email == $info[1] && $pwd == $info[2]) {
					echo "Đăng nhập thành công";
				}
				else{
				 	echo "Sai email hoặc password";
				}
				
			}
		}

	?>
</body>
</html>