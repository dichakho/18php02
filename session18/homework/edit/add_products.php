<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Products</title>
</head>
<body>
	<h1>Add new products</h1>
	<form action="" method="POST">
		product_id: <input type="text" name="product_id">
		<br><br>
		category_id: <input type="text" name="category_id">
		<br><br>
		product_name: <input type="text" name="product_name">
		<br><br>
		price: <input type="text" name="price">
		<br><br>
		quantity: <input type="text" name="quantity">
		<br><br>
		<input type="submit" name="submit" value="Add new product">
		<?php
		include("../connect_db.php");
			if (isset($_POST['submit'])) {
				$product_id = $_POST['product_id'];
				var_dump($product_id);
				$category_id = $_POST['category_id'];
				var_dump($category_id);
				$product_name = $_POST['product_name'];
				var_dump($product_name);
				$price = $_POST['price'];
				var_dump($price);
				$quantity = $_POST['quantity'];
				var_dump($quantity);
				
				$sql = "INSERT INTO products (product_id, category_id, product_name, price, quantity) VALUES ('$product_id', '$category_id', '$product_name', '$price', '$quantity')";
				$result = $conn->query($sql);
			}

		?>
	</form>
</body>
</html>