<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Thêm danh mục sản phẩm</h1>
	<form action="" method="POST">
		categoryID: <input type="text" name="categoryID">
		categoryName: <input type="text" name="categoryName">
		<input type="submit" name="submit" value="Thêm">
	</form>
	<?php
		if (isset($_POST['submit'])) {
			$categoryID = $_POST['categoryID'];
			$categoryName = $_POST['categoryName'];
			$conn = new mysqli('localhost', 'root', '', 'demo');

			if (! $conn) {
				die ( 'Connection failed: ' . $conn->error () );
			}
			$sql = "INSERT INTO categories (categoryID,categoryName) VALUES ('$categoryID', '$categoryName')";
			$result = $conn->query ( $sql );

		}
	?>
</body>
</html>