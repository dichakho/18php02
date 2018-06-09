<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Thêm sản phẩm</h1>
	<form action="" method="POST">
		product_id: <input type="text" name="product_id">
		<br><br>
		categoryID : <input type="text" name="categoryID">
		<br><br>
		product_name: <input type="text" name="product_name"><br><br>
		price: <input type="text" name="price">
		<br><br>
		quantity: <input type="text" name="quantity">
		<br><br>
		<input type="submit" name="submit" value="Thêm">
	</form>
	<?php
		if (isset($_POST['submit'])) {
			$product_id = $_POST['product_id'];
			$categoryID = $_POST['categoryID'];
			$product_name = $_POST['product_name'];
			$price = $_POST['price'];
			$quantity = $_POST['quantity'];
			$conn = new mysqli('localhost', 'root', '', 'demo');

			if (! $conn) {
				die ( 'Connection failed: ' . $conn->error () );
			}
			$sql = "INSERT INTO product (product_id, categoryID, product_name, price,quantity) VALUES ('$product_id', '$categoryID', '$product_name', '$price', '$quantity')";
			$result = $conn->query ( $sql );
		}
	?>
</body>
</html>