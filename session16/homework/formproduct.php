<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nhập dữ liệu sản phẩm</title>
</head>
<body>
	<form action="" method="POST">
		<label for="categoryid">Category ID: </label>
		<input type="text" id="categoryid" name="categoryid"><br><br>
		<label for="name">Product Name: </label>
		<input type="text"  id="name" name="name"><br><br>
		<label for="price">Price: </label>
		<input type="text" id="price" name="price"><br><br>
		<label for="quantity">Quantity: </label>
		<input type="text" id="quantity" name="quantity"><br><br>
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
		 	if (isset($_POST["categoryid"])) {
		 		$categoryid = $_POST['categoryid'];
		 	}
		 	if (isset($_POST["name"])) {
		 		$name = $_POST['name'];
		 	}
		 	if (isset($_POST["price"])) {
		 		$price = $_POST['price'];
		 	}
		 	if (isset($_POST["quantity"])) {
		 		$quantity = $_POST['quantity'];
		 	}

		 	$sql = "INSERT INTO product (categoryID, product_name, price, quantity) VALUES ('$categoryid', '$name', '$price', '$quantity')";

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