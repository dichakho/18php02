<h1>Delete</h1>
<?php
		
		$conn = new ConnectDB();
		$id = $_GET['idDel'];
		$sql = "DELETE FROM categories WHERE id = $id";
		mysqli_query($conn->connectDB(),$sql);
		//chuyen trang bang php
		header("Location:list_category.php");
 ?>
 