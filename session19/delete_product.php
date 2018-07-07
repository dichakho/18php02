<?php
	include 'connectdb.php';
	$id = $_GET['idDel'];
	//var_dump($id);
	$sql = "DELETE FROM products WHERE id = $id";
	mysqli_query($conn,$sql);
	//chuyen trang bang php
	header("Location: list_product.php");
 ?>