<style type="text/css">.error {color:red;}</style>
<?php
	include 'connectdb.php';
	$errorName = '';
	$checkValidate = true;
	//bat dau lay danh muc ra de add vao product
	$sqlListCategory = "SELECT * FROM categories";
	$listCategory =  mysqli_query($conn,$sqlListCategory);
	$listCategoryOption = '';
	while($row = $listCategory->fetch_assoc()) {
		$id   = $row['id'];
		$name = $row['name'];
        $listCategoryOption.= "<option value='$id'>$name</option>";
	}
	// ket thuc lay danh muc ra de add vao product
	if(isset($_POST['add_product'])){
		$name        = $_POST['name'];
		$category_id = $_POST['category_id'];
		$description = $_POST['description'];
		$price       = $_POST['price'];
		$published   = $_POST['published'].' 00:00:00';
		$image       = 'default.png';
		$created     = Date('Y-m-d h:i:s');
		$updated     = Date('Y-m-d h:i:s');
		if($checkValidate){
			$sql = "INSERT INTO products(name,category_id, description, image, price, published, created, updated) VALUES('$name',$category_id,'$description','$image','$price','$published','$created','$updated')";
			mysqli_query($conn,$sql);
			//chuyen trang bang php
			//header("Location: list_category.php");
		}
	}
	//var_dump($sql);exit();
?>
<h1>Add new product</h1>
<form action="" method="post" enctype="multipart/form-data">
	<p>Name:<input type="text" name="name"></p>
	<span class="error"><?php echo $errorName;?></span>
	<p>
		Category:
		<select name="category_id">
			<?php echo $listCategoryOption;?>
		</select>
	</p>
	<p>Description:<textarea rows="10" cols="50" name='description'></textarea></p>
	<p>Image:<input type="file" name="image"></p>
	<p>Price:<input type="text" name="price"></p>
	<p>Published:<input type="date" name="published"></p>
	<p><input type="submit" name="add_product" value="Add product"></p>
</form>