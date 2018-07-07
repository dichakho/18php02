<h1>Edit category</h1>
<?php 
	include 'connectdb.php';
	$id = $_GET['idEdit'];
	$errorName = '';
	$checkValidate = true;
	//lay du lieu ra de Edit theo ID
	$sql = "SELECT * FROM categories WHERE id = $id";
	$result = mysqli_query($conn,$sql);
	while($row = $result->fetch_assoc()) {
		$categoryName = $row['name'];
	}
	if(isset($_POST['edit_category'])){
		$name = $_POST['name'];
		if($name == ''){
			$errorName =  "Please input category name!";
			$checkValidate = false;
		}
		if($checkValidate){
			$sql = "UPDATE categories SET name = '$name' WHERE id = $id";
			mysqli_query($conn,$sql);
			//chuyen trang bang php
			header("Location: list_category.php");
		}
	}	
	//
?>
<form action="" method="post">
	<p>Name:<input type="text" name="name" value="<?php echo $categoryName;?>"></p>
	<span class="error"><?php echo $errorName;?></span>
	<p><input type="submit" name="edit_category" value="Edit"></p>
</form>