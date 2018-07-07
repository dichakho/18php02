<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sản phẩm</title>
</head>
<body>
	<?php
		$conn = new mysqli('localhost', 'root', '','demo');
		if (!$conn) {
			die('Connection failed:'.$conn->error());
		}
		$sql = "SELECT Image,product_id, categoryID, product_name, price, quantity FROM product ";
		$result = $conn->query($sql) or die($conn->error);

	?>
	<h1>Sản phẩm</h1>
	<table border="1">
		<tr>
			<th>Select</th>
			<th>Image</th>
			<th>product_id</th>
			<th>categoryID</th>
			<th>product_name</th>
			<th>price</th>
			<th>quantity</th>
			<th>Edit</th>
		</tr>
		<?php
			while ($row = $result->fetch_assoc ()) {
				echo "<tr>";
				echo "<td>"."<input type='checkbox'>"."</td>";
				echo "<td>".  "<img src=".$row['Image'].">"  ."</td>";
				echo "<td>".$row['product_id']."</td>";
				echo "<td>".$row['categoryID']."</td>";
				echo "<td>".$row['product_name']."</td>";
				echo "<td>".$row['price']."</td>";
				echo "<td>".$row['quantity']."</td>";
				echo "<td>
				<a href='edit/add_product.php'>Thêm</a> | <a href='edit/update_product.php?idEdit=".$row['product_id']."'>Sửa</a> | <a href='edit/delete_product.php?product_id=".$row['product_id']."'>Xóa</a>
				</td>";		
				echo "</tr>";

			}
		?>
	</table>
</body>
</html>