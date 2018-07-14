<?php
	function cateToPro(){
		$conn = new ConnectDB();
		
		$sqlListCategory = "SELECT * FROM categories";
		$listCategory =  mysqli_query($conn->connectDB(),$sqlListCategory);
		$listCategoryOption = '';
		while($row = $listCategory->fetch_assoc()) {
			$id   = $row['id'];
			$name = $row['name'];
	        $listCategoryOption.= "<option value='$id'>$name</option>";
	        
		}
		
		
		echo $listCategoryOption;
	}
?>
<h1>Add new products</h1>
<form action="" method="post">
	<p>Name:<input type="text" name="name"></p>
	<p>
		Category:
		<select name="category_id">
			<?php cateToPro();?>
		</select>
	</p>
	<p>Description:<textarea rows="10" cols="50" name='description'></textarea></p>
	<p>Image:<input type="file" name="image"></p>
	<p>Price:<input type="text" name="price"></p>
	<p>Published:<input type="date" name="published"></p>
	<p><input type="submit" name="add_product" value="Add product"></p>
</form>