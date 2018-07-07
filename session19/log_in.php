<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In</title>
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
	<?php
		session_start();
		if (isset($_POST['submit'])) {
			include("connectdb.php");
			$username = $_POST['username'];
			$pwd = md5($_POST['pwd']);
			if (empty($username) || empty($pwd)) {
				echo "Bạn chưa nhập username hoặc pwd";
			}
			$sql = "SELECT *FROM accounts WHERE username = '$username' and password ='$pwd'";
			$result = mysqli_query($conn, $sql);
			$check = $result->num_rows;
			if ($check > 0) {
				$userInfo = array();
				while($row = $result->fetch_assoc()) {
					$userInfo['username'] = $row['username'];
					$userInfo['role'] = $row['role'];
					
				}
				$_SESSION['userInfo'] = $userInfo;
				echo "Login success!";
			}else{
				echo "Wrong username or password";
			}
		}
	?>
	<div>
		<h1>Log In</h1>
		<form action="" method="POST">
			<label for="username">Username: </label>
			<input type="text" id="username" name="username">
			<br><br>
			<label for="pwd">Password: </label>
			<input type="password" id="pwd" name="pwd">
			<br><br>
			<input class="btn" type="submit" value="Log In" name="submit">
			<br><br>
			Not a member yet?<a href="register.php">Get an ID</a>
		</form>
	</div>
</body>
</html>