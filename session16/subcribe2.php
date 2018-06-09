<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercies_1</title>
</head>
<body>
	<form action="" method="POST">
		Nhập tên: <input type="text" name="name" id="name">
		Nhập email: <input type="text" name="email" id="email">
		Nhập phone: <input type="text" name="phone" id="phone">
		<br>
		<input type="submit" name="submit" value="submit">
	</form>
	<?php
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			if (empty($name)) {
				echo "Bạn chưa nhập liệu!"."<br>";
			}
			else
			{
				echo "Bạn đã nhập liệu!";
				$servername = "localhost";
				$username = "root";
				$password = "";
				$database = "18php02";
				//Create connetionn
				$conn = new mysqli($servername, $username, $password, $database);
				//Check connection
				if ($conn->connect_error) {
					die("connection failed: ". $conn->connect_error);
					//var_dump();
					//exit;
				}
				$sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
				if ($conn->query($sql)===TRUE) {
					echo "Successfully";
				}
				else{
					echo "Error";
				}
				$conn->close();
					}
				}
				
	?>
</body>
</html>