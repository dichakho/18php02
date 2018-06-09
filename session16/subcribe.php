<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="" method="POST">
		<label for="name">Họ và tên:</label>
		<input type="text"  id="name" name="name"><br><br>
		<label for="email">Email: </label>
		<input type="Email" id="email" name="email"><br><br>
		<label for="phonenum">Số điện thoại: </label>
		<input type="number" id="phonenum" name="phonenum"><br><br>
		<input type="submit" name="subcribe" value="Subcribe">
	</form>

	<?php
		 $servername = "localhost";
		 $username = "root";
		 $password = "";
		 $database = "18php02";
		
		 $conn = mysqli_connect($servername, $username, $password, $database);

		
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		echo "Connected successfully";

		if (isset($_POST["subcribe"])) {
		    if(isset($_POST["name"])) { $name = $_POST['name']; }
		    if(isset($_POST["email"])) { $email = $_POST['email']; }
		    if(isset($_POST["phonenum"])) { $phonenum = $_POST['phonenum']; }
		    

		    
		    $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phonenum')";

		    if (mysqli_query($conn, $sql)) {
		        echo "Thêm dữ liệu thành công";
		    } else {
		        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		    }
		}

		
		mysqli_close($conn);
		
	?>
</body>
</html>