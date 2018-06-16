<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
</head>
<body>
	<form action="" method="post">
		<label for="username">User Name: </label>
		<input type="text" placeholder="User Name" id="username" name="username">
		<br><br>
		<label for="pwd">Password: </label>
		<input type="password" placeholder="Password" id="pwd" name="pwd">
		<br><br>
		<input type="submit" value="Sign up" name="submit">
	</form>
	<?php
		include("connect_db.php");
		 if (isset($_POST["submit"])) {
		 	$username = $_POST["username"];
		 	$pwd = $_POST["pwd"];
		 	if ($username == "" || $pwd == "") {
		 		echo "Vui lòng nhập đầy đủ thông tin";
		 	}else{
		 		$check = "SELECT *FROM accounts WHERE user_name = '$username' ";
		 		$result = mysqli_query($conn, $check);
		 		if ($result->num_rows > 0) {
		 			echo "Tài khoản này đã tồn tại. Vui lòng nhập tên khác";
		 			die();
		 		}else{
		 			$sql = "INSERT INTO accounts (user_name, password) VALUES ('$username', '$pwd')";
		 			if (mysqli_query($conn, $sql)) {
		 	        echo "Đăng ký thành công";
		 		    } else {
				        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		 		    }
		 		}
				
		 	}
		 	
		 }
		
	?>
</body>
</html>