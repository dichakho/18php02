<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delete Users</title>
</head>
<body>
	<?php
		
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			include("../connect_db.php");
			$sql = "DELETE FROM accounts WHERE id = '$id'";
			$result = $conn->query($sql);
			header('Location:../manage_user.php');
		}
	?>
</body>
</html>