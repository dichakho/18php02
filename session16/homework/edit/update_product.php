<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

		if (isset($_GET['product_id'])) {
			$product_id = $_GET['product_id'];
			$conn = new mysqli('localhost', 'root', '', 'demo');
				
				if (! $conn) {
					die ( 'Connection failed: ' . $conn->error () );
				}

				$sql = "SELECT product_id, categoryID, product_name, price, quantity FROM product WHERE product_id = '$product_id'";
				$result = $conn->query ( $sql );
				$row = $result->fetch_assoc ();
		}
		if (isset($_POST['submit'])) {
			$id = $_POST['product_id'];
			$cateid = $_POST['categoryID'];
			$name = $_POST['product_name'];
			$price = $_POST['price'];
			$quantity = $_POST['quantity'];
			$edit = "UPDATE product SET product_id = '$id', categoryID = '$cateid', product_name = '$name', price = '$price', quantity = '$quantity' WHERE product_id = '$product_id'";
			$result2 = $conn->query($edit);
		}
	?>
	<h1>Sửa thông tin sản phẩm</h1>
	<form action="" method="POST">
		product_id: <input type="text" name="product_id" value="<?php echo $row['product_id']?>">
		<br><br>
		categoryID : <input type="text" name="categoryID" value="<?php echo $row['categoryID']?>"> 
		<br><br>
		product_name: <input type="text" name="product_name" value="<?php echo $row['product_name']?>"><br><br>
		price: <input type="text" name="price" value="<?php echo $row['price']?>">
		<br><br>
		quantity: <input type="text" name="quantity" value="<?php echo $row['quantity']?>">
		<br><br>
		<input type="submit" name="submit" value="Cập nhật">
	</form>
</body>
</html>