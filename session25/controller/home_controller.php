<?php 
include './model/user_model.php';
class HomeController{
	function handleRequest(){
		$action = isset($_GET['action'])?$_GET['action']:'home';
		switch ($action) {
			case 'home':
				# code...
				include './views/home/index.php';
				break;
			
			case 'register':
				# code...
				include './views/users/register.php';
				//xu ly submit dang ky o day
				if(isset($_POST['register'])){
					$email = $_POST['email'];
					//goi model xu ly luu vao database
					$userModel = new UserModel();
					$userModel->register($email);
				}
				break;
			case 'contact':
				include './views/users/contact.php';
				if (isset($_POST['submit'])) {
					$email = $_POST['email'];
					$phone = $_POST['phone'];
					$userModel = new UserModel();
					$userModel->contact($email, $phone);
				}
				break;
			case 'add_category':
				include './views/users/add_category.php';
				if (isset($_POST['add_category'])) {
					$name = $_POST['name'];
					$userModel = new UserModel();
					$userModel->addCategory($name);
				}
				break;
			case 'add_products':
				include './views/users/add_products.php';
				if (isset($_POST['add_product'])) {
					$name        = $_POST['name'];
					$category_id = $_POST['category_id'];
					$description = $_POST['description'];
					$price       = $_POST['price'];
					$published   = $_POST['published'].' 00:00:00';
					$image       = 'default.png';
					$created     = Date('Y-m-d h:i:s');
					$updated     = Date('Y-m-d h:i:s');
					$userModel = new UserModel();
					$userModel->addProduct($name,$category_id,$description,$image,$price,$published,$created,$updated);
				}
				break;
				case 'list_category':
					include './views/users/list_category.php';
					break;
				case 'list_products':
					include './views/users/list_product.php';
					break;
				
			default:
				# code...
				break;
		}
	}
}
?>