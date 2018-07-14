<h1>List product</h1>
<p><a href="index.php?action=add_products">Add new product</a></p>
<?php
	$conn = new ConnectDB();
	$sql = "SELECT products.id, products.name, categories.name as categoryName  FROM products INNER JOIN categories ON products.category_id = categories.id";
	$result = mysqli_query($conn->connectDB(),$sql);
	if($result->num_rows > 0){
		$i = 1;
		while($row = $result->fetch_assoc()) {
			$id = $row['id'];
			echo  $i.' - '. $row['categoryName'].' - '. $row['name'];
			echo " <a href='edit_product.php?idEdit=$id'>EDIT</a>";
			echo " | <a href='delete_product.php?idDel=$id'>DELETE</a>";
			echo "<br>";
			$i++;
		}
	}else{
		echo "No product";
	}
 ?>