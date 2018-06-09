<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nhập dữ liệu danh mục sản phẩm</title>
</head>
<body>
	<form action="" method="POST">
		<label for="name">Category Name: </label>
		<input type="text"  id="name" name="name"><br><br>
		<input type="submit" name="subcribe" value="Nhập">
	</form>	
	<?php
		$servername = "localhost";
		 $username = "root";
		 $password = "";
		 $database = "demo";

		 $conn = mysqli_connect($servername, $username, $password, $database);
		 if ($conn->connect_error) {
		 	die("Connection failed: " . $conn->connect_error);
		 }
		 echo "Connected successfully";

		 if (isset($_POST["subcribe"])){
		 	if (isset($_POST["name"])) {
		 		$name = $_POST['name'];
		 	}

		 	$sql = "INSERT INTO categories (categoryName) VALUES ('$name')";

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