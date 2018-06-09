<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
			
			if (isset($_GET['categoryID'])) {
				$categoryID = $_GET['categoryID'];
				$conn = new mysqli('localhost', 'root', '', 'demo');
				
				if (! $conn) {
					die ( 'Connection failed: ' . $conn->error () );
				}

				$sql = "SELECT categoryID, categoryName FROM categories WHERE categoryID = '$categoryID'";
				$result = $conn->query ( $sql );
				$row = $result->fetch_assoc ();
			}
			if (isset($_POST['submit'])) {
				$id = $_POST['categoryID'];
				$name = $_POST['categoryName'];
				$edit = "UPDATE categories SET categoryID = '$id', categoryName = '$name' WHERE categoryID = '$categoryID'";
				$result2 = $conn->query($edit);
			}
	?>
	<h1>Sửa thông tin danh mục sản phẩm</h1>
	<form action="" method="POST">
		CategoryID : <input type="text" name="categoryID" value="<?php echo $row['categoryID'];?>">
		CategoryName : <input type="text" name="categoryName" value="<?php echo $row['categoryName'];?>">
		<input type="submit" name="submit" value="Cập nhật">
	</form>

</body>
</html>