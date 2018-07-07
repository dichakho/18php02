<h1>List category</h1>
<p><a href="add_category.php">Add new category</a></p>
<?php
	include 'connectdb.php';
	$sql = "SELECT * FROM categories";
	$result = mysqli_query($conn,$sql);
	if($result->num_rows > 0){
		$i = 1;
		while($row = $result->fetch_assoc()) {
			$id = $row['id'];
			echo  $i.' - '. $row['name'];
			echo " <a href='edit_category.php?idEdit=$id'>EDIT</a>";
			echo " | <a href='delete_category.php?idDel=$id'>DELETE</a>";
			echo "<br>";
			$i++;
		}
	}else{
		echo "No category";
	}
 ?>