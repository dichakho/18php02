<?php
	require_once './model/user_model.php';
	class HomeController{
		function handleRequest(){
			$controller = isset($_GET['controller'])?$_GET['controller']:'products';
			$action = isset($_GET['action'])?$_GET['action']:'list';
			if ($controller == 'products') {
				switch ($action) {
					case 'list':
						include 'views/user/products/list.php';

						break;
					
					default:
						# code...
						break;
				}
			}
		}
	}
?>