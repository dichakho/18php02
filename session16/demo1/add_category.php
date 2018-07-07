<style type="text/css">.error {color:red;}</style>
<?php
	include 'connectdb.php';
	$errorName = '';
	$checkValidate = true;
	if(isset($_POST['add_category'])){
		// echo "da nhan submit de tao danh muc san pham";
		$name = $_POST['name'];
		if($name == ''){
			$errorName =  "Please input category name!";
			$checkValidate = false;
		}
		if($checkValidate){
			$sql = "INSERT INTO categories(name) VALUES('$name')";
			mysqli_query($conn,$sql);
			//chuyen trang bang php
			header("Location: list_category.php");
		}
	}
?>
<h1>Add new category</h1>
<form action="" method="post">
	<p>Name:<input type="text" name="name"></p>
	<span class="error"><?php echo $errorName;?></span>
	<p><input type="submit" name="add_category" value="Add"></p>
</form>