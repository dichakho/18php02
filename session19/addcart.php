<?php
	session_start();
	$id=$_GET['idCart'];
	if(isset($_SESSION['product'][$id]))
	{
	 $quantity = $_SESSION['product'][$id] + 1;
	}
	else
	{
	 $quantity=1;
	}
	$_SESSION['product'][$id]=$quantity;
	header('Location:list_product.php');
	
?>