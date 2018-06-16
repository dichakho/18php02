<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upadate Users</title>
</head>
<body>
	<?php
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			include("../connect_db.php");
			$sql = "SELECT id, name"
		}
	?>
</body>
</html>