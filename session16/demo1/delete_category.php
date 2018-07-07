<?php
	include 'connectdb.php';
	$id = $_GET['idDel'];
	$sql = "DELETE FROM categories WHERE id = $id";
	mysqli_query($conn,$sql);
	//chuyen trang bang php
	header("Location: list_category.php");

 ?>