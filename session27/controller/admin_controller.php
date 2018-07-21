<?php 
require_once './model/user_model.php';
class AdminController{
	function handleRequest(){
		$controller = isset($_GET['controller'])?$_GET['controller']:'users';
		$action     = isset($_GET['action'])?$_GET['action']:'list';
		if($controller == 'products'){
			switch ($action) {
				case 'list':
					include 'views/admin/products/list.php';
					break;
				case 'add':
					include 'views/admin/products/add.php';
					if (isset($_POST['add_product'])) {
					$name        = $_POST['name'];
					$category_id = $_POST['category_id'];
					$description = $_POST['description'];
					$price       = $_POST['price'];
					$image       = $_POST['image'];
					$userModel = new UserModel();
					$userModel->addProduct($name,$category_id,$description,$image,$price);
				}
					break;
				default:
					# code...
					break;
			}
		}elseif($controller == 'users'){
			switch ($action) {
				case 'list':
					include 'views/admin/users/list.php';
					break;
				case 'add':
					if(isset($_POST['add_user'])){
						$username = $_POST['username'];
						$password = $_POST['password'];
						$role     = $_POST['role'];
						$userModel = new UserModel();
						$result = $userModel->addUser($username, $password, $role);
						if($result){
							// $this->redirectPage('admin.php?controller=users&action=list');
							header("Location: admin.php?controller=users&action=list");
						}
						
					}
						include 'views/admin/users/add.php';
						break;
					case 'login':
						include 'views/admin/users/login.php';
						if (isset($_POST['submit'])) {
							$username = $_POST['username'];
							$pwd = $_POST['pwd'];
							$userModel = new UserModel();
							$userModel->login($username, $pwd);	
							
						}
													
						break;
					case 'logout':
						$userModel = new UserModel();
						$userModel->logout();
						break;
					case 'register':
						include 'views/admin/users/register.php';
						$userModel= new UserModel();
						$userModel->register();
						break;	

				default:
					# code...
					break;
			}
		}else if ($controller == 'categories') {
			switch ($action) {
				case 'list':
					include 'views/admin/categories/list.php';
					break;
				case 'add':
					include 'views/admin/categories/add.php';
					if (isset($_POST['add_category'])) {
					$name = $_POST['name'];
					$userModel = new UserModel();
					$userModel->addCategory($name);
				}
					break;
				case 'delete':
					include 'views/admin/categories/delete.php';
					$id = $_GET['idDel'];
					$userModel = new UserModel();
					$userModel->addCategory($id);
					break;
				default:
					# code...
					break;
			}
		}
	}
	//ham nay de redirect trang
	// function redirectPage($link){
	// 	header("Location: $link");
	// }
}
?>