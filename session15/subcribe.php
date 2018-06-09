<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
</head>
<body>
	<form action="" method="post">
		<label for="name">Họ và tên:</label>
		<input type="text"  id="name" name="name"><br><br>
		<label for="email">Email: </label>
		<input type="Email" id="email" name="email"><br><br>
		<label for="pwd">Password: </label>
		<input type="Password" id="pwd" name="pwd"><br><br>
		<label for="phonenum">Số điện thoại: </label>
		<input type="number" id="phonenum" name="phonenum"><br><br>
		<input type="submit" name="subcribe" value="Subcribe">
	</form>
	<?php 
		if (isset($_POST["subcribe"])) {
			$name = $_POST["name"];
			$email = $_POST["email"];
			$pwd = $_POST["pwd"];
			$phonenum = $_POST["phonenum"];
			if (empty($name)||empty($email)||empty($pwd)||empty($phonenum)) {
				echo "Bạn chưa nhập đủ thông tin";
			}
			else{
				echo "Bạn đã đăng ký thành công";
				$info = "$name - $email - $pwd - $phonenum \n";
				$file = fopen("textuser.txt", "a+");
				fwrite($file, $info);
			}
		}
	?>
</body>
</html>