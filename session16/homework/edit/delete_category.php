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

				$sql = "DELETE FROM  categories WHERE categoryID = '$categoryID'";
				$result = $conn->query ( $sql );
			}
	?>

</body>
</html>