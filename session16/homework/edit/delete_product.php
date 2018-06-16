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

			$sql = "DELETE FROM  product WHERE product_id = '$product_id'";
			$result = $conn->query ( $sql );
			header('Location:../listproduct.php');
		}
	?>
</body>
</html>