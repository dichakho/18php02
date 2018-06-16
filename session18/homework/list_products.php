<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/list_product.css">
	<title>Products</title>
</head>
<body>
	<?php
		include("connect_db.php");
		$sql = "SELECT product_id, category_id, product_name, price, quantity FROM products";
		$result = $conn->query($sql) or die($conn->error);	
	?>
	<h1>Sản phẩm</h1>
	<div class="btn">
		<a href="edit/add_products.php">Add new products</a>
	</div>
	<table>
		<tr>
			<th>product_id</th>
			<th>category_id</th>
			<th>product_name</th>
			<th>price</th>
			<th>quantity</th>
			<th>Edit</th>
		</tr>
		<?php
			while ($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$row['product_id']."</td>";
				echo "<td>".$row['category_id']."</td>";
				echo "<td>".$row['product_name']."</td>";
				echo "<td>".$row['price']."</td>";
				echo "<td>".$row['quantity']."</td>";
				echo "<td>
					<a href=''>Sửa</a> |
					<a href=''>Xóa</a>
				</td>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>