<<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Homepage</title>
	<style>
		.menu{
			width: 100%;
			/*margin: 0 auto;*/
		}
		ul{
			display: flex;
			justify-content: space-between;
			padding: 0px; 
			text-align: center;
		}
		ul li{
			width: 14%;
			list-style: none;
			background-color: mediumvioletred;
			
			padding: 20px 0px;
		}
		ul li a{
			text-decoration: none;
			color: white;
		}
		ul li:hover{
			background-color: palevioletred;
		}
	</style>
</head>
<body>
	<div class="menu">
		<ul>
			<li><a href="index.php?action=home">HOME</a></li>
			<li><a href="index.php?action=register">REGISTER</a></li>
			<li><a href="index.php?action=contact">CONTACT</a></li>
			<li><a href="index.php?action=add_category">ADD NEW CATEGORY</a></li>
			<li><a href="index.php?action=add_products">ADD NEW PRODUCTS</a></li>
			<li><a href="index.php?action=list_category">LIST CATEGORY</a></li>
			<li><a href="index.php?action=list_products">LIST PRODUCTS</a></li>
		</ul>
	</div>
</body>
</html>

<!-- <a href="index.php?action=home">HOME</a>
| <a href="index.php?action=register">REGISTER</a>
| <a href="index.php?action=contact">CONTACT</a>
| <a href="index.php?action=add_category">ADD NEW CATEGORY</a>
| <a href="index.php?action=add_products">ADD NEW PRODUCTS</a>
| <a href="index.php?action=list_category">LIST CATEGORY</a>
| <a href="index.php?action=list_products">LIST PRODUCTS</a> -->
<?php 
	include 'controller/home_controller.php';
	$home = new HomeController();
	$home->handleRequest();
?>