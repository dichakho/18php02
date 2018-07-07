<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<style>
		body{
			background-color: #F0F8FF;
		}
		div{
			width: 60%;
			margin: 0 auto;
			padding: 100px;
			text-align: center;
			
		}
		.btn{
			border-style: none;
			padding: 10px;
			background-color: #1473E6;
		}
		label{
			display: inline-block;
			width: 100px;
		}
	</style>
</head>
<body>
	<div>
		<h1>Register</h1>
	<form action="" method="post">
		<label for="username">User Name: </label>
		<input type="text" placeholder="User Name" id="username" name="username">
		<br><br>
		<label for="pwd">Password: </label>
		<input type="password" placeholder="Password" id="pwd" name="pwd">
		<br><br>
		<input class="btn" type="submit" value="Sign up" name="submit">
	</form>
	</div>
	<?php
		include("connectdb.php");
		 if (isset($_POST["submit"])) {
		 	$username = $_POST["username"];
		 	$pwd = md5($_POST["pwd"]);
		 	if ($username == "" || $pwd == "") {
		 		echo "Vui lòng nhập đầy đủ thông tin";
		 	}else{
		 		$check = "SELECT *FROM accounts WHERE username = '$username' ";
		 		$result = mysqli_query($conn, $check);
		 		if ($result->num_rows > 0) {
		 			echo "Tài khoản này đã tồn tại. Vui lòng nhập tên khác";
		 			die();
		 		}else{
		 			$sql = "INSERT INTO accounts (username, password) VALUES ('$username', '$pwd')";
		 			if (mysqli_query($conn, $sql)) {
		 	        echo "Đăng ký thành công";
		 	        echo "<br>";
		 	        echo "<a href='log_in.php'>Log In</a>";
		 		    } else {
				        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		 		    }
		 		}
				
		 	}
		 	
		 }
		
	?>
</body>
</html>