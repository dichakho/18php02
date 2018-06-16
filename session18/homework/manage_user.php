<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/manage_user.css">
	<title>Manage User</title>
</head>
<body>
	<?php
		include("connect_db.php");
		$sql = "SELECT id, user_name, password FROM accounts";
		$result = $conn->query($sql) or die($conn->error);

	?>
	<h1>Quản lí người dùng</h1>
	<table>
		<tr>
			<th>id</th>
			<th>user_name</th>
			<th>password</th>
			<th>Edit</th>
		</tr>
		<?php
		while($row = $result->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['user_name']."</td>";
			echo "<td>".$row['password']."</td>";
			echo "<td>
				<a href='edit/del_user.php?id=".$row['id']."'>Xóa</a>
			</td>";
			echo "<tr>";
		}
	?>
	</table>

</body>
</html>