<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh mục sản phẩm</title>
</head>
<body>
	

	<?php
		$conn = new mysqli('localhost', 'root', '', 'demo');
		if (! $conn) {
			die ( 'Connection failed: ' . $conn->error () );
		}
		$sql = "SELECT categoryID, categoryName FROM categories";
		$result = $conn->query ( $sql );
	?>
	<h1>Danh mục sản phẩm</h1>
	<table border="1">
		<tr>
			<th>CategoryID</th>
			<th>CategoryName</th>
			<th>Edit</th>
		</tr>
		<?php
		while ($row = $result->fetch_assoc ()) {
			echo "<tr>";
			echo "<td>".$row['categoryID']."</td>";
			echo "<td>".$row['categoryName']."</td>";
			echo "<td>
			<a href='edit/add_category.php'>Thêm</a> | <a href='edit/update_category.php?categoryID=".$row['categoryID']."'>Sửa</a> | <a href='edit/delete_category.php?categoryID=".$row['categoryID']."'>Xóa</a>
			</td>";	
			echo "</tr>";
		}
		?>
	</table>
	

</body>
</html>